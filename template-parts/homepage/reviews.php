<section class="py-20">

  <div class="container mx-auto px-4">

    <div id="gotumbler-reviews-widget" class="min-h-[300px]">

      <!-- Widget review dimuat otomatis pas user scroll mendekati sini -->

    </div>

  </div>

</section>



<script>
  document.addEventListener('DOMContentLoaded', function() {

    const target = document.getElementById('gotumbler-reviews-widget');

    if (!target) return;



    const ajaxUrl = '<?php echo esc_url(admin_url('admin-ajax.php')); ?>';



    const observer = new IntersectionObserver(function(entries) {

      entries.forEach(function(entry) {

        if (entry.isIntersecting) {

          observer.disconnect();



          fetch(ajaxUrl + '?action=gotumbler_load_reviews')

            .then(function(res) {

              return res.text();

            })

            .then(function(html) {

              target.innerHTML = html;



              // Cari elemen dengan atribut data-src (loader Trustindex), lalu paksa load manual

              const loaderEl = target.querySelector('[data-src]');

              if (loaderEl) {

                const script = document.createElement('script');

                script.src = loaderEl.getAttribute('data-src');

                document.body.appendChild(script);

              }



              // Jaga-jaga kalau ada <script> tag lain juga, "hidupkan ulang"

              target.querySelectorAll('script').forEach(function(oldScript) {

                const newScript = document.createElement('script');

                Array.from(oldScript.attributes).forEach(function(attr) {

                  newScript.setAttribute(attr.name, attr.value);

                });

                newScript.textContent = oldScript.textContent;

                oldScript.parentNode.replaceChild(newScript, oldScript);

              });

            });

        }

      });

    }, {

      rootMargin: '300px'

    });



    observer.observe(target);

  });
</script>