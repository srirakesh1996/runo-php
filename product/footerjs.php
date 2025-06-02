<!-- Core Libraries (Deferred) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/https://runo-ai-website.onrender.com/js/bootstrap.bundle.min.js" defer></script>

<!-- Plugins (Deferred) -->
<script src="https://runo-ai-website.onrender.com/js/jquery.slicknav.js" defer></script>
<script src="https://runo-ai-website.onrender.com/js/swiper-bundle.min.js" defer></script>
<script src="https://runo-ai-website.onrender.com/js/jquery.magnific-popup.min.js" defer></script>
<script src="https://runo-ai-website.onrender.com/js/SmoothScroll.js" defer></script>
<script src="https://runo-ai-website.onrender.com/js/parallaxie.js" defer></script>
<!-- WOW.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" defer></script>
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

<!-- Lazy-load PopupSmart Chat Widget after 3s to improve INP -->
<script>
   window.addEventListener('load', () => {
      setTimeout(() => {
         const script = document.createElement('script');
         script.src = 'https://popupsmart.com/freechat.js';
         script.onload = () => {
            window.start.init({
               title: 'Hi there ✌️',
               message: 'How can we help you? Just send us a message now to get assistance.',
               color: '#F9754E',
               position: 'right',
               placeholder: 'Enter your message',
               withText: 'Write with',
               viaWhatsapp: 'Or write us directly via Whatsapp',
               gty: 'Go to your',
               awu: 'and write us',
               connect: 'Connect now',
               button: 'Write us',
               device: 'everywhere',
               logo: 'https://d2r80wdbkwti6l.cloudfront.net/YaOSMtQDnhkgfH0fvFI3UkBR8O9UbXl5.jpg',
               person: 'https://d2r80wdbkwti6l.cloudfront.net/opKdomdwIJtWVF8damvTe0EtjBat61UA.jpg',
               services: [{
                     name: 'whatsapp',
                     content: '+918179880074'
                  },
                  {
                     name: 'mail',
                     content: 'care@runo.in'
                  },
                  {
                     name: 'phone',
                     content: '+918179880074'
                  },
               ],
            });
         };
         document.body.appendChild(script);
      }, 3000);
   });
</script>