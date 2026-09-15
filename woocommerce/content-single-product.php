<?php

/**
 * Custom WooCommerce Single Product Template
 *
 * @package WooCommerce
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 */
do_action('woocommerce_before_single_product');

/**
 * Password protected product.
 */
if (post_password_required()) {
  echo get_the_password_form();
  return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

  <div class="container mx-auto max-w-5xl px-4 mt-8 mb-20">

    <!-- BREADCRUMB -->
    <div class="flex items-center justify-between mb-5 text-sm">

      <nav class="text-zinc-400">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-zinc-600 transition-colors">
          Home
        </a>

        <span class="mx-1">/</span>

        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="hover:text-zinc-600 transition-colors">
          Katalog
        </a>

        <?php
        $breadcrumb_terms = get_the_terms($product->get_id(), 'product_cat');

        if ($breadcrumb_terms && !is_wp_error($breadcrumb_terms)) :
        ?>
          <span class="mx-1">/</span>
          <span class="text-zinc-500"><?php echo esc_html($breadcrumb_terms[0]->name); ?></span>
        <?php endif; ?>

        <span class="mx-1">/</span>
        <span class="text-zinc-900 font-medium"><?php the_title(); ?></span>
      </nav>

      <!-- Back -->
      <a href="javascript:history.back()" class="flex items-center gap-1.5 text-zinc-600 hover:text-zinc-900 font-medium shrink-0 ml-4 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        Kembali
      </a>
    </div>

    <!--MAIN PRODUCT CARD-->
    <div class="gotumbler-product-card">

      <!-- PRODUCT GALLERY -->
      <div class="product-gallery-wrap">

        <?php
        $attachment_ids = $product->get_gallery_image_ids();
        $main_image_id  = $product->get_image_id();
        $video_url      = get_post_meta($product->get_id(), '_gotumbler_video_url', true);

        $all_image_ids = $main_image_id
          ? array_merge([$main_image_id], $attachment_ids)
          : $attachment_ids;

        $all_image_ids = array_values(array_unique($all_image_ids));

        if (!empty($all_image_ids) || $video_url) :
          $first_image_url = !empty($all_image_ids) ? wp_get_attachment_image_url($all_image_ids[0], 'large') : '';
        ?>

          <!-- Main Image -->
          <div class="gotumbler-main-image">
            <?php if ($video_url) : ?>
              <video id="product-main-video" class="max-h-full max-w-full object-contain" controls playsinline>
                <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
              </video>
            <?php endif; ?>

            <img
              id="product-main-view"
              src="<?php echo esc_url($first_image_url); ?>"
              alt="<?php echo esc_attr($product->get_name()); ?>"
              class="max-h-full max-w-full object-contain select-none <?php echo $video_url ? 'hidden' : ''; ?>">

            <?php if (count($all_image_ids) > 1 || $video_url) : ?>
              <!-- Previous -->
              <button type="button" onclick="gotumblerGallerySwap(-1)" class="gotumbler-gallery-arrow left-3" aria-label="Previous image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
              </button>

              <!-- Next -->
              <button type="button" onclick="gotumblerGallerySwap(1)" class="gotumbler-gallery-arrow right-3" aria-label="Next image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            <?php endif; ?>
          </div>

          <!-- THUMBNAILS -->
          <?php if (count($all_image_ids) > 1 || $video_url) : ?>
            <div class="gotumbler-gallery-thumbnails">
              <?php if ($video_url) : ?>
                <button type="button" onclick="gotumblerGalleryJump('video', this)" class="product-gallery-thumb <?php echo $video_url ? 'is-active' : ''; ?>">
                  <div class="relative w-full h-full flex items-center justify-center bg-zinc-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                      <path d="M8 5v14l11-7z" />
                    </svg>
                  </div>
                </button>
              <?php endif; ?>

              <?php foreach ($all_image_ids as $index => $img_id) :
                $thumb_url = wp_get_attachment_image_url($img_id, 'large');
                $is_active = $index === 0 && !$video_url;
              ?>
                <button type="button" onclick="gotumblerGalleryJump('<?php echo esc_js($thumb_url); ?>', this)" class="product-gallery-thumb <?php echo $is_active ? 'is-active' : ''; ?>">
                  <img src="<?php echo esc_url($thumb_url); ?>" alt="" class="max-h-full max-w-full object-contain">
                </button>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <!-- GALLERY JAVASCRIPT -->
          <script>
            (function() {
              const galleryImages = <?php
                                    echo wp_json_encode(array_map(function ($id) {
                                      return wp_get_attachment_image_url($id, 'large');
                                    }, $all_image_ids));
                                    ?>;
              const videoUrl = <?php echo wp_json_encode($video_url ?: null); ?>;
              const items = videoUrl ? ['video', ...galleryImages] : galleryImages;

              let currentIndex = 0;

              const mainImage = document.getElementById('product-main-view');
              const mainVideo = document.getElementById('product-main-video');

              function showItem(item) {
                if (item === 'video') {
                  if (mainVideo) {
                    mainVideo.classList.remove('hidden');
                    mainVideo.play().catch(() => {});
                  }
                  if (mainImage) mainImage.classList.add('hidden');
                } else {
                  if (mainVideo) {
                    mainVideo.pause();
                    mainVideo.classList.add('hidden');
                  }
                  if (mainImage) {
                    mainImage.classList.remove('hidden');
                    mainImage.src = item;
                  }
                }
              }

              window.gotumblerGallerySwap = function(direction) {
                if (!items.length) return;

                currentIndex = (currentIndex + direction + items.length) % items.length;

                showItem(items[currentIndex]);
                updateActiveThumb(currentIndex);
              };

              window.gotumblerGalleryJump = function(url, btn) {
                showItem(url);

                currentIndex = items.indexOf(url);

                document.querySelectorAll('.product-gallery-thumb').forEach(function(element) {
                  element.classList.remove('is-active');
                });

                btn.classList.add('is-active');
              };

              function updateActiveThumb(index) {
                document.querySelectorAll('.product-gallery-thumb').forEach(function(element, i) {
                  element.classList.toggle('is-active', i === index);
                });
              }
            })();
          </script>

        <?php endif; ?>
      </div>

      <!-- PRODUCT SUMMARY -->
      <div class="summary entry-summary">

        <!-- Category -->
        <?php
        $categories = wc_get_product_category_list($product->get_id());

        if ($categories) :
        ?>
          <p class="gotumbler-product-category">
            <?php echo wp_strip_all_tags($categories); ?>
          </p>
        <?php endif; ?>

        <?php
        /**
         * WooCommerce summary hook.
         *
         * Title tetap digunakan.
         * Rating, price, excerpt, add to cart,
         * meta dan sharing sudah dihapus dari functions.php.
         */
        do_action('woocommerce_single_product_summary');
        ?>

        <!-- Product Short Description -->
        <?php $short_description = $product->get_short_description(); ?>
        <?php if ($short_description) : ?>
          <div class="gotumbler-product-description">
            <?php echo wp_kses_post($short_description); ?>
          </div>
        <?php endif; ?>

        <!--  CUSTOM SERVICE  -->
        <div class="custom-product-info">
          <strong>Layanan Tumbler Custom</strong>

          <p>
            Gratis pembuatan sampel desain mockup logo Anda pada
            tumbler sebelum naik cetak massal.
          </p>

          <button type="button" onclick="openWaPopup('Product Page - <?php echo esc_js($product->get_name()); ?>')" class="btn-whatsapp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
              <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.29-1.39a9.87 9.87 0 0 0 4.75 1.21h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2zm5.8 14.16c-.24.68-1.4 1.3-1.93 1.36-.5.06-1.02.28-3.42-.71-2.9-1.2-4.77-4.14-4.92-4.33-.14-.19-1.18-1.57-1.18-3 0-1.42.75-2.12 1.02-2.41.27-.29.58-.36.77-.36.2 0 .39 0 .56.01.18.01.42-.07.66.5.24.58.83 2 .9 2.15.07.15.12.32.02.51-.1.19-.15.31-.3.48-.15.17-.31.38-.44.51-.15.14-.3.3-.13.59.17.29.75 1.24 1.62 2 1.11 1 2.05 1.31 2.34 1.46.29.15.46.13.63-.08.17-.2.72-.84.91-1.13.19-.29.38-.24.63-.14.26.1 1.64.77 1.92.91.28.14.47.21.54.33.07.12.07.71-.17 1.39z" />
            </svg>
            Hubungi Sales via WA
          </button>
        </div>

        <div class="custom-product-badges">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="w-4 h-4">
              <polyline points="20 6 9 17 4 12" />
            </svg>
            Kualitas Terjamin
          </span>

          <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="w-4 h-4">
              <polyline points="20 6 9 17 4 12" />
            </svg>
            Laser / UV Print Presisi
          </span>

          <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="w-4 h-4">
              <polyline points="20 6 9 17 4 12" />
            </svg>
            Area Cetak Luas
          </span>

          <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="w-4 h-4">
              <polyline points="20 6 9 17 4 12" />
            </svg>
            Faktur Pajak (Legalitas Lengkap)
          </span>
        </div>
      </div>
    </div>

    <!-- Product Long Description -->
    <?php $full_description = $product->get_description(); ?>
    <?php if ($full_description) : ?>
      <div class="gotumbler-product-detail">
        <h2>Deskripsi Detail Produk</h2>
        <div class="gotumbler-detail-line"></div>

        <div class="gotumbler-detail-content">
          <?php echo wp_kses_post(wpautop($full_description)); ?>
        </div>
      </div>
    <?php endif; ?>

    <?php
    $related_ids = wc_get_related_products($product->get_id(), 4);

    if (!empty($related_ids)) :
      $related_args = [
        'post_type'           => 'product',
        'ignore_sticky_posts' => 1,
        'no_found_rows'       => 1,
        'posts_per_page'      => count($related_ids),
        'orderby'             => 'post__in',
        'post__in'            => $related_ids,
      ];

      $related_query = new WP_Query($related_args);
    ?>
      <div class="gotumbler-related-products">
        <div class="gotumbler-related-heading">
          <div>
            <span>Rekomendasi Lainnya</span>
            <h3>Produk Terkait</h3>
          </div>
        </div>

        <div class="gotumbler-related-grid">
          <?php
          if ($related_query->have_posts()) :
            while ($related_query->have_posts()) :
              $related_query->the_post();
              wc_get_template_part('content', 'product');
            endwhile;
          endif;

          wp_reset_postdata();
          ?>
        </div>
      </div>
    <?php endif; ?>

  </div>

</div>

<?php do_action('woocommerce_after_single_product'); ?>