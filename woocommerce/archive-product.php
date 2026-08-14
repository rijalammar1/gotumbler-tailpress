<?php

/**
 * The template for displaying product archive pages (shop, category, search)
 *
 * @package TailPress
 */

get_header('shop');

?>

<div class="bg-zinc-50 border-b border-zinc-100 py-16">
  <div class="container mx-auto max-w-6xl px-6">

    <!-- Breadcrumb -->
    <nav class="text-sm text-zinc-400 mb-5">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-zinc-600">Home</a>
      <span class="mx-1">/</span>
      <span class="text-zinc-600">Shop</span>
    </nav>

    <!-- Heading -->
    <?php if (is_search()): ?>
      <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-zinc-900 mb-4">
        Search results: &ldquo;<?php echo get_search_query(); ?>&rdquo;
      </h1>
    <?php else: ?>
      <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-zinc-900 mb-4">
        <?php woocommerce_page_title(); ?>
      </h1>
    <?php endif; ?>

    <p class="text-base text-zinc-500 leading-relaxed max-w-2xl">
      Koleksi tumbler premium custom untuk merchandise eksklusif korporasi, kementerian, BUMN, dan universitas terkemuka. Pilih desain terbaik dengan pilihan warna kustom dan logo presisi tinggi.
    </p>

  </div>
</div>

<div class="container mx-auto max-w-6xl px-6 py-16 min-h-[85vh]">

  <?php if (woocommerce_product_loop()): ?>

    <!-- Results count + sorting -->
    <div class="flex flex-wrap justify-between items-center gap-3 mb-5 pb-4 border-b border-zinc-100">
      <p class="text-xs text-zinc-500">
        <?php
        global $wp_query;
        $total = $wp_query->found_posts;
        echo $total > 1 ? "Showing all {$total} results" : "Showing {$total} result";
        ?>
      </p>

      <div class="flex items-center gap-3">
        <span class="text-xs font-semibold uppercase tracking-wide text-zinc-400">Urutkan:</span>
        <?php woocommerce_catalog_ordering(); ?>
      </div>
    </div>

    <div class="grid gap-6" style="grid-template-columns: repeat(auto-fill, minmax(220px, 260px));">
      <?php
      while (have_posts()):
        the_post();
        wc_get_template_part('content', 'product');
      endwhile;
      ?>
    </div>

    <?php woocommerce_pagination(); ?>

  <?php else: ?>

    <div class="text-center py-12">
      <p class="text-zinc-400 text-sm">Tidak ada produk yang ditemukan.</p>
    </div>

  <?php endif; ?>

</div>

<?php
get_footer('shop');
