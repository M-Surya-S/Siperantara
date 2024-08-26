<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Siperantara</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/chosen.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-pro.css">
    <link rel="stylesheet" href="assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="assets/css/vendor/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>



<body>
    <!-- preloader start -->
    <div class="preloader">
        <div class='loader'>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- Body main wrapper start -->
    <main>
        <!-- sign-in area start -->
        <section class="bd-sign-area section-space">
            <div class="container">
                <div class="row gx-0 gy-0 justify-content-center">
                    <div class="col-xl-5">
                        <div class="sign-thumb">
                            <img src="{{ asset('assets/images/sign/login-img.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="sign-form-wrapper text-center">
                            <h4 class="title mb-80 mt-50">Welcome</h4>
                    
                            <!-- Cek apakah ada pesan error di session -->
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                    
                            <form class="form" action="{{ route('login.store') }}" method="POST">
                                @csrf
                                <div class="input-box mb-20">
                                    <input type="email" class="input" placeholder="Email Address" name="email" value='{{ old('email') }}' required autofocus>
                                </div>
                                <div class="input-box mb-70">
                                    <input type="password" class="input" placeholder="Password" name="password" required>
                                </div>
                                <div class="sign-btn mb-60">
                                    <button type="submit" class="bd-btn btn-style btn-hover-x">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- sign-in area end -->

    </main>
    <!-- Body main wrapper end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/meanmenu.min.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
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
    <script src="assets/js/vendor/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
