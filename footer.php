<?php

/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
</main>

<?php do_action('tailpress_content_end'); ?>
</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="bg-zinc-950 text-zinc-400" role="contentinfo">
  <div class="container mx-auto py-16">
    <?php do_action('tailpress_footer'); ?>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

      <!-- Brand -->
      <div class="lg:col-span-4">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="!no-underline flex items-center gap-2 mb-6">
          <img
            src="http://belajar-tailpress.test/wp-content/uploads/2026/08/cropped-Gotumbler_Logo_3_10.webp"
            alt="<?php bloginfo('name'); ?>"
            class="h-8 w-auto">
        </a>
        <p class="leading-relaxed mb-6 max-w-sm">
          Botol minum vacuum insulated stainless steel premium untuk gaya hidup aktif, sehat, dan ramah lingkungan. Kurangi sampah plastik sekali pakai, mulailah isi ulang masa depan.
        </p>

        <div class="flex gap-3">
          <a href="#" class="w-10 h-10 rounded-full bg-zinc-800 hover:bg-teal-600 flex items-center justify-center transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22 12.06C22 6.5 17.52 2 12 2S2 6.5 2 12.06c0 5.02 3.66 9.18 8.44 9.94v-7.03H7.9v-2.91h2.54V9.85c0-2.51 1.49-3.9 3.77-3.9 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.44 2.91h-2.34V22c4.78-.76 8.44-4.92 8.44-9.94Z" />
            </svg>
          </a>
          <a href="#" class="w-10 h-10 rounded-full bg-zinc-800 hover:bg-teal-600 flex items-center justify-center transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.16c3.2 0 3.58.01 4.85.07 3.25.15 4.77 1.69 4.92 4.92.06 1.27.07 1.64.07 4.85s-.01 3.58-.07 4.85c-.15 3.23-1.66 4.77-4.92 4.92-1.27.06-1.64.07-4.85.07s-3.58-.01-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92-.06-1.27-.07-1.64-.07-4.85s.01-3.58.07-4.85c.15-3.23 1.67-4.77 4.92-4.92 1.27-.06 1.64-.07 4.85-.07ZM12 0C8.74 0 8.33.01 7.05.07 2.7.27.27 2.69.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.2 4.36 2.62 6.78 6.98 6.98 1.28.06 1.69.07 4.95.07s3.67-.01 4.95-.07c4.35-.2 6.78-2.62 6.98-6.98.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.2-4.35-2.62-6.78-6.98-6.98C15.67.01 15.26 0 12 0Zm0 5.84A6.16 6.16 0 1 0 12 18.16 6.16 6.16 0 0 0 12 5.84Zm0 10.16a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm6.41-10.4a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0Z" />
            </svg>
          </a>
          <a href="#" class="w-10 h-10 rounded-full bg-zinc-800 hover:bg-teal-600 flex items-center justify-center transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12.53.02c1.31-.02 2.6-.01 3.9-.02.08 1.53.63 3.09 1.75 4.17 1.11 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07Z" />
            </svg>
          </a>
          <a href="#" class="w-10 h-10 rounded-full bg-zinc-800 hover:bg-teal-600 flex items-center justify-center transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm-2 6H6V8h12v2Z" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Links -->
      <div class="lg:col-span-2 lg:col-start-6">
        <p class="text-white font-bold text-sm uppercase tracking-wide mb-5">Produk</p>
        <ul class="space-y-3">
          <li><a href="#showcase" class="hover:text-white transition-colors">Active Lite (500ml)</a></li>
          <li><a href="#showcase" class="hover:text-white transition-colors">Explorer (750ml)</a></li>
          <li><a href="#showcase" class="hover:text-white transition-colors">Voyager (1000ml)</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Custom Merchandise</a></li>
        </ul>
      </div>

      <div class="lg:col-span-2">
        <p class="text-white font-bold text-sm uppercase tracking-wide mb-5">Perusahaan</p>
        <ul class="space-y-3">
          <li><a href="#" class="hover:text-white transition-colors">Tentang Kami</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Hubungi Kami</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Program Kemitraan</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Karir</a></li>
        </ul>
      </div>

      <div class="lg:col-span-2">
        <p class="text-white font-bold text-sm uppercase tracking-wide mb-5">Legal</p>
        <ul class="space-y-3">
          <li><a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Syarat &amp; Ketentuan</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Garansi &amp; Pengembalian</a></li>
        </ul>
      </div>

    </div>

    <!-- Bottom bar -->
    <div class="border-t border-zinc-800 mt-12 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-sm">
      <p>
        &copy; <?php echo esc_html(date_i18n('Y')); ?> <span class="text-white font-semibold"><?php bloginfo('name'); ?></span>. Hak Cipta Dilindungi.
      </p>
      <p class="text-zinc-600">Customize Your Tumbler.</p>
    </div>
  </div>
</footer>
</div>

<!-- Floating WhatsApp Button -->
<?php
get_template_part('template-parts/homepage/whatsapp-button');
?>

<?php wp_footer(); ?>
</body>

</html>