<?php

if (is_file(__DIR__ . '/vendor/autoload_packages.php')) {
  require_once __DIR__ . '/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
  // Override pengecekan dev server agar tidak pernah cURL ke localhost:3000
  $compiler = new class extends TailPress\Framework\Assets\ViteCompiler {
    public function isDevServerRunning(): bool
    {
      return false;
    }
  };

  return TailPress\Framework\Theme::instance()
    ->assets(fn($manager) => $manager
      ->withCompiler(
        $compiler,
        fn($compiler) => $compiler
          ->registerAsset('resources/css/app.css')
          ->registerAsset('resources/js/app.js')
          ->editorStyleFile('resources/css/editor-style.css')
      )
      ->enqueueAssets())
    ->features(fn($manager) => $manager->add(
      TailPress\Framework\Features\MenuOptions::class
    ))
    ->menus(fn($manager) => $manager->add(
      'primary',
      __('Primary Menu', 'tailpress')
    ))
    ->themeSupport(fn($manager) => $manager->add([
      'title-tag',
      'custom-logo',
      'post-thumbnails',
      'align-wide',
      'wp-block-styles',
      'responsive-embeds',
      'woocommerce',
      'html5' => [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      ],
    ]));
}

tailpress();

function gotumbler_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'gotumbler_add_woocommerce_support');

function tailpress_custom_fonts()
{
  wp_enqueue_style(
    'plus-jakarta-sans',
    'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap',
    [],
    null
  );
}
add_action('wp_enqueue_scripts', 'tailpress_custom_fonts');

function gotumbler_limit_search_to_products($query)
{
  if (!is_admin() && $query->is_main_query() && $query->is_search()) {
    $query->set('post_type', 'product');
  }
}
add_action('pre_get_posts', 'gotumbler_limit_search_to_products');

function gotumbler_product_search_template($template)
{
  if (is_search() && get_query_var('post_type') === 'product') {
    $product_template = locate_template('woocommerce/archive-product.php');

    if ($product_template) {
      global $wp_query;

      wc_setup_loop([
        'total'        => $wp_query->found_posts,
        'total_pages'  => $wp_query->max_num_pages,
        'per_page'     => $wp_query->get('posts_per_page'),
        'current_page' => max(1, $wp_query->get('paged')),
      ]);

      return $product_template;
    }
  }

  return $template;
}
add_filter('template_include', 'gotumbler_product_search_template', 99);

// buat panggil costume css di woocommerce
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

add_filter('woocommerce_default_catalog_orderby', function () {
  return 'date';
});

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);

function gotumbler_remove_reviews_tab($tabs)
{
  unset($tabs['reviews']);

  return $tabs;
}
add_filter('woocommerce_product_tabs', 'gotumbler_remove_reviews_tab', 98);

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

add_filter('gettext', function ($translated, $original, $domain) {
  if ($original === 'Related products' && $domain === 'woocommerce') {
    return 'Produk Terkait';
  }

  return $translated;
}, 10, 3);

// Tambah field "Video URL" di tab General product data ini pakai extension
add_action('woocommerce_product_options_general_product_data', function () {
  woocommerce_wp_text_input([
    'id'          => '_gotumbler_video_url',
    'label'       => 'Video Produk (URL file .mp4)',
    'placeholder' => 'https://.../video.mp4',
    'desc_tip'    => true,
    'description' => 'Upload video ke Media Library dulu, lalu paste URL file .mp4-nya di sini.',
  ]);
});

// Simpan field-nya pas produk di-update
add_action('woocommerce_process_product_meta', function ($post_id) {
  if (isset($_POST['_gotumbler_video_url'])) {
    update_post_meta($post_id, '_gotumbler_video_url', esc_url_raw($_POST['_gotumbler_video_url']));
  }
});

// Endpoint AJAX buat lazy-load widget review Google (Trustindex)
add_action('wp_ajax_gotumbler_load_reviews', 'gotumbler_load_reviews_callback');
add_action('wp_ajax_nopriv_gotumbler_load_reviews', 'gotumbler_load_reviews_callback');
function gotumbler_load_reviews_callback()
{
  echo do_shortcode('[trustindex no-registration=google]');
  wp_die();
}

function gotumbler_get_attachment_id_from_url($url)
{
  global $wpdb;
  $attachment_id = $wpdb->get_var($wpdb->prepare(
    "SELECT ID FROM $wpdb->posts WHERE guid = %s",
    $url
  ));
  return $attachment_id;
}
