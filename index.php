<?php include('doctype.php'); ?>

<head>
  <title>Runo – World’s First AI-Powered SIM-Based Call CRM</title>
  <meta name="description" content="Runo is an AI-powered, mobile-first CRM with SIM-based call management. No cloud telephony. Auto-log calls, track leads, add notes, get AI summaries & manage sales workflow.">

  <!-- Updated Open Graph tags -->
  <meta property="og:title" content="Runo – World’s First AI-Powered SIM-Based Call CRM">
  <meta property="og:description" content="Runo is an AI-powered, mobile-first CRM with SIM-based call management. No cloud telephony. Auto-log calls, track leads, add notes, get AI summaries & manage sales workflow.">

  <!-- Updated Twitter tags -->
  <meta name="twitter:title" content="Runo – World’s First AI-Powered SIM-Based Call CRM">
  <meta name="twitter:description" content="Runo is an AI-powered, mobile-first CRM with SIM-based call management. No cloud telephony. Auto-log calls, track leads, add notes, get AI summaries & manage sales workflow.">

  <?php include('head.php'); ?>

  <!-- Hero Background Image (used in CSS) -->
  <link rel="preload" as="image" href="img/banner-img.webp" type="image/webp" fetchpriority="low">

  <!-- Initial Hero Web Image (used in <img id="webImage"> for desktop LCP) -->
  <link rel="preload" as="image" href="img/hero-images/web/call-summaryw.webp" type="image/webp" media="(min-width: 768px)" fetchpriority="high">

  <!-- Preload LCP image -->
  <link
    rel="preload"
    as="image"
    href="img/hero-images/mobile/call-summary.webp"
    type="image/webp"
    fetchpriority="high" />
</head>

<body>
  <div id="home">

    <?php include('preloader.php'); ?>

    <?php

    $page_name = 'Home';
    $form_uuid = '2eddbc70-045d-41ff-8866-dbf34f73f6f1';

    include('home-modal.php');
    ?>

    <?php include('header.php'); ?>

    <?php include('home-banner.php'); ?>

    <!-- Clients Section Start -->
    <section class="clients-section py-80" style="overflow: hidden;">
      <div class="container">
        <div class="row">
          <div class="clients-title text-center">
            <h2>Big Names? Yeah, They’re All On Board</h2>
          </div>
        </div>



        <?php include('home-clients.php'); ?>


      </div>
    </section>
    <!-- Clients Section End -->

    <?php include('home-deals.php'); ?>

    <?php include('home-cloud.php'); ?>

    <?php // include('home-demo.php'); 
    ?>

    <?php include('home-features.php'); ?>

    <?php include('home-lead.php'); ?>

    <?php //include('home-cta.php'); 
    ?>

    <?php //include('home-leads.php'); 
    ?>

    <?php include('home-comparision.php'); ?>



    <!-- Testimonial Section -->
    <div class="our-tesimonial">
      <!-- Security Section with WOW animations -->
      <section class="security-section">
        <div class="row align-items-center">
          <!-- Left Text -->
          <div class="col-md-7 security-text">
            <h2>Enterprise-grade security</h2>
            <p>Have peace of mind that your company’s data is fully secure and compliant with the latest industry standard certifications.</p>
          </div>
          <!-- Right Image -->
          <div class="col-md-5 text-md-end text-center security-badges">
            <img src="img/security.webp" loading='lazy' alt="Securitys" class="img-fluid">
          </div>
        </div>
      </section>
      <div class="container">
        <!-- Section Title Row with Navigation -->
        <div class="row section-row align-items-center justify-content-between mb-4">
          <div class="col-md-8">
            <div class="section-title" style="text-align:left;width:100%">
              <h2>
                We’re Not Saying Runo’s Magic…
                But People Think It Is
              </h2>
            </div>
          </div>
          <div class="col-md-4 text-md-end mt-3 mt-md-0" id="arrow-ico">
            <div class="testimonial-nav-buttons gap-2">
              <button class="testimonial-prev-btn">
                <i class="fas fa-chevron-left"></i>
              </button>
              <button class="testimonial-next-btn">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </div>
        </div>



        <?php include('home-testimonials.php'); ?>

      </div>
    </div>


    <?php include('home-faqs.php'); ?>

    <?php include('home-contact.php'); ?>

  </div>


  <?php include('footer.php');
  ?>

  <?php include('footerjs.php'); ?>


</body>

</html>