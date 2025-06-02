<!-- footerjs.php -->
<!-- Core Libraries -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

<!-- Plugins -->
<script src="js/jquery.slicknav.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js" defer></script>
<script src="js/SmoothScroll.js" defer></script>
<script src="js/parallaxie.js" defer></script>

<!-- WOW.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" defer></script>
<script>
   document.addEventListener("DOMContentLoaded", () => {
      if (typeof WOW !== "undefined") new WOW().init();
   });
</script>

<!-- UTM Tracker -->
<script>
   window.addEventListener("load", () => {
      const params = new URLSearchParams(window.location.search);
      const utmSource = params.get("utm_source");
      const utmCampaign = params.get("utm_campaign");
      if (utmSource) localStorage.setItem("utm_source", utmSource);
      if (utmCampaign) localStorage.setItem("utm_campaign", utmCampaign);
   });
</script>

<!-- Custom JS -->
<script src="js/function.js" defer></script>
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
<!-- Lazy-load PopupSmart Chat Widget after 3s to improve INP -->