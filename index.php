<?php include('doctype.php'); ?>

<head>

  <title>Runo – World’s First AI-Powered SIM-Based Call CRM</title>
  <meta name="description" content="Runo is an AI-powered, mobile-first CRM with SIM-based call management. No cloud telephony. Auto-log calls, track leads, add notes, get AI summaries & manage sales workflow.">

  <?php include('head.php'); ?>


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

    <?php include('home-clients.php'); ?>

    <?php include('home-deals.php'); ?>

    <?php include('home-cloud.php'); ?>

    <?php include('home-demo.php'); ?>

    <?php include('home-features.php'); ?>

    <?php include('home-lead.php'); ?>


    <?php //include('home-cta.php'); 
    ?>

    <?php //include('home-leads.php'); 
    ?>

    <?php include('home-comparision.php');
    ?>

    <?php include('home-testimonials.php'); ?>

    <?php include('home-faqs.php'); ?>

    <?php include('home-contact.php'); ?>


    <?php //include('home-contact.php'); 
    ?>

  </div>


  <?php include('footer.php');
  ?>

  <?php include('footerjs.php'); ?>


</body>

</html>