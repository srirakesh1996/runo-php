<?php include('doctype.php'); ?>

<head>
    <title>404 Page Not Found | Runo</title>

    <meta name="title" content="404 Page Not Found | Runo">
    <meta name="description" content="Sorry, the page you are looking for doesn't exist. Return to the Runo homepage or explore our CRM solutions.">

    <!-- Open Graph tags -->
    <meta property="og:title" content="404 Page Not Found | Runo">
    <meta property="og:description" content="Sorry, the page you are looking for doesn't exist. Return to the Runo homepage or explore our CRM solutions.">

    <!-- Twitter tags -->
    <meta name="twitter:title" content="404 Page Not Found | Runo">
    <meta name="twitter:description" content="Sorry, the page you are looking for doesn't exist. Return to the Runo homepage or explore our CRM solutions.">

    <?php include('head.php'); ?>

</head>

<body>
    <div>

        <?php include('preloader.php'); ?>

        <?php

        $page_name = 'Others';
        $form_uuid = '540c6a38-0072-4c48-9fac-b443f814a999';

        include('home-modal.php');
        ?>

        <?php include('header.php'); ?>


        <!-- 404 Section -->
        <section class="error-404 d-flex align-items-center text-center py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="error-content">
                            <h1 class="display-1 fw-bold" style="color:#f44336">404</h1>
                            <h2 class="mb-3">Page Not Found</h2>
                            <p class="mb-4 text-muted">The page you're looking for doesn't exist or has been moved.</p>
                            <a href="/" class="btn-default btn-highlighted track-btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <?php include('footer.php');
    ?>

    <?php include('footerjs.php'); ?>


</body>

</html>