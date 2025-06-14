<?php include('doctype.php'); ?>

<head>
   <title>Runo Newsroom – Latest Announcements & Media Coverage</title>

   <meta name="description" content="Stay updated with the latest news, media mentions, press releases, and announcements from Runo CRM for telecalling and outbound sales.">

   <!-- Updated Open Graph tags -->
   <meta property="og:title" content="Runo Newsroom – Latest Announcements & Media Coverage">
   <meta property="og:description" content="Stay updated with the latest news, media mentions, press releases, and announcements from Runo CRM for telecalling and outbound sales.">

   <!-- Updated Twitter tags -->
   <meta name="twitter:title" content="Runo Newsroom – Latest Announcements & Media Coverage">
   <meta name="twitter:description" content="Stay updated with the latest news, media mentions, press releases, and announcements from Runo CRM for telecalling and outbound sales.">

   <?php include('head.php'); ?>
</head>

<body>
   <div>
      <?php include('preloader.php'); ?>
      <?php

      $page_name = 'Newsroom';
      $form_uuid = '540c6a38-0072-4c48-9fac-b443f814a999';

      include('home-modal.php');
      ?>

      <?php include('header.php'); ?>
      <!-- Page Header Start -->
      <div class="page-title">
         <div class="container">
            <div class="row">
               <div class="title-content  fadeIn" data--delay="0.3s">
                  <div class="col-lg-12">
                     <div class="tagline  fadeInDown" data--delay="0.4s">Newsroom</div>
                     <h2 class="text-anime-style-2  fadeInUp" data--delay="0.6s" data-cursor="-opaque">
                        Stay Updated with the Latest from Runo
                     </h2>
                     <p class=" fadeInUp" data--delay="0.8s">
                        Explore our latest announcements, press releases, and media coverage to see how Runo is making headlines in business communication.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Page Header End -->
      <div class="container" style="margin:40px auto">
         <div class="row g-4">
            <div class="col-md-1"></div>
            <div class="col-md-5  animate__animated animate__fadeInUp">
               <div class="news-card bg-white">
                  <img src="img/bl.svg" alt="The Hindu BusinessLine" class="news-img">
                  <div class="news-content">
                     <div class="news-title">CRM startup RUNO raises $1.5 million in Pre-Series A</div>
                     <div class="news-description">
                        RUNO, a CRM startup, secures $1.5M in a Pre-Series A round to expand its product and market reach across various industries.
                     </div>
                     <a href="https://www.thehindubusinessline.com/info-tech/crm-startup-runo-raises-15-million-in-pre-series-a/article68093390.ece" target="_blank" class="btn-orange mt-20">View More</a>
                  </div>
               </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-5  animate__animated animate__fadeInUp" data--delay="0.2s">
               <div class="news-card bg-white">
                  <img src="img/et.svg" alt="The Economic Times" class="news-img">
                  <div class="news-content">
                     <div class="news-title">Runo raises $500,000 in funding from Unicorn India Ventures</div>
                     <div class="news-description">
                        Runo attracted $500K in a funding round led by Unicorn India Ventures to enhance its tech stack and scale its operations.
                     </div>
                     <a href="https://economictimes.indiatimes.com/tech/startups/runo-raises-500000-in-pre-series-a-from-unicorn-india-ventures/articleshow/89488783.cms?from=mdr" target="_blank" class="btn-orange mt-20">View More</a>
                  </div>
               </div>
            </div>
            <div class="col-md-1"></div>
         </div>
      </div>
      <?php include('footer.php'); ?>
      <?php include('footerjs.php'); ?>
   </div>
</body>

</html>