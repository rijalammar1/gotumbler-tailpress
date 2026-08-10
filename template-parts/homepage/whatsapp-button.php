<!-- Floating WhatsApp Button -->
<div class="fixed bottom-6 right-6 z-50 flex items-center gap-3 group">

  <!-- Tooltip -->
  <span class="bg-zinc-900 text-white text-xs font-semibold px-3 py-1.5 rounded-full whitespace-nowrap opacity-0 translate-x-2 pointer-events-none group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
    Tanya Sales (Online)
  </span>

  <div class="relative flex-shrink-0">
    <!-- Ping/pulse ring effect -->
    <span class="absolute inset-0 rounded-full bg-emerald-400 opacity-75 animate-ping"></span>

    <button onclick="openWaPopup('Floating Button')"
      class="relative flex items-center justify-center w-14 h-14 bg-emerald-500 rounded-full shadow-2xl hover:bg-emerald-400 transition-all duration-300 hover:scale-110 active:scale-95 focus:outline-none cursor-pointer"
      aria-label="Hubungi WhatsApp Kami">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.6 6.32A8.86 8.86 0 0 0 12.05 4a8.94 8.94 0 0 0-7.66 13.44L3 20.9l3.55-1.33a8.94 8.94 0 0 0 5.5 1.88h.01A8.94 8.94 0 0 0 21 12.5a8.86 8.86 0 0 0-2.4-6.18Zm-5.55 13.7h-.01a7.43 7.43 0 0 1-4.14-1.24l-.3-.19-2.35.87.78-2.29-.19-.3a7.42 7.42 0 0 1-1.15-4A7.43 7.43 0 0 1 12.06 5.5a7.39 7.39 0 0 1 5.25 2.17 7.36 7.36 0 0 1 2.17 5.28 7.43 7.43 0 0 1-7.43 7.07Zm4.07-5.56c-.22-.11-1.3-.64-1.5-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.06-1.28-.64-2.12-1.14-2.97-2.58-.22-.38.22-.35.63-1.17.07-.15.03-.28-.03-.39-.06-.11-.5-1.21-.68-1.66-.18-.44-.36-.38-.5-.39-.13-.01-.28-.01-.43-.01a.83.83 0 0 0-.6.28c-.2.22-.79.77-.79 1.87 0 1.1.8 2.17.91 2.32.11.15 1.56 2.38 3.78 3.24 1.86.73 2.24.59 2.65.55.41-.04 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.05-.1-.2-.16-.42-.28Z" />
      </svg>
    </button>
  </div>
</div>

<!-- WhatsApp Popup Modal/Card -->
<div id="wa-popup"
  class="fixed bottom-24 right-4 left-4 sm:left-auto sm:right-6 z-50 w-auto sm:w-[360px] bg-white rounded-3xl shadow-2xl overflow-hidden hidden transform transition-all duration-300 scale-95 opacity-0">

  <!-- Header -->
  <div class="bg-emerald-500 px-6 py-5 flex items-center justify-between">
    <div class="flex items-center gap-3">
      <div class="w-11 h-11 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17.6 6.32A8.86 8.86 0 0 0 12.05 4a8.94 8.94 0 0 0-7.66 13.44L3 20.9l3.55-1.33a8.94 8.94 0 0 0 5.5 1.88h.01A8.94 8.94 0 0 0 21 12.5a8.86 8.86 0 0 0-2.4-6.18Zm-5.55 13.7h-.01a7.43 7.43 0 0 1-4.14-1.24l-.3-.19-2.35.87.78-2.29-.19-.3a7.42 7.42 0 0 1-1.15-4A7.43 7.43 0 0 1 12.06 5.5a7.39 7.39 0 0 1 5.25 2.17 7.36 7.36 0 0 1 2.17 5.28 7.43 7.43 0 0 1-7.43 7.07Zm4.07-5.56c-.22-.11-1.3-.64-1.5-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.06-1.28-.64-2.12-1.14-2.97-2.58-.22-.38.22-.35.63-1.17.07-.15.03-.28-.03-.39-.06-.11-.5-1.21-.68-1.66-.18-.44-.36-.38-.5-.39-.13-.01-.28-.01-.43-.01a.83.83 0 0 0-.6.28c-.2.22-.79.77-.79 1.87 0 1.1.8 2.17.91 2.32.11.15 1.56 2.38 3.78 3.24 1.86.73 2.24.59 2.65.55.41-.04 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.05-.1-.2-.16-.42-.28Z" />
        </svg>
      </div>
      <div>
        <p class="text-white font-bold text-base leading-tight">Hubungi Go Tumbler</p>
        <p class="text-emerald-50 text-xs flex items-center gap-1">Respon cepat &amp; ramah
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
            <path d="M11.983 1.907a.75.75 0 0 1 .742.638l1.035 6.628h5.334a.75.75 0 0 1 .59 1.212l-8.5 10.85a.75.75 0 0 1-1.334-.57l1.192-6.815H5.75a.75.75 0 0 1-.6-1.2l6.25-10.4a.75.75 0 0 1 .583-.343Z" />
          </svg>
        </p>
      </div>
    </div>
    <button onclick="closeWaPopup()" class="text-white/80 hover:text-white transition-colors flex-shrink-0" aria-label="Tutup popup">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Body / Form -->
  <form id="wa-form" class="p-6 space-y-5" onsubmit="submitWaForm(event)" novalidate>

    <div>
      <label for="wa-company" class="block text-sm font-semibold text-zinc-900 mb-2">
        Nama Perusahaan <span class="text-red-500">*</span>
      </label>
      <input type="text" id="wa-company" name="company"
        placeholder="Masukkan nama perusahaan Anda"
        class="w-full px-4 py-3 rounded-xl border border-zinc-200 bg-zinc-50 text-sm text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all">
      <p id="wa-company-error" class="hidden text-xs text-red-500 mt-1.5">Nama perusahaan wajib diisi.</p>
    </div>

    <div>
      <label for="wa-quantity" class="block text-sm font-semibold text-zinc-900 mb-2">
        Jumlah Produk <span class="text-red-500">*</span>
      </label>
      <select id="wa-quantity" name="quantity"
        class="w-full px-4 py-3 rounded-xl border border-zinc-200 bg-zinc-50 text-sm text-zinc-900 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all appearance-none cursor-pointer">
        <option value="" disabled selected>Rencana Jumlah Produk</option>
        <option value="1-10 pcs">1-10 pcs</option>
        <option value="11-50 pcs">11-50 pcs</option>
        <option value="51-100 pcs">51-100 pcs</option>
        <option value="100+ pcs">100+ pcs</option>
      </select>
      <p id="wa-quantity-error" class="hidden text-xs text-red-500 mt-1.5">Silakan pilih rencana jumlah produk.</p>
    </div>

    <button type="submit"
      class="w-full flex items-center justify-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-white text-sm font-bold px-4 py-3.5 rounded-xl transition-colors">
      Kirim ke WhatsApp
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
      </svg>
    </button>
  </form>
</div>