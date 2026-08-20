<?php

if (is_file(__DIR__ . '/vendor/autoload_packages.php')) {
  require_once __DIR__ . '/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
  return TailPress\Framework\Theme::instance()
    ->assets(
      fn($manager) => $manager
        ->withCompiler(
          new TailPress\Framework\Assets\ViteCompiler,
          fn($compiler) => $compiler
            ->registerAsset('resources/css/app.css')
            ->registerAsset('resources/js/app.js')
            ->editorStyleFile('resources/css/editor-style.css')
        )
        ->enqueueAssets()
    )
    ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
    ->menus(fn($manager) => $manager->add('primary', __('Primary Menu', 'tailpress')))
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
      ]
    ]));
}

tailpress();

/**
 * WooCommerce theme support.
 * Wajib biar WooCommerce mempercayai tema untuk override template & style-nya.
 */
// function gotumbler_add_woocommerce_support()
// {
//   add_theme_support('woocommerce');
//   add_theme_support('wc-product-gallery-zoom');
//   add_theme_support('wc-product-gallery-lightbox');
//   add_theme_support('wc-product-gallery-slider');
// }
// add_action('after_setup_theme', 'gotumbler_add_woocommerce_support');

function tailpress_custom_fonts()
{
  wp_enqueue_style('plus-jakarta-sans', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap', [], null);
}
add_action('wp_enqueue_scripts', 'tailpress_custom_fonts');


/*Limit search results to WooCommerce products.*/
function gotumbler_limit_search_to_products($query)
{
  if (!is_admin() && $query->is_main_query() && $query->is_search()) {
    $query->set('post_type', 'product');
  }
}
add_action('pre_get_posts', 'gotumbler_limit_search_to_products');

/*Use archive-product.php template for WooCommerce search results.*/
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
add_filter('woocommerce_default_catalog_orderby', function () {
  return 'date';
});
