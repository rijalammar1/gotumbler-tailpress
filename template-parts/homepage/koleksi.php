<!-- KOLEKSI PRODUK -->
<section class="py-24 bg-zinc-50">
  <div class="container mx-auto">

    <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
      <h2 class="text-xs font-bold uppercase tracking-widest text-green-600">Koleksi Produk</h2>
      <p class="text-3xl sm:text-4xl font-extrabold tracking-tight text-zinc-900 leading-tight">
        Pilihan Varian Go Tumbler Terbaik
      </p>
      <p class="text-zinc-500 leading-relaxed">
        Temukan model yang paling cocok untuk menemani produktivitas dan petualangan harian Anda.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
      <?php
      $products = [
        [
          'image'    => 'Arizona Kayu Web 1.jpg',
          'category' => 'Uncategorized',
          'name'     => 'Arizone',
        ],
        [
          'image'    => 'Niagara Web 1.jpg',
          'category' => 'Uncategorized',
          'name'     => 'Niagara',
        ],
        [
          'image'    => 'Mug Egg Web 1.jpg',
          'category' => 'Uncategorized',
          'name'     => 'Mug Egg',
        ],
      ];
      foreach ($products as $product):
      ?>
        <div class="group flex flex-col justify-between bg-white rounded-2xl border border-zinc-100 p-3 hover:shadow-xl transition-all duration-350">

          <div class="relative bg-zinc-50 rounded-xl aspect-square overflow-hidden mb-4 flex items-center justify-center border border-zinc-100">
            <img
              src="<?php echo esc_url(get_template_directory_uri() . '/resources/images/products/' . $product['image']); ?>"
              alt="<?php echo esc_attr($product['name']); ?>"
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 select-none">
          </div>

          <div class="space-y-3">
            <p class="text-xs font-bold uppercase tracking-wide text-zinc-900">
              <?php echo esc_html($product['category']); ?>
            </p>
            <h3 class="text-base font-bold text-zinc-900">
              <?php echo esc_html($product['name']); ?>
            </h3>

            <div class="flex gap-2">
              <a href="#" class="flex-1 bg-zinc-900 hover:bg-zinc-800 text-white text-xs font-semibold px-3 py-2 rounded-full inline-flex items-center justify-center gap-1.5 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                Detail
              </a>
              <a href="https://wa.me/62xxxxxxxxxx" class="flex-1 border border-zinc-300 hover:border-teal-500 hover:bg-teal-50 text-xs font-semibold px-3 py-2 rounded-full inline-flex items-center justify-center gap-1.5 transition-colors text-zinc-900 hover:text-teal-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M17.6 6.32A8.86 8.86 0 0 0 12.05 4a8.94 8.94 0 0 0-7.66 13.44L3 20.9l3.55-1.33a8.94 8.94 0 0 0 5.5 1.88h.01A8.94 8.94 0 0 0 21 12.5a8.86 8.86 0 0 0-2.4-6.18Zm-5.55 13.7h-.01a7.43 7.43 0 0 1-4.14-1.24l-.3-.19-2.35.87.78-2.29-.19-.3a7.42 7.42 0 0 1-1.15-4A7.43 7.43 0 0 1 12.06 5.5a7.39 7.39 0 0 1 5.25 2.17 7.36 7.36 0 0 1 2.17 5.28 7.43 7.43 0 0 1-7.43 7.07Zm4.07-5.56c-.22-.11-1.3-.64-1.5-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.06-1.28-.64-2.12-1.14-2.97-2.58-.22-.38.22-.35.63-1.17.07-.15.03-.28-.03-.39-.06-.11-.5-1.21-.68-1.66-.18-.44-.36-.38-.5-.39-.13-.01-.28-.01-.43-.01a.83.83 0 0 0-.6.28c-.2.22-.79.77-.79 1.87 0 1.1.8 2.17.91 2.32.11.15 1.56 2.38 3.78 3.24 1.86.73 2.24.59 2.65.55.41-.04 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.05-.1-.2-.16-.42-.28Z" />
                </svg>
                Pesan
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>