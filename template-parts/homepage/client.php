<section class="py-12 bg-white border-y border-zinc-100">
  <div class="container mx-auto">
    <p class="text-center text-xs font-semibold uppercase tracking-widest text-zinc-400 mb-8">
      Dipercaya untuk Custom Merchandise oleh BUMN, Instansi Pemerintah, Universitas &amp; Swasta
    </p>

    <div class="swiper swiper-logos max-w-5xl mx-auto px-4 select-none">
      <div class="swiper-wrapper items-center">
        <?php
        $client_logos = [
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/katadata.png', 'alt' => 'Client 1'],
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/pertamina.png', 'alt' => 'Client 2'],
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/ruangguru.png', 'alt' => 'Client 3'],
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/telkomindo.png', 'alt' => 'Client 4'],
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/mandiri.png', 'alt' => 'Client 5'],
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/BI_Logo.png', 'alt' => 'Client 6'],
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/bsi.png', 'alt' => 'Client 7'],
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/jenius.png', 'alt' => 'Client 8'],
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/ifg.png', 'alt' => 'Client 9'],
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/imonetizeit.png', 'alt' => 'Client 10'],
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/revou.png', 'alt' => 'Client 11'],
          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/08/wagely.png', 'alt' => 'Client 12'],
        ];
        $client_logos = array_merge($client_logos, $client_logos, $client_logos);
        foreach ($client_logos as $logo):
        ?>
          <div class="swiper-slide flex items-center justify-center !w-auto">
            <img
              src="<?php echo esc_url($logo['url']); ?>"
              alt="<?php echo esc_attr($logo['alt']); ?>"
              class="h-12 md:h-16 w-auto object-contain max-w-[155px] opacity-80 hover:opacity-100 hover:scale-105 cursor-pointer">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>