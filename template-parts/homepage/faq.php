<!-- FAQ -->
<section class="py-24 bg-white">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

      <!-- Left: Heading -->
      <div>
        <p class="text-xs font-bold uppercase tracking-widest text-teal-600 mb-3">Pertanyaan Umum</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-zinc-900 leading-tight mb-6">
          Ada Pertanyaan? <br>
          Kami Punya Jawabannya
        </h2>
        <p class="text-zinc-600 leading-relaxed mb-8">
          Masih ragu atau ingin tahu lebih dalam mengenai spesifikasi dan penggunaan produk kami? Silakan baca FAQ ini atau hubungi layanan pelanggan kami.
        </p>
        <a href="#" class="inline-flex items-center gap-2 font-bold text-teal-600 hover:text-teal-700 transition-colors">
          Hubungi Support Kami
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>

      <!-- Right: Accordion -->
      <div class="space-y-4">
        <?php
        $faqs = [
          [
            'question' => 'Apakah Go Tumbler aman dari bahan kimia berbahaya?',
            'answer'   => '100% aman! Seluruh produk Go Tumbler diproduksi menggunakan bahan berkualitas tinggi 18/8 Pro-Grade Stainless Steel yang bebas dari BPA, Phthalate, dan bahan kimia toksik lainnya. Aman digunakan untuk segala usia.',
          ],
          [
            'question' => 'Berapa lama es batu bisa bertahan di dalam Go Tumbler?',
            'answer'   => 'Dengan teknologi vakum ganda Temp-Shield, es batu yang diisikan ke dalam tumbler dapat bertahan hingga 24 jam penuh dalam suhu ruang normal tanpa mencair seluruhnya dan tanpa membuat dinding luar berembun.',
          ],
          [
            'question' => 'Apakah Go Tumbler bisa dicuci menggunakan mesin pencuci piring (dishwasher)?',
            'answer'   => 'Kami sangat merekomendasikan pencucian manual secara lembut menggunakan sabun cair dan spons halus guna menjaga umur segel silikon penutup tetap prima dan estetika lapisan warna luar (powder coating) tahan lama.',
          ],
        ];
        foreach ($faqs as $index => $faq):
        ?>
          <div class="faq-item bg-zinc-50 rounded-2xl overflow-hidden">
            <button type="button" class="faq-trigger w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
              <span class="font-bold text-zinc-900"><?php echo esc_html($faq['question']); ?></span>
              <svg xmlns="http://www.w3.org/2000/svg" class="faq-icon w-5 h-5 text-zinc-500 flex-shrink-0 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="faq-content grid grid-rows-[0fr] transition-all duration-300">
              <div class="overflow-hidden">
                <p class="px-6 pb-5 text-zinc-600 leading-relaxed">
                  <?php echo esc_html($faq['answer']); ?>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>