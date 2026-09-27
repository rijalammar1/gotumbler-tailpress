<?php

/**
 * Theme header template.
 *
 * @package TailPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo esc_attr(get_bloginfo('description') ?: 'Go Tumbler - Tumbler custom premium untuk brand dan organisasi Anda. Cetak UV dan laser presisi, kualitas terjamin, cocok untuk corporate gift.'); ?>">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <!-- Preconnect koneksi Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Preload Gambar Hero LCP -->
  <?php
  $upload_dir = wp_upload_dir();
  $lcp_hero_image = $upload_dir['baseurl'] . '/2026/09/Hero-GT-1-1.webp';
  ?>
  <link rel="preload" as="image" href="<?php echo esc_url($lcp_hero_image); ?>" type="image/webp" fetchpriority="high">

  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-zinc-900 antialiased'); ?>>
  <?php do_action('tailpress_site_before'); ?>

  <div id="page" class="min-h-screen flex flex-col">
    <?php do_action('tailpress_header'); ?>

    <header class="sticky top-0 z-50 bg-white border-b border-zinc-100 py-4">
      <div class="container mx-auto flex justify-between items-center relative">
        <!-- Logo -->
        <div>
          <?php if (has_custom_logo()): ?>
            <?php the_custom_logo(); ?>
          <?php else: ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="!no-underline flex items-center gap-2">
              <img
                src="<?php echo esc_url($upload_dir['baseurl'] . '/2026/08/cropped-Gotumbler_Logo_3_10.webp'); ?>"
                alt="<?php bloginfo('name'); ?>"
                width="245"
                height="53"
                class="h-[53px] w-auto aspect-[245/53]"
                decoding="async">
            </a>
          <?php endif; ?>
        </div>

        <!-- Mobile toggle -->
        <?php if (has_nav_menu('primary')): ?>
          <div class="md:hidden">
            <button type="button" aria-label="Toggle navigation" id="primary-menu-toggle" class="p-2 -mr-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" id="menu-icon-open">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hidden" id="menu-icon-close">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        <?php endif; ?>

        <!-- Menu + Search -->
        <div id="primary-navigation"
          class="hidden md:flex md:flex-row md:items-center md:gap-8
                  md:static md:bg-transparent md:border-none md:shadow-none md:p-0 md:w-auto
                  absolute top-full left-0 right-0 bg-white border-b border-zinc-100 shadow-lg flex-col items-start gap-4 p-6 w-full">
          <nav class="w-full md:w-auto">
            <?php if (current_user_can('administrator') && !has_nav_menu('primary')): ?>
              <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>" class="text-sm text-zinc-600"><?php esc_html_e('Edit Menus', 'tailpress'); ?></a>
            <?php else: ?>
              <?php
              wp_nav_menu([
                'container_id'    => 'primary-menu',
                'container_class' => '',
                'menu_class'      => 'flex flex-col md:flex-row gap-4 md:gap-8 w-full md:w-auto [&_a]:!no-underline [&_a]:text-zinc-700 [&_a]:font-medium [&_a]:hover:text-emerald-600',
                'theme_location'  => 'primary',
                'fallback_cb'     => false,
              ]);
              ?>
            <?php endif; ?>
          </nav>

          <div class="w-full md:w-56">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </header>

    <div id="content" class="site-content grow">
      <?php do_action('tailpress_content_start'); ?>
      <main>