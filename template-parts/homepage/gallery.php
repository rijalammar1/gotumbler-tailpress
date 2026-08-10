<section class="py-16 bg-white">
  <div class="container mx-auto">
    <div class="relative rounded-2xl overflow-hidden shadow-xl max-w-6xl mx-auto">

      <div class="swiper showcase-swiper">
        <div class="swiper-wrapper">
          <?php
          $showcase_slides = [
            'Banner-GT-1-1.webp',
            'Banner-GT-2-1.webp',
            'Banner-GT-3.webp',
          ];
          foreach ($showcase_slides as $slide):
          ?>
            <div class="swiper-slide">
              <img
                src="<?php echo esc_url(get_template_directory_uri() . '/resources/images/showcase/' . $slide); ?>"
                alt="Showcase Gotumbler"
                class="w-full h-[420px] md:h-[520px] object-cover">
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Pagination dots -->
        <div class="showcase-pagination absolute bottom-6 left-0 right-0 flex justify-center gap-2 z-10"></div>
      </div>

      <!-- Navigation Arrows -->
      <button class="showcase-prev absolute left-6 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white/70 hover:bg-white flex items-center justify-center shadow-md transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-zinc-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
      <button class="showcase-next absolute right-6 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white/70 hover:bg-white flex items-center justify-center shadow-md transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-zinc-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </button>

    </div>
  </div>
</section>