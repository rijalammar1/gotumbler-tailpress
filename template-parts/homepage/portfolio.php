<section class="py-24 bg-white overflow-hidden">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

      <!-- Title & Nav -->
      <div class="lg:col-span-3">
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-zinc-900 leading-tight mb-4">
          Portfolio
        </h2>
        <p class="text-zinc-600 leading-relaxed mb-8">
          Kumpulan produk pilihan yang dipesan oleh klien untuk mendukung kebutuhan bisnis dan merek mereka.
        </p>

        <div class="flex gap-3">
          <button class="portfolio-prev w-10 h-10 rounded-full border border-zinc-300 hover:bg-zinc-50 flex items-center justify-center transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-zinc-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <button class="portfolio-next w-10 h-10 rounded-full border border-zinc-300 hover:bg-zinc-50 flex items-center justify-center transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-zinc-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Portfolio Carousel -->
      <div class="lg:col-span-9 relative">
        <div class="swiper portfolio-swiper">
          <div class="swiper-wrapper">
            <?php
            $portfolio_items = [
              'Cust-GT-1.webp',
              'Cust-GT-2.webp',
              'Cust-GT-3.webp',
              'Cust-GT-4.webp',
              'Cust-GT-5.webp',
              'Cust-GT-6.webp',
              'Cust-GT-7.webp',
              'Cust-GT-8.webp',
            ];
            foreach ($portfolio_items as $item):
            ?>
              <div class="swiper-slide !w-[320px]">
                <div class="rounded-2xl border border-zinc-100 overflow-hidden bg-white shadow-sm">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/resources/images/portfolio/' . $item); ?>"
                    alt="Portfolio Gotumbler"
                    class="w-full h-72 object-cover">
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>