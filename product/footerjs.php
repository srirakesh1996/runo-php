<!-- Core Libraries (Deferred) -->
<script src="https://runo-ai-website.onrender.com/js/jquery-3.7.1.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/https://runo-ai-website.onrender.com/js/bootstrap.bundle.min.js" defer></script>

<!-- Plugins (Deferred) -->
<script src="https://runo-ai-website.onrender.com/js/jquery.slicknav.js" defer></script>

<!-- Plugins (only if still needed) -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js" defer></script>

<!-- Custom JS (Deferred) -->
<script src="js/function.js" defer></script>

<!-- Custom JS (Deferred) -->
<script src="https://runo-ai-website.onrender.com/js/function.js" defer></script>

<!-- Sticky Header and Preloader JS -->
<script>
   window.addEventListener('scroll', function() {
      const header = document.querySelector('.header-sticky');
      if (window.scrollY > 100) {
         header?.classList.add('active');
      } else {
         header?.classList.remove('active');
      }
   });

   window.addEventListener('load', function() {
      const preloader = document.querySelector('.runo-preloader');
      if (preloader) {
         preloader.style.opacity = '0';
         preloader.style.transition = 'opacity 0.5s ease';
         setTimeout(() => (preloader.style.display = 'none'), 400);
      }
   });
</script>