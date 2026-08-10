import Swiper from "swiper";
import "swiper/css";
import "swiper/css/effect-fade";
import {
  Autoplay,
  FreeMode,
  Navigation,
  Pagination,
  EffectFade,
} from "swiper/modules";
window.addEventListener("load", function () {
  let mainNavigation = document.getElementById("primary-navigation");
  let mainNavigationToggle = document.getElementById("primary-menu-toggle");

  if (mainNavigation && mainNavigationToggle) {
    mainNavigationToggle.addEventListener("click", function (e) {
      e.preventDefault();
      mainNavigation.classList.toggle("hidden");
    });
  }

  const heroSwiper = document.querySelector(".hero-swiper");
  if (heroSwiper) {
    new Swiper(heroSwiper, {
      modules: [Autoplay, EffectFade],
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      speed: 600,
    });
  }

  const clientSwiper = document.querySelector(".swiper-logos");
  if (clientSwiper) {
    new Swiper(clientSwiper, {
      modules: [Autoplay],
      slidesPerView: "auto",
      spaceBetween: 32,
      loop: true,
      speed: 600,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  }

  const printingSwiper = document.querySelector(".printing-swiper");
  if (printingSwiper) {
    new Swiper(printingSwiper, {
      modules: [Navigation, Autoplay],
      slidesPerView: 1,
      loop: true,
      speed: 600,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".printing-next",
        prevEl: ".printing-prev",
      },
    });
  }

  const portfolioSwiper = document.querySelector(".portfolio-swiper");
  if (portfolioSwiper) {
    new Swiper(portfolioSwiper, {
      modules: [Navigation, Autoplay],
      slidesPerView: "auto",
      spaceBetween: 24,
      loop: true,
      speed: 600,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".portfolio-next",
        prevEl: ".portfolio-prev",
      },
    });
  }

  const showcaseSwiper = document.querySelector(".showcase-swiper");
  if (showcaseSwiper) {
    new Swiper(showcaseSwiper, {
      modules: [Navigation, Pagination, Autoplay],
      slidesPerView: 1,
      loop: true,
      speed: 600,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".showcase-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".showcase-next",
        prevEl: ".showcase-prev",
      },
    });
  }

  document.querySelectorAll(".faq-trigger").forEach(function (trigger) {
    trigger.addEventListener("click", function () {
      const item = trigger.closest(".faq-item");
      const content = item.querySelector(".faq-content");
      const icon = item.querySelector(".faq-icon");
      const isOpen = content.style.gridTemplateRows === "1fr";

      document.querySelectorAll(".faq-content").forEach(function (el) {
        el.style.gridTemplateRows = "0fr";
      });
      document.querySelectorAll(".faq-icon").forEach(function (el) {
        el.classList.remove("rotate-180");
      });

      if (!isOpen) {
        content.style.gridTemplateRows = "1fr";
        icon.classList.add("rotate-180");
      }
    });
  });

  // Klik di luar popup WhatsApp buat nutup otomatis
  document.addEventListener("click", function (e) {
    const popup = document.getElementById("wa-popup");
    if (!popup || popup.classList.contains("hidden")) return;

    const trigger = e.target.closest('[onclick*="openWaPopup"]');
    if (!popup.contains(e.target) && !trigger) {
      closeWaPopup();
    }
  });
});

// WhatsApp Floating Popup Toggle
window.openWaPopup = function (source) {
  const popup = document.getElementById("wa-popup");
  if (!popup) return;

  popup.classList.remove("hidden");
  // beri jeda 1 frame biar transition-nya kepicu (dari hidden ke visible)
  requestAnimationFrame(() => {
    popup.classList.remove("scale-95", "opacity-0");
    popup.classList.add("scale-100", "opacity-100");
  });
};

window.closeWaPopup = function () {
  const popup = document.getElementById("wa-popup");
  if (!popup) return;

  popup.classList.remove("scale-100", "opacity-100");
  popup.classList.add("scale-95", "opacity-0");

  // tunggu transition selesai (300ms) baru bener-bener disembunyikan
  setTimeout(() => {
    popup.classList.add("hidden");
    resetWaFormErrors();
  }, 300);
};

// Bersihin state error & isi form biar gak nyangkut pas popup dibuka lagi
function resetWaFormErrors() {
  const form = document.getElementById("wa-form");
  const companyInput = document.getElementById("wa-company");
  const quantitySelect = document.getElementById("wa-quantity");
  const companyError = document.getElementById("wa-company-error");
  const quantityError = document.getElementById("wa-quantity-error");

  if (form) form.reset();

  companyInput.classList.remove("border-red-400", "focus:ring-red-400");
  quantitySelect.classList.remove("border-red-400", "focus:ring-red-400");
  companyError.classList.add("hidden");
  quantityError.classList.add("hidden");
}

// Susun pesan dari form popup lalu buka WhatsApp
window.submitWaForm = function (e) {
  e.preventDefault();

  const companyInput = document.getElementById("wa-company");
  const quantitySelect = document.getElementById("wa-quantity");
  const companyError = document.getElementById("wa-company-error");
  const quantityError = document.getElementById("wa-quantity-error");

  const company = companyInput.value.trim();
  const quantity = quantitySelect.value;

  let isValid = true;

  if (!company) {
    companyInput.classList.add("border-red-400", "focus:ring-red-400");
    companyError.classList.remove("hidden");
    isValid = false;
  } else {
    companyInput.classList.remove("border-red-400", "focus:ring-red-400");
    companyError.classList.add("hidden");
  }

  if (!quantity) {
    quantitySelect.classList.add("border-red-400", "focus:ring-red-400");
    quantityError.classList.remove("hidden");
    isValid = false;
  } else {
    quantitySelect.classList.remove("border-red-400", "focus:ring-red-400");
    quantityError.classList.add("hidden");
  }

  if (!isValid) return;

  const message =
    `Halo Go Tumbler, saya dari *${company}* ingin memesan tumbler custom ` +
    `dengan rencana jumlah produk *${quantity}*. Bisa dibantu info lebih lanjut?`;

  const phoneNumber = "62xxxxxxxxxx"; // ganti dengan nomor WhatsApp asli
  const waUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

  window.open(waUrl, "_blank", "noopener,noreferrer");

  closeWaPopup();
};
