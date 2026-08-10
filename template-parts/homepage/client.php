<section class="py-12 bg-white border-y border-zinc-100">
  <div class="container mx-auto">
    <p class="text-center text-xs font-semibold uppercase tracking-widest text-zinc-400 mb-8">
      Dipercaya untuk Custom Merchandise oleh BUMN, Instansi Pemerintah, Universitas &amp; Swasta
    </p>

    <div class="swiper swiper-logos max-w-5xl mx-auto px-4 select-none">
      <div class="swiper-wrapper items-center">
        <?php
        $client_logos = [
          ['file' => 'katadata.png', 'alt' => 'Client 1'],
          ['file' => 'pertamina.png', 'alt' => 'Client 2'],
          ['file' => 'ruangguru.png', 'alt' => 'Client 3'],
          ['file' => 'telkomindo.png', 'alt' => 'Client 4'],
          ['file' => 'mandiri.png', 'alt' => 'Client 5'],
          ['file' => 'BI_Logo.png', 'alt' => 'Client 6'],
          ['file' => 'bsi.png', 'alt' => 'Client 7'],
          ['file' => 'jenius.png', 'alt' => 'Client 8'],
          ['file' => 'ifg.png', 'alt' => 'Client 9'],
          ['file' => 'imonetizeit.png', 'alt' => 'Client 10'],
          ['file' => 'revou.png', 'alt' => 'Client 11'],
          ['file' => 'wagely.png', 'alt' => 'Client 12'],
        ];
        $client_logos = array_merge($client_logos, $client_logos, $client_logos);
        foreach ($client_logos as $logo):
        ?>
          <div class="swiper-slide flex items-center justify-center !w-auto">
            <img
              src="<?php echo esc_url(get_template_directory_uri() . '/resources/images/clients/' . $logo['file']); ?>"
              alt="<?php echo esc_attr($logo['alt']); ?>"
              class="h-12 md:h-16 w-auto object-contain max-w-[155px] opacity-80 hover:opacity-100 hover:scale-105 cursor-pointer">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>