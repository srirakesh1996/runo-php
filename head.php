<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

<!-- SEO Meta -->
<meta name="robots" content="no-index, follow">
<meta name="language" content="English">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:image" content="https://runo.in/images/Runo-logo.png">
<meta property="og:url" content="https://runo.in">

<!-- Twitter Card -->
<meta name="twitter:image" content="https://runo.in/images/Runo-logo.png">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="img/favicon.ico" sizes="16x16">

<!-- Preconnect & Preload Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Preload and Async Google Fonts -->
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap">
</noscript>

<!-- Critical CSS (Bootstrap only) -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Non-critical CSS (load async) -->
<link rel="stylesheet" href="css/slicknav.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="css/swiper-bundle.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="css/all.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="css/animate.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="css/magnific-popup.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="css/custom.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="css/runo.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/css/intlTelInput.min.css" media="print" onload="this.media='all'">

<noscript>
	<link rel="stylesheet" href="css/slicknav.min.css">
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/runo.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/css/intlTelInput.min.css">
</noscript>

<!-- Defer JS scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/intlTelInput.min.js" defer></script>

<!-- Optional: Animate.css + WOW.js (deferred) -->
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" defer></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        new WOW().init();
    });
</script>
-->

<!-- Canonical URL -->
<?php
function getCurrentCanonicalURL()
{
	$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
	$host = $_SERVER['HTTP_HOST'];
	$uri = strtok($_SERVER['REQUEST_URI'], '?'); // Removes query parameters
	return $scheme . '://' . $host . $uri;
}
?>
<link rel="canonical" href="<?= htmlspecialchars(getCurrentCanonicalURL(), ENT_QUOTES, 'UTF-8') ?>" />