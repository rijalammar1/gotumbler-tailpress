<?php

/**
 * About Us template file.
 *
 * @package TailPress
 */

get_header();
?>

<!-- ============ HERO ============ -->
<section class="relative flex min-h-[720px] lg:min-h-[800px] items-end overflow-hidden bg-[#102033] text-white">

  <img
    src="<?php echo esc_url('http://belajar-tailpress.test/wp-content/uploads/2026/09/DSC05625-scaled.jpg'); ?>"
    alt="Ruang kerja modern yang merepresentasikan kolaborasi Go Tumbler"
    class="absolute inset-0 h-full w-full object-cover opacity-35">
  <div class="absolute inset-0 bg-gradient-to-t from-[#102033] via-[#102033]/75 to-[#102033]/20"></div>

  <div class="relative mx-auto w-full max-w-7xl px-6 pb-20 lg:px-10 lg:pb-28">
    <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#54e79b]">
      Tumbler Custom Premium &middot; Indonesia
    </p>

    <div class="mt-5 grid gap-10 lg:grid-cols-[1.2fr_.8fr] lg:items-end">
      <h1 class="max-w-5xl text-4xl font-bold leading-[1.05] tracking-[-.03em] sm:text-6xl lg:text-7xl">
        Tumbler Eco-Friendly<br>
        <span class="text-[#54e79b]">Custom Logo & Design</span>
      </h1>

      <div>
        <p class="max-w-md text-lg leading-relaxed text-white/75">
          Kami membantu brand dan organisasi hadir lebih bermakna melalui merchandise yang dirancang dengan niat.
        </p>

        <div class="mt-8 flex flex-wrap items-center gap-6">
          <a href="#about" class="rounded-full bg-[#05a957] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#078846]">
            Kenali Go Tumbler <span class="ml-3">&#8594;</span>
          </a>

          <a href="#process" class="group inline-flex items-center gap-3 text-sm font-semibold text-white transition-colors">
            <span>Lihat cara kami bekerja</span>
            <span class="transition-transform group-hover:translate-x-1">&#8594;</span>
          </a>
        </div>
      </div>
    </div>

    <div class="mt-20 flex items-center gap-3 text-xs uppercase tracking-[.22em] text-white/50">
      <span class="h-px w-14 bg-[#54e79b]"></span> Scroll untuk menjelajah
    </div>
  </div>

</section>

<!-- ============ 01 — CERITA KAMI ============ -->
<section id="about" class="mx-auto grid max-w-7xl gap-14 px-6 py-24 lg:grid-cols-[.8fr_1.2fr] lg:px-10 lg:py-36">

  <div>
    <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#102033]/50">01 &mdash; Cerita Kami</p>
    <h2 class="mt-5 max-w-xl text-4xl font-extrabold leading-[1.05] tracking-tight sm:text-5xl">
      Bukan sekadar tumbler. <em class="not-italic text-[#54e79b]">Ini tentang kesan.</em>
    </h2>
  </div>

  <div class="grid gap-10 sm:grid-cols-[.9fr_1.1fr] sm:items-end">
    <div class="aspect-[4/5] overflow-hidden rounded-sm">
      <img
        src="<?php echo esc_url('http://belajar-tailpress.test/wp-content/uploads/2026/09/Hero-GT-1.webp'); ?>"
        alt="Tim sedang berkolaborasi dalam ruang kerja"
        class="h-full w-full object-cover transition duration-700 hover:scale-105">
    </div>

    <div>
      <p class="text-xl leading-relaxed text-[#102033]/80">
        Go Tumbler lahir dari keyakinan sederhana: benda yang digunakan setiap hari bisa menjadi media komunikasi yang paling dekat.
      </p>
      <p class="mt-6 leading-relaxed text-[#102033]/60">
        Kami bekerja bersama instansi pemerintah, BUMN, institusi pendidikan, dan perusahaan swasta untuk menciptakan merchandise yang terasa personal, berkelas, dan bertahan lama.
      </p>

      <div class="mt-8">
        <a href="#strengths" class="group inline-flex items-center gap-3 text-sm font-semibold text-[#102033] transition-colors">
          <span>Kenapa Go Tumbler</span>
          <span class="transition-transform group-hover:translate-x-1">&#8594;</span>
        </a>
      </div>
    </div>
  </div>

</section>

<!-- ============ 02 — YANG KAMI BAWA ============ -->
<section id="strengths" class="bg-[#102033] px-6 py-24 text-white lg:px-10 lg:py-32">
  <div class="mx-auto max-w-7xl">

    <div class="flex flex-col justify-between gap-8 md:flex-row md:items-end">
      <div>
        <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#54e79b]">02 &mdash; Yang Kami Bawa</p>
        <h2 class="mt-5 max-w-2xl text-4xl font-extrabold leading-[1.05] tracking-tight sm:text-5xl">
          Detail kecil. <em class="not-italic text-[#54e79b]">Dampak besar.</em>
        </h2>
      </div>
      <p class="max-w-xs leading-relaxed text-white/60">
        Setiap tumbler membawa detail yang membuat brand Anda lebih berkesan.
      </p>
    </div>

    <div class="mt-16 grid border-t border-white/15 sm:grid-cols-2 lg:grid-cols-4">
      <?php
      $features = [
        ['num' => '01', 'title' => 'Kualitas Teruji', 'desc' => 'Material pilihan, hasil presisi, dan standar QC yang konsisten.'],
        ['num' => '02', 'title' => 'Desain Berarti', 'desc' => 'Kami menerjemahkan nilai brand menjadi bentuk yang relevan.'],
        ['num' => '03', 'title' => 'Layanan Personal', 'desc' => 'Satu partner dari ide pertama sampai produk tiba.'],
        ['num' => '04', 'title' => 'Tepat Waktu', 'desc' => 'Perencanaan rapi agar setiap momen penting Anda siap dirayakan.'],
      ];
      foreach ($features as $i => $feature) :
      ?>
        <article class="border-b border-white/15 py-8 sm:px-6 sm:first:pl-0 lg:border-b-0 lg:border-r lg:first:pl-0 lg:last:border-0">
          <span class="font-mono text-sm text-[#54e79b]"><?php echo esc_html($feature['num']); ?></span>
          <h3 class="mt-12 text-xl font-semibold"><?php echo esc_html($feature['title']); ?></h3>
          <p class="mt-4 leading-relaxed text-white/55"><?php echo esc_html($feature['desc']); ?></p>
        </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ============ 03 — CARA KAMI BEKERJA ============ -->
<section id="process" class="mx-auto max-w-7xl px-6 py-24 lg:px-10 lg:py-36">
  <div class="grid gap-12 lg:grid-cols-[.7fr_1.3fr]">

    <div>
      <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#102033]/50">03 &mdash; Cara Kami Bekerja</p>
      <h2 class="mt-5 max-w-md text-4xl font-extrabold leading-[1.05] tracking-tight sm:text-5xl">
        Setiap tumbler punya <em class="not-italic text-[#54e79b]">cerita untuk dibawa.</em>
      </h2>
    </div>

    <div>
      <div class="grid gap-0 border-t border-[#102033]/15">
        <?php
        $steps = [
          ['title' => 'Konsultasi via WhatsApp', 'desc' => 'Hubungi kami melalui WhatsApp dan sampaikan kebutuhan produk yang Anda inginkan. Tim kami siap membantu memberikan rekomendasi terbaik.'],
          ['title' => 'Diskusi Produk & Desain', 'desc' => 'Diskusikan pilihan produk, bahan, warna, ukuran, hingga desain yang sesuai dengan kebutuhan dan identitas brand Anda.'],
          ['title' => 'Konfirmasi Pesanan', 'desc' => 'Setelah produk dan desain sudah sesuai, kami akan membantu mengonfirmasi detail pesanan, mulai dari jumlah, spesifikasi, hingga estimasi waktu pengerjaan.'],
          ['title' => 'Proses Produksi', 'desc' => 'Pesanan yang sudah disepakati akan masuk ke tahap produksi dengan proses yang dikerjakan sesuai spesifikasi dan desain yang telah disetujui.'],
          ['title' => 'Pengiriman', 'desc' => 'Setelah produk selesai diproduksi dan melalui proses pengecekan, pesanan akan dikirim ke alamat tujuan Anda.'],
        ];
        foreach ($steps as $i => $step) :
        ?>
          <div class="group grid grid-cols-[60px_1fr] items-start gap-5 border-b border-[#102033]/15 py-6">
            <span class="font-mono text-sm text-[#05a957]">0<?php echo $i + 1; ?></span>
            <div>
              <h3 class="text-xl font-semibold transition-transform group-hover:translate-x-2"><?php echo esc_html($step['title']); ?></h3>
              <p class="mt-2 max-w-lg leading-relaxed text-[#102033]/60"><?php echo esc_html($step['desc']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="mt-10 text-center md:text-left">
        <button type="button" onclick="openWaPopup('Cara Kami Bekerja')" class=" group inline-flex items-center  gap-3 rounded-full bg-[#05a957] px-7 py-4 text-sm font-semibold text-white transition  cursor-pointer">
          Siap Mulai?<br class="block md:hidden"> Konsultasikan Kebutuhan Anda Sekarang
          <span class="transition-transform group-hover:translate-x-1">&#8594;</span>
        </button>
      </div>
    </div>

  </div>
</section>

<!-- ============ 04 — KUALITAS PRODUK ============ -->
<section class="relative bg-[#dceee6] px-6 py-24 lg:px-10 lg:py-32">
  <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-2 lg:items-center">

    <div class="overflow-hidden">
      <img
        src="<?php echo esc_url('http://belajar-tailpress.test/wp-content/uploads/2026/08/UV-1.webp'); ?>"
        alt="Detail material dan hasil cetak tumbler custom Go Tumbler"
        class="aspect-[4/3] w-full object-cover ">
    </div>

    <div class="lg:pl-12">
      <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#102033]/50">04 &mdash; Kualitas Produk</p>
      <h2 class="mt-5 text-4xl font-extrabold leading-[1.05] tracking-tight sm:text-5xl">
        Material premium. <em class="not-italic text-[#05a957]">Cetakan tahan lama.</em>
      </h2>
      <p class="mt-7 max-w-md leading-relaxed text-[#102033]/65">
        Dengan mesin produksi milik sendiri, kami memiliki kendali penuh dalam setiap proses branding dan finishing produk tumbler. Gotumbler menyediakan design custom mulai dari logo, printing karakter nama menggunakan tekonologi UV Print & Laser untuk menghasilkan desain yang presisi dan tahan lama.
      </p>
    </div>

  </div>
</section>

<!-- ============ DIPERCAYA OLEH ============ -->
<section class="px-6 py-20 lg:px-10  bg-white">
  <div class="mx-auto max-w-7xl">
    <?php get_template_part('template-parts/homepage/client'); ?>
  </div>
</section>

<!-- ============ 05 — MARI TERHUBUNG ============ -->
<section id="contact" class="bg-[#102033] px-6 py-24 text-white lg:px-10 lg:py-32">
  <div class="mx-auto flex max-w-7xl flex-col justify-between gap-12 md:flex-row md:items-end">

    <div>
      <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#54e79b]">05 &mdash; Mari Terhubung</p>
      <h2 class="mt-5 max-w-3xl text-4xl font-extrabold leading-[1.05] tracking-tight sm:text-5xl">
        Siap membuat sesuatu yang <em class="not-italic text-[#54e79b]">berarti?</em>
      </h2>
    </div>

    <button type="button" onclick="openWaPopup('Kontak - Mari Terhubung')" class="inline-flex w-fit items-center gap-3 rounded-full bg-[#05a957] px-7 py-4 font-semibold text-white transition hover:bg-[#54e79b] hover:text-[#102033] cursor-pointer">
      Hubungi Kami via WA <span>&#8594;</span>
    </button>

  </div>
</section>
<?php get_footer(); ?>