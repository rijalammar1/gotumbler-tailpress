<section class="py-12 bg-white  border-zinc-100">

  <div class="container mx-auto">

    <p class="text-center text-xs font-semibold uppercase tracking-widest text-zinc-400 mb-8">

      Dipercaya untuk Custom Merchandise oleh BUMN, Instansi Pemerintah, Universitas &amp; Swasta

    </p>



    <div class="swiper swiper-logos max-w-5xl mx-auto px-4 select-none">

      <div class="swiper-wrapper items-center">

        <?php

        $client_logos = [

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/katadata.png', 'alt' => 'Katadata'],

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/pertamina.png', 'alt' => 'Pertamina'],

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/ruangguru.png', 'alt' => 'Ruangguru'],

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/telkomindo.png', 'alt' => 'Telkomindo'],

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/mandiri.png', 'alt' => 'Bank Mandiri'],

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/BI_Logo.png', 'alt' => 'Bank Indonesia'],

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/bsi.png', 'alt' => 'Bank Syariah Indonesia'],

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/jenius.png', 'alt' => 'Jenius'],

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/ifg.png', 'alt' => 'IFG'],

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/imonetizeit.png', 'alt' => 'iMonetizeit'],

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/revou.png', 'alt' => 'RevoU'],

          ['url' => 'http://belajar-tailpress.test/wp-content/uploads/2026/09/wagely.png', 'alt' => 'Wagely'],

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