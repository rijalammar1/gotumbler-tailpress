<section class="py-24 lg:py-32 bg-white">
  <div class="container mx-auto">

    <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
      <h2 class="text-xs font-bold uppercase tracking-widest text-teal-600">Teknologi &amp; Keunggulan</h2>
      <p class="text-3xl sm:text-4xl font-extrabold tracking-tight text-zinc-900 leading-tight">
        Dibuat untuk Menemani <br>
        Setiap Petualangan Anda
      </p>
      <p class="text-zinc-500 leading-relaxed">
        Go Tumbler menggabungkan material premium kelas industri dengan desain estetika modern demi kenyamanan hidrasi harian Anda.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <?php
      $features = [
        [
          'title' => 'Unlimited Customization',
          'desc'  => 'Sesuaikan setiap detail produk mulai dari warna, ukuran, hingga material, sesuai dengan visi Anda.',
          'icon'  => 'M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75',
        ],
        [
          'title' => 'Unique Design',
          'desc'  => 'Kami memastikan produk Anda tampil beda dan merepresentasikan brand Anda dengan sempurna.',
          'icon'  => 'M16.862 4.487l1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10',
        ],
        [
          'title' => 'Direct Manufacturer',
          'desc'  => 'Sebagai tangan pertama dalam produksi tumbler custom, kami menghadirkan produk berkualitas langsung dari proses produksi kami sendiri dengan harga kompetitif, kualitas terjamin, dan layanan yang terpercaya.',
          'icon'  => 'M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z',
        ],
        [
          'title' => 'Own Production Facility',
          'desc'  => 'Dengan mesin produksi milik sendiri, kami memiliki kendali penuh dalam setiap proses branding dan finishing produk tumbler. Kami menyediakan design custom mulai dari logo hingga printing menggunakan teknologi UV Print & Laser untuk hasil yang presisi dan tahan lama.',
          'icon'  => 'M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z',
        ],
      ];
      foreach ($features as $feature):
      ?>
        <div class="group p-8 rounded-2xl border border-zinc-100 bg-zinc-50 hover:bg-white hover:shadow-xl hover:border-teal-100 hover:-translate-y-1 transition-all duration-300 cursor-pointer">
          <div class="w-11 h-11 rounded-xl bg-teal-50 group-hover:bg-teal-600 flex items-center justify-center mb-6 transition-colors duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-600 group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr($feature['icon']); ?>" />
            </svg>
          </div>
          <h3 class="font-bold text-zinc-900 group-hover:text-teal-600 text-lg mb-3 transition-colors duration-300">
            <?php echo esc_html($feature['title']); ?>
          </h3>
          <p class="text-zinc-600 leading-relaxed">
            <?php echo esc_html($feature['desc']); ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>