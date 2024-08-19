<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }} | Siperantara</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/chosen.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/dropzone.min.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-pro.css">
    <link rel="stylesheet" href="assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="assets/css/vendor/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- Pre loader start -->
    <div class="preloader">
        <div class='loader'>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
        </div>
    </div>
    <!-- Pre loader end -->

    <!-- Cursor Animation -->
    <div class="cursor1"></div>

    <!-- Body main wrapper start -->
    <div class="app-page-body">

        <!-- app header start -->
        <header class="app-header">
            <div class="app-header-inner">
                <div class="app-header-left">
                </div>
                <div class="app-header-right">
                    <div class="app-header-admin p-relative">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="admin-wrapper">
                            <span class="admin-thumb">
                                <img class="avatar-sm" src="assets/images/agent/agent-01.png" alt="image">
                            </span>
                                <span class="admin-meta">
                                <span class="admin-meta-name">Jhon Smith</span>
                                </span>
                                </span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- app header end -->

        <!-- app-sidebar start -->
        @include('admin.layouts.partials.sidebar')
        <!-- app-sidebar end -->

        <!-- app body content start -->
        @yield('content-admin')
        <!-- app body content end -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Backtotop start -->
    <a href="#" data-target="html" class="back-to-target back-to-top">
        <span class="back-to-top-text">back top</span>
        <span class="back-to-top-wrapper"><span class="back-to-top-inner" style="width: 4.05654%;"></span></span>
    </a>
    <!-- Backtotop end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/meanmenu.min.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/vendor/magnific-popup.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/purecounter.js"></script>
    <script src="assets/js/plugins/nouislider.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/ScrollTrigger.min.js"></script>
    <script src="assets/js/plugins/SplitText.min.js"></script>
    <script src="assets/js/plugins/gsap.min.js"></script>
    <script src="assets/js/plugins/bd-cursor.js"></script>
    <script src="assets/js/plugins/jarallax.min.js"></script>
    <script src="assets/js/plugins/dropzone.min.js"></script>
    <script src="assets/js/plugins/tinymce.min.js"></script>
    <script src="assets/js/plugins/apexcharts.min.js"></script>
    <script src="assets/js/vendor/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>