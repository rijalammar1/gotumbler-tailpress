<section class="py-24 bg-white">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

      <!-- Text Content -->
      <div class="lg:col-span-5">
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-zinc-900 leading-tight mb-6">
          Jasa Cetak UV &amp; Laser <br>
          Premium untuk Tumbler Custom
        </h2>
        <p class="text-zinc-600 leading-relaxed mb-8">
          Tampilkan identitas brand Anda dengan hasil cetak UV full color dan laser grafir yang presisi, tahan lama, serta memberikan kesan profesional pada setiap tumbler.
        </p>

        <div class="space-y-4">
          <?php
          $checklist = [
            'Warna tajam dan detail presisi.',
            'Ukiran laser permanen.',
            'Cocok untuk logo dan branding perusahaan.',
          ];
          foreach ($checklist as $item):
          ?>
            <div class="flex items-center gap-4">
              <div class="w-8 h-8 rounded-full bg-teal-50 flex items-center justify-center flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <p class="text-zinc-700 font-medium"><?php echo esc_html($item); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Media Carousel -->
      <div class="lg:col-span-7 relative">
        <div class="swiper printing-swiper rounded-2xl overflow-hidden shadow-xl">
          <div class="swiper-wrapper">
            <?php
            $printing_slides = [
              [
                'image'   => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/UV-2.webp',
                'badge'   => 'Cetak UV',
                'caption' => 'Hasil Cetak UV - Desain Kreatif',
              ],
              [
                'image'   => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/Laser-1.webp',
                'badge'   => 'Grafir Laser',
                'caption' => 'Hasil Grafir - Presisi & Elegan',
              ],
              [
                'image'   => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/UV-1.webp',
                'badge'   => 'Full Color',
                'caption' => 'Hasil Cetak UV - Warna Tajam & Full Color',
              ],
            ];
            foreach ($printing_slides as $slide):
            ?>
              <div class="swiper-slide relative">
                <img
                  src="<?php echo esc_url($slide['image']); ?>"
                  alt="<?php echo esc_attr($slide['caption']); ?>"
                  class="w-full h-[420px] object-cover">

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>

                <div class="absolute bottom-6 left-6 right-6">
                  <span class="inline-block bg-teal-600 text-white text-xs font-bold uppercase tracking-wide px-3 py-1 rounded-full mb-3">
                    <?php echo esc_html($slide['badge']); ?>
                  </span>
                  <h3 class="text-white text-xl font-bold">
                    <?php echo esc_html($slide['caption']); ?>
                  </h3>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Navigation Arrows -->
        <button class="printing-prev absolute left-4 top-1/2 -translate-y-1/2 z-10 w-10 h-10 rounded-full bg-white/80 hover:bg-white flex items-center justify-center shadow-md transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-zinc-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button class="printing-next absolute right-4 top-1/2 -translate-y-1/2 z-10 w-10 h-10 rounded-full bg-white/80 hover:bg-white flex items-center justify-center shadow-md transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-zinc-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>

    </div>
  </div>
</section>