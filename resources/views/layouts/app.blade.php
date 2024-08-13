<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home | Siperantara</title>
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

    <!-- filter search form modal start -->
    <div id="searchFilter" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header pl-30 pr-30">
                    <h5 class="modal-title">Advanced Search</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- filter-search-form-start -->
                <div class="filter-search-form show">
                    <div class="filter-grid-2 filter-group-box group-price mb-20">
                        <div class="filter-range-box">
                            <h6 class="title-price mb-20">Price Range</h6>
                            <div class="sidebar-widget-range">
                                <div id="slider-range"></div>
                                <div class="price-filter mt-10"><input type="text" id="amount">
                                </div>
                            </div>
                        </div>
                        <div class="filter-range-box">
                            <h6 class="title-price mb-20">Size Range</h6>
                            <div class="sidebar-widget-range">
                                <div id="slider-range-2"></div>
                                <div class="price-filter mt-10"><input type="text" id="amount-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-group-box filter-grid-2 mb-20">
                        <div class="filter-grid-2">
                            <div class="booking-select">
                                <div class="form-input-title">
                                    <label>Rooms</label>
                                </div>
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" selected>3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="booking-select">
                                <div class="form-input-title">
                                    <label>Bathrooms</label>
                                </div>
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" selected>3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter-grid-2">
                            <div class="booking-select">
                                <div class="form-input-title">
                                    <label>Bedrooms</label>
                                </div>
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4" selected>4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="booking-select">
                                <div class="form-input-title">
                                    <label>Type</label>
                                </div>
                                <select>
                                    <option value="1">1</option>
                                    <option value="2" selected>2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="filter-group-checkbox">
                        <h6 class="mb-10">Facilities:</h6>
                        <div class="facilities-group filter-grid-6">
                            <div class="facilities-box">
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac1" checked="">
                                    <label for="fac1" class="facilities-title">Basement</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac2">
                                    <label for="fac2" class="facilities-title">Cable TV</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac3">
                                    <label for="fac3" class="facilities-title">Air Condition</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac4">
                                    <label for="fac4" class="facilities-title">Ceiling Height</label>
                                </fieldset>
                            </div>
                            <div class="facilities-box">
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac5">
                                    <label for="fac5" class="facilities-title">Disabled Access</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac6" checked="">
                                    <label for="fac6" class="facilities-title">Elevator</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac7">
                                    <label for="fac7" class="facilities-title">Kids Zone</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac8">
                                    <label for="fac8" class="facilities-title">Garden</label>
                                </fieldset>
                            </div>
                            <div class="facilities-box">
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac9" checked="">
                                    <label for="fac9" class="facilities-title">Service</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac10">
                                    <label for="fac10" class="facilities-title">Furnishing</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac11" checked="">
                                    <label for="fac11" class="facilities-title">Garage</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac12">
                                    <label for="fac12" class="facilities-title">Laundry</label>
                                </fieldset>
                            </div>
                            <div class="facilities-box">
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac13">
                                    <label for="fac13" class="facilities-title">Gymnasium</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac14">
                                    <label for="fac14" class="facilities-title">Intercom</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac15">
                                    <label for="fac15" class="facilities-title">Parking</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac16">
                                    <label for="fac16" class="facilities-title">WiFi</label>
                                </fieldset>
                            </div>
                            <div class="facilities-box">
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac17">
                                    <label for="fac17" class="facilities-title">Renovation</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac18">
                                    <label for="fac18" class="facilities-title">Security</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac19">
                                    <label for="fac19" class="facilities-title">Swimming Pool</label>
                                </fieldset>
                            </div>
                            <div class="facilities-box">
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac20">
                                    <label for="fac20" class="facilities-title">Window Type</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac21">
                                    <label for="fac21" class="facilities-title">Mosque</label>
                                </fieldset>
                                <fieldset class="facilities-items">
                                    <input type="checkbox" id="fac22">
                                    <label for="fac22" class="facilities-title">Emergency Ambulance</label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- filter-search-form-end -->
            </div>
        </div>
    </div>
    <!-- filter search form modal end -->

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

    <!-- Back to top start -->

    <a href="#" data-target="html" class="back-to-target back-to-top">
        <span class="back-to-top-text">back top</span>
        <span class="back-to-top-wrapper"><span class="back-to-top-inner" style="width: 4.05654%;"></span></span>
    </a>

    <!-- Back to top end -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas-area">
            <div class="offcanvas-wrapper">
                <div class="offcanvas-content">
                    <div class="offcanvas-top d-flex justify-content-between align-items-center mb-25">
                        <div class="offcanvas-logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo_siperantara.png" alt="logo not found">
                            </a>
                        </div>
                        <div class="offcanvas-close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                                <span class="offcanvas-m-line line--1"></span><span
                                    class="offcanvas-m-line line--2"></span><span
                                    class="offcanvas-m-line line--3"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <!-- <div class="offcanvas-search mb-0">
                        <form action="#">
                            <input type="text" name="offcanvasSearch" placeholder="Search here">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div> -->
                    <div class="mobile-menu fix mb-25"></div>
                    <div class="offcanvas-about d-none d-lg-block mb-25">
                        <h4 class="offcanvas-title-meta">About SIPERANTARA</h4>
                        <p>The Property of real estate where you can embark on a journey to discover your perfect lifestyle
                            home and floors and countertops space.</p>
                    </div>
                    <div class="offcanvas-contact mb-25">
                        <h4 class="offcanvas-title-meta">Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center gap-10">
                                <div class="offcanvas-contact-icon">
                                    <a target="_blank" href="#">
                                        <i class="fal fa-map-marker-alt"></i></a>
                                </div>
                                <div class="offcanvas-contact-text">
                                    <a target="_blank" href="#">1426 Center StreetBend, 97702, California, USA</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-10">
                                <div class="offcanvas-contact-icon">
                                    <a href="tel:+415864872899"><i class="far fa-phone"></i></a>
                                </div>
                                <div class="offcanvas-contact-text">
                                    <a href="tel:+415864872899">+415-864-8728-99</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-10">
                                <div class="offcanvas-contact-icon">
                                    <a href="mailto:support@Reallow.com"><i class="fal fa-envelope"></i></a>
                                </div>
                                <div class="offcanvas-contact-text">
                                    <a href="mailto:support@Reallow.com">support@Reallow.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="offcanvas-social">
                        <h4 class="offcanvas-title-meta">Subscribe & Follow</h4>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- Offcanvas area start -->

    {{-- navbar --}}
    @include('layouts.partial.navbar')

    {{-- main --}}
    @yield('content')

    {{-- footer --}}
    @include('layouts.partial.footer')

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
