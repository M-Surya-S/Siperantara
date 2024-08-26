@extends('layouts.app')

@section('content')
    <!-- Body main wrapper start -->
    <main>
        <!-- Banner area start -->
        <section class="bd-banner-area banner-style-one p-relative z-index-11">
            <div class="swiper banner-active overflow-visible p-relative">
                <div class="swiper-wrapper">
                    <!-- if ypu active slider then duplicate "swiper-slide" -->
                    <div class="swiper-slide banner_more_item">
                        <div class="banner-inner p-relative">
                            <div class="banner-bg" data-background="{{ asset('assets/images/banner/banner-home-02.png') }}">
                            </div>
                            <div class="container p-relative">
                                <div class="row justify-content-between">
                                    <div class="col-xxl-7 col-xl-6 col-lg-5 col-md-5">
                                        <div class="banner-content p-relative wow bdFadeInLeft" data-wow-delay=".3s"
                                            data-wow-duration=".7s">
                                            <h1 class="banner-title">
                                                <span>Where</span>
                                                <span class="strock-text"><b>Dreams Find</b></span>
                                                <span class="text-gradient"><img class="arrow-shape"
                                                        src="{{ asset('assets/images/shapes/banner-arrow.svg') }}"
                                                        alt="banner-arrow">A
                                                    Home</span>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-bg-thumb jarallax">
                <div class="banner-thumb include-bg jarallax-img"
                    data-background="{{ asset('assets/images/banner/banner-home-01.png') }}">
                </div>
            </div>
        </section>
        <!-- Banner area end -->

        <!-- what we provide area Start -->
        <section class="bd-services-item section-space theme-bg-primary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper anim-wrapper section-title-space text-center animation-style-3">
                            <span class="section-subtitle uppercase">
                                <i class="icon-home"></i>
                                Our Services
                            </span>
                            <h2 class="section-title title-animation">What we provide</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 justify-content-between justify-content-md-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <span class="icon"><i class="icon-rent-property"></i></span>
                            <div class="content mb-55">
                                <h3 class="title">
                                    <a href="/property/search?status=new-develop">Development</a>
                                </h3>
                                <p class="description">We assist developers in marketing their projects, helping to generate
                                    more high-quality leads and prospects.
                                </p>
                            </div>
                            <div class="btn-inner">
                                <a class="bd-half-outline-btn" href="/property/development"><span class="text">Click
                                        Here</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <span class="icon"><i class="icon-buy-home"></i></span>
                            <div class="content">
                                <h3 class="title">
                                    <a href="/property/search?status=buy-or-rent">Buy or Rent</a>
                                </h3>
                                <p class="description">Whether you're a first-time homebuyer or an investor, we help you
                                    find the best properties by offering diverse and quality options.
                                </p>
                            </div>
                            <div class="btn-inner">
                                <a class="bd-half-outline-btn" href="/property/search?status=buy-or-rent"><span
                                        class="text">Click Here</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <span class="icon"><i class="icon-sell-property"></i></span>
                            <div class="content">
                                <h3 class="title">
                                    <a href="/property/sell">Sell</a>
                                </h3>
                                <p class="description">We support our clients in marketing their secondary properties with
                                    tailored strategies and marketing plans designed specifically for them.</p>
                            </div>
                            <div class="btn-inner">
                                <a class="bd-half-outline-btn" href="/property/sell"><span class="text">Click
                                        Here</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- what we provide area end -->

        <!-- development area start -->
        <section class="bd-about-area section-space p-relative">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-5">
                        <div class="about-content style-one">
                            <div class="section-title-wrapper anim-wrapper animation-style-3 mb-20">
                                <span class="section-subtitle uppercase">
                                    <i class="icon-home"></i>
                                    Sinar Mas Land
                                </span>
                                <h2 class="section-title title-animation" id="main-title">Grand City<br>Balikpapan</h2>
                            </div>
                            <div class="about-tab">
                                <div class="bd-tab">
                                    <ul class="nav nav-tabs" id="myTab1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="townville-tab" data-bs-toggle="tab"
                                                data-bs-target="#townville-tab-pane" type="button" role="tab"
                                                aria-controls="townville-tab-pane" aria-selected="true">Townville</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nordville-tab" data-bs-toggle="tab"
                                                data-bs-target="#nordville-tab-pane" type="button" role="tab"
                                                aria-controls="nordville-tab-pane" aria-selected="false">Nordville</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="hayfield-tab" data-bs-toggle="tab"
                                                data-bs-target="#hayfield-tab-pane" type="button" role="tab"
                                                aria-controls="hayfield-tab-pane" aria-selected="false">Hayfield</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="townville-tab-pane" role="tabpanel"
                                            aria-labelledby="townville-tab" tabindex="0">
                                            <div class="about-tab-contnent">
                                                <p class="description">Townville, the first premium cluster in Balikpapan,
                                                    offers a minimalist tropical design with lake views, smart home
                                                    features, and a strategic location near key facilities. It provides a
                                                    perfect blend of modern comfort, nature, and long-term investment value
                                                    in the Grand City Balikpapan area.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nordville-tab-pane" role="tabpanel"
                                            aria-labelledby="nordville-tab" tabindex="0">
                                            <div class="about-tab-contnent">
                                                <p class="description">Nordville in Grand City Balikpapan offers spacious
                                                    units with contemporary designs and green line facilities, strategically
                                                    located between Balikpapan City and IKN. Developed by Sinar Mas Land, it
                                                    features 24-hour security and a one-gate system, with house types
                                                    including 88, 117, and 172.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="hayfield-tab-pane" role="tabpanel"
                                            aria-labelledby="hayfield-tab" tabindex="0">
                                            <div class="about-tab-contnent">
                                                <p class="description">Hayfield Cluster features a modern design on a
                                                    7.2-hectare site, aligning with the aspirations of millennials who care
                                                    about environmental sustainability. Grand City Balikpapan emphasizes
                                                    natural living and sustainable development, harmonizing with the vibrant
                                                    city life.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-7">
                        <div class="about-thumb-wrap style-one">
                            <div class="round-box-inner">
                                <div class="round-box">
                                    <span class="round one"></span>
                                    <span class="round two"></span>
                                    <span class="round three"></span>
                                </div>
                            </div>
                            <div class="thumb-one">
                                <figure>
                                    <img id="main-image" src="{{ asset('assets/images/development/townville-1.png') }}"
                                        data-townville-src="{{ asset('assets/images/development/townville-1.png') }}"
                                        data-nordville-src="{{ asset('assets/images/development/nordville-1.png') }}"
                                        data-hayfield-src="{{ asset('assets/images/development/hayfield-1.png') }}"
                                        alt="image">
                                </figure>
                            </div>
                            <div class="thumb-two-inner">
                                <div class="thumb-two">
                                    <figure>
                                        <img id="image-two" src="{{ asset('assets/images/development/townville-2.png') }}"
                                            data-townville-src="{{ asset('assets/images/development/townville-2.png') }}"
                                            data-nordville-src="{{ asset('assets/images/development/nordville-2.png') }}"
                                            data-hayfield-src="{{ asset('assets/images/development/hayfield-2.png') }}"
                                            alt="image">
                                    </figure>
                                </div>
                                <div class="thumb-two">
                                    <figure>
                                        <img id="image-three"
                                            src="{{ asset('assets/images/development/townville-3.png') }}"
                                            data-townville-src="{{ asset('assets/images/development/townville-3.png') }}"
                                            data-nordville-src="{{ asset('assets/images/development/nordville-3.png') }}"
                                            data-hayfield-src="{{ asset('assets/images/development/hayfield-3.png') }}"
                                            alt="image">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- development area end -->

        <!-- slider icon area -->
        <section class="bd-filter-area section-space-bottom">
            <div class="swiper swiper-width-auto filter-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="filter-item">
                            <div class="filter-content">
                                <div class="icon">
                                    <span>
                                        <a href="/property/search?category=houses">
                                            <svg width="40" height="31" viewBox="0 0 40 31" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M38.2735 26.5967H37.1977V12.6726H37.6379C38.0108 12.6726 38.3521 12.4685 38.5285 12.1399C38.705 11.8113 38.6866 11.4141 38.4806 11.1031L31.422 0.452577C31.2342 0.169218 30.9192 7.80819e-05 30.5792 7.80819e-05H27.0216C26.7071 7.80819e-05 26.4524 0.254922 26.4524 0.569374C26.4524 0.883827 26.7072 1.13867 27.0216 1.13867H30.5107L37.4003 11.5343H16.6922L9.80248 1.13859H23.4353C23.7497 1.13859 24.0046 0.883749 24.0046 0.569296C24.0046 0.254843 23.7497 0 23.4353 0H8.74225C8.55139 0 8.37319 0.0957031 8.26772 0.254765L0.970311 11.2658C0.970311 11.2658 0.970233 11.2659 0.970154 11.2661L0.904139 11.3657C0.732655 11.6247 0.717421 11.9554 0.864373 12.2291C1.01133 12.5027 1.29554 12.6726 1.60609 12.6726H1.72578H2.36109V26.5967H1.7264C0.774452 26.5967 0 27.3713 0 28.3232C0 29.2752 0.774452 30.0496 1.7264 30.0496H38.2736C39.2256 30.0496 40 29.2752 40 28.3232C39.9999 27.3713 39.2255 26.5967 38.2735 26.5967ZM15.9708 12.6726H36.0592V26.5967H15.9708V12.6726ZM2.15836 11.5341L8.74225 1.59976L15.3262 11.5341H2.15836ZM11.5915 16.824H6.17546C5.76218 16.824 5.42585 17.1603 5.42585 17.5736V26.5967H3.4996V12.6726H14.8323V26.5967H12.3411V17.5736C12.3411 17.1602 12.0047 16.824 11.5915 16.824ZM11.2026 17.9625V26.5967H6.56444V17.9625H11.2026ZM38.2735 28.9111H1.7264C1.40226 28.9111 1.13851 28.6474 1.13851 28.3232C1.13851 27.999 1.40226 27.7353 1.7264 27.7353H38.2735C38.5977 27.7353 38.8614 27.999 38.8614 28.3232C38.8614 28.6474 38.5977 28.9111 38.2735 28.9111Z"
                                                    fill="black" />
                                                <path
                                                    d="M10.3107 21.3278C9.99624 21.3278 9.74139 21.5826 9.74139 21.8971V23.0735C9.74147 23.388 9.99632 23.6428 10.3107 23.6428C10.6251 23.6428 10.88 23.388 10.88 23.0735V21.8971C10.88 21.5825 10.6251 21.3278 10.3107 21.3278Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M33.0554 17.4977H28.0869C27.675 17.4977 27.3397 17.8328 27.3397 18.2449V23.6137C27.3397 24.0256 27.6749 24.3608 28.0869 24.3608H33.0554C33.4674 24.3608 33.8025 24.0257 33.8025 23.6137V18.2449C33.8025 17.8329 33.4674 17.4977 33.0554 17.4977ZM32.664 23.2222H28.4783V18.6362H32.664V23.2222Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M23.4135 17.4977H18.445C18.033 17.4977 17.6979 17.8328 17.6979 18.2449V23.6137C17.6979 24.0256 18.033 24.3608 18.445 24.3608H23.4135C23.8254 24.3608 24.1606 24.0257 24.1606 23.6137V18.2449C24.1605 17.8329 23.8254 17.4977 23.4135 17.4977ZM23.022 23.2222H18.8364V18.6362H23.022V23.2222Z"
                                                    fill="#ED6E5A" />
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="/property/search?category=houses">Houses</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="filter-item">
                            <div class="filter-content">
                                <div class="icon">
                                    <span>
                                        <a href="/property/search?category=apartments">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.2406 5.6167H7.92819C7.551 5.6167 7.2442 5.92357 7.2442 6.30068V9.44865C7.24412 9.82576 7.551 10.1326 7.92819 10.1326H10.2406C10.6178 10.1326 10.9246 9.82576 10.9246 9.44865V6.30068C10.9246 5.92357 10.6178 5.6167 10.2406 5.6167ZM9.786 8.99412H8.38264V6.75522H9.786V8.99412Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M15.316 5.6167H13.0035C12.6263 5.6167 12.3195 5.92357 12.3195 6.30068V9.44865C12.3194 9.82576 12.6263 10.1326 13.0035 10.1326H15.316C15.6932 10.1326 16 9.82576 16 9.44865V6.30068C16 5.92357 15.6932 5.6167 15.316 5.6167ZM14.8614 8.99412H13.458V6.75522H14.8614V8.99412Z"
                                                    fill="black" />
                                                <path
                                                    d="M20.3912 5.6167H18.0788C17.7016 5.6167 17.3948 5.92357 17.3948 6.30068V9.44865C17.3948 9.82576 17.7016 10.1326 18.0788 10.1326H20.3912C20.7684 10.1326 21.0752 9.82576 21.0752 9.44865V6.30068C21.0752 5.92357 20.7684 5.6167 20.3912 5.6167ZM19.9367 8.99412H18.5334V6.75522H19.9367V8.99412Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M10.2405 14.1809H7.92806C7.55088 14.1809 7.24408 14.4878 7.24408 14.8649V18.0129C7.24408 18.39 7.55088 18.6969 7.92806 18.6969H10.2405C10.6177 18.6969 10.9245 18.39 10.9245 18.0129V14.8649C10.9245 14.4878 10.6177 14.1809 10.2405 14.1809ZM9.78603 17.5584H8.38267V15.3194H9.78603V17.5584Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M15.3159 14.1809H13.0034C12.6263 14.1809 12.3195 14.4878 12.3195 14.8649V18.0129C12.3195 18.39 12.6263 18.6969 13.0034 18.6969H15.3159C15.6931 18.6969 15.9999 18.39 15.9999 18.0129V14.8649C15.9999 14.4878 15.6931 14.1809 15.3159 14.1809ZM14.8614 17.5584H13.458V15.3194H14.8614V17.5584Z"
                                                    fill="black" />
                                                <path
                                                    d="M20.3912 14.1809H18.0788C17.7016 14.1809 17.3948 14.4878 17.3948 14.8649V18.0129C17.3948 18.39 17.7016 18.6969 18.0788 18.6969H20.3912C20.7684 18.6969 21.0752 18.39 21.0752 18.0129V14.8649C21.0752 14.4878 20.7684 14.1809 20.3912 14.1809ZM19.9367 17.5584H18.5334V15.3194H19.9367V17.5584Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M10.2405 22.7454H7.92806C7.55088 22.7454 7.24408 23.0522 7.24408 23.4293V26.5773C7.24408 26.9544 7.55088 27.2613 7.92806 27.2613H10.2405C10.6177 27.2613 10.9245 26.9544 10.9245 26.5773V23.4293C10.9245 23.0522 10.6177 22.7454 10.2405 22.7454ZM9.78603 26.1228H8.38267V23.8839H9.78603V26.1228Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M15.3159 22.7454H13.0034C12.6263 22.7454 12.3195 23.0522 12.3195 23.4293V26.5773C12.3195 26.9544 12.6263 27.2613 13.0034 27.2613H15.3159C15.6931 27.2613 15.9999 26.9544 15.9999 26.5773V23.4293C15.9999 23.0522 15.6931 22.7454 15.3159 22.7454ZM14.8614 26.1228H13.458V23.8839H14.8614V26.1228Z"
                                                    fill="black" />
                                                <path
                                                    d="M20.3912 22.7454H18.0788C17.7016 22.7454 17.3948 23.0522 17.3948 23.4293V26.5773C17.3948 26.9544 17.7016 27.2613 18.0788 27.2613H20.3912C20.7684 27.2613 21.0752 26.9544 21.0752 26.5773V23.4293C21.0752 23.0522 20.7684 22.7454 20.3912 22.7454ZM19.9367 26.1228H18.5334V23.8839H19.9367V26.1228Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M10.2405 31.3096H7.92806C7.55088 31.3096 7.24408 31.6164 7.24408 31.9936V35.1415C7.24408 35.5186 7.55088 35.8255 7.92806 35.8255H10.2405C10.6177 35.8255 10.9245 35.5186 10.9245 35.1415V31.9936C10.9245 31.6164 10.6177 31.3096 10.2405 31.3096ZM9.78603 34.687H8.38267V32.4481H9.78603V34.687Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M20.3912 31.3096H18.0788C17.7016 31.3096 17.3948 31.6164 17.3948 31.9936V35.1415C17.3948 35.5186 17.7016 35.8255 18.0788 35.8255H20.3912C20.7684 35.8255 21.0752 35.5186 21.0752 35.1415V31.9936C21.0752 31.6164 20.7684 31.3096 20.3912 31.3096ZM19.9367 34.687H18.5334V32.4481H19.9367V34.687Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M36.5569 36.8882H34.957L34.9527 27.8429C34.9525 27.5286 34.6977 27.2739 34.3834 27.2739H34.3831C34.0688 27.2741 33.814 27.5291 33.8142 27.8434L33.8185 36.8881H30.7342V34.0573C30.7342 33.6093 30.3697 33.2448 29.9216 33.2448H27.3027C26.8546 33.2448 26.4901 33.6093 26.4901 34.0573V36.8881H23.4154L23.4078 18.7982H33.8099L33.8125 24.2934C33.8127 24.6077 34.0675 24.8624 34.3818 24.8624H34.382C34.6964 24.8623 34.9512 24.6073 34.951 24.2929L34.9485 18.7983H35.8678C36.1822 18.7983 36.4371 18.5434 36.4371 18.229V16.2915C36.4371 15.977 36.1823 15.7222 35.8678 15.7222H23.4064L23.401 2.87297H23.9667C24.3719 2.87297 24.7015 2.54336 24.7015 2.1382V0.734766C24.7015 0.329609 24.3719 0 23.9667 0H4.29768C3.89252 0 3.56291 0.329609 3.56291 0.734766V2.13828C3.56291 2.54344 3.89252 2.87305 4.29768 2.87305H4.84854L4.85908 27.6513C4.85924 27.9657 5.11408 28.2204 5.42838 28.2204H5.42861C5.74299 28.2202 5.99775 27.9652 5.9976 27.6509L5.98705 2.87305H22.2624L22.2769 36.8882H16.6117V31.1935C16.6117 30.7341 16.238 30.3605 15.7787 30.3605H12.4858C12.0265 30.3605 11.6528 30.7342 11.6528 31.1935V36.8882H6.00158L5.99916 31.1877C5.999 30.8734 5.74416 30.6187 5.42986 30.6187H5.42963C5.11525 30.6188 4.86049 30.8738 4.86064 31.1881L4.86307 36.8881H3.44314C2.58525 36.8881 1.88721 37.5861 1.88721 38.4441C1.88721 39.302 2.58518 40 3.44314 40H36.557C37.4149 40 38.1129 39.302 38.1129 38.4441C38.1128 37.5861 37.4149 36.8882 36.5569 36.8882ZM27.6286 34.3833H29.5957V36.8882H27.6286V34.3833ZM35.2985 16.8608V17.6598H23.4072L23.4068 16.8608H35.2985ZM4.7015 1.73453V1.13852H23.563V1.73453H4.7015ZM12.7913 31.4991H15.4731V36.8882H12.7913V31.4991ZM36.5569 38.8614H3.44314C3.21299 38.8614 3.02572 38.6741 3.02572 38.4441C3.02572 38.214 3.21299 38.0267 3.44314 38.0267H36.5569C36.7871 38.0267 36.9742 38.214 36.9742 38.4441C36.9742 38.6741 36.787 38.8614 36.5569 38.8614Z"
                                                    fill="black" />
                                                <path
                                                    d="M27.1952 20.9156H25.0579C24.6855 20.9156 24.3826 21.2186 24.3826 21.591V24.5006C24.3826 24.873 24.6855 25.1759 25.0579 25.1759H27.1953C27.5677 25.1759 27.8706 24.8729 27.8706 24.5006V21.591C27.8706 21.2185 27.5676 20.9156 27.1952 20.9156ZM26.7321 24.0374H25.5212V22.0542H26.7321V24.0374Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M31.8863 20.9156H29.749C29.3766 20.9156 29.0737 21.2186 29.0737 21.591V24.5006C29.0737 24.873 29.3766 25.1759 29.749 25.1759H31.8863C32.2587 25.1759 32.5616 24.8729 32.5616 24.5006V21.591C32.5616 21.2185 32.2587 20.9156 31.8863 20.9156ZM31.4231 24.0374H30.2122V22.0542H31.4231V24.0374Z"
                                                    fill="black" />
                                                <path
                                                    d="M27.1953 26.8671H25.0579C24.6855 26.8671 24.3826 27.17 24.3826 27.5424V30.4521C24.3826 30.8244 24.6856 31.1273 25.0579 31.1273H27.1953C27.5677 31.1273 27.8706 30.8243 27.8706 30.4521V27.5424C27.8706 27.17 27.5676 26.8671 27.1953 26.8671ZM26.7321 29.9889H25.5211V28.0057H26.7321V29.9889Z"
                                                    fill="black" />
                                                <path
                                                    d="M31.8863 26.8671H29.749C29.3766 26.8671 29.0737 27.17 29.0737 27.5424V30.4521C29.0737 30.8244 29.3766 31.1273 29.749 31.1273H31.8863C32.2587 31.1273 32.5616 30.8243 32.5616 30.4521V27.5424C32.5616 27.17 32.2587 26.8671 31.8863 26.8671ZM31.4231 29.9889H30.2122V28.0057H31.4231V29.9889Z"
                                                    fill="#ED6E5A" />
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="/property/search?category=apartments">Apartments</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="filter-item">
                            <div class="filter-content">
                                <div class="icon">
                                    <span>
                                        <a href="/property/search?category=land">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_301_12045)">
                                                    <path
                                                        d="M21.6399 18.7241C21.3255 18.7241 21.0706 18.979 21.0706 19.2934V20.5321C21.0706 20.8465 21.3254 21.1014 21.6399 21.1014C21.9543 21.1014 22.2092 20.8465 22.2092 20.5321V19.2934C22.2092 18.979 21.9543 18.7241 21.6399 18.7241Z"
                                                        fill="#ED6E5A" />
                                                    <path
                                                        d="M39.604 16.9578C39.2453 16.5952 38.7195 16.4628 38.2318 16.6117V16.6118C37.828 16.7352 37.4084 17.1039 37.2341 17.4884L35.7362 20.7932L33.7531 23.1838L33.2554 23.4264L33.2618 23.4148C33.6509 22.7005 33.4153 21.8027 32.7252 21.3708C32.1128 20.9877 31.296 21.0948 30.7829 21.6255L30.6565 21.7561V19.3864C30.6565 19.072 30.4017 18.8171 30.0872 18.8171C29.7729 18.8171 29.5179 19.072 29.5179 19.3864V22.9338L28.0737 24.4276H24.0194V15.0682C24.0194 14.5049 23.5612 14.0466 22.9979 14.0466H17.002C16.4387 14.0466 15.9805 14.5049 15.9805 15.0682V24.4277H11.9262L10.482 22.9338V19.39C10.482 19.0755 10.2271 18.8207 9.91268 18.8207C9.59822 18.8207 9.34338 19.0755 9.34338 19.39V21.7562L9.21713 21.6256C8.704 21.0949 7.8872 20.9877 7.2747 21.3709C6.58478 21.8029 6.34907 22.7006 6.73829 23.4149L6.7447 23.4266L6.24696 23.1838L4.26376 20.7933L2.76586 17.4885C2.59157 17.104 2.17203 16.7352 1.76821 16.6118C1.28047 16.463 0.754687 16.5954 0.396015 16.9579C0.0372641 17.3205 -0.0897674 17.8476 0.0644517 18.3338L1.31719 22.2818C1.69641 23.4767 2.30032 24.567 3.11219 25.5224L4.35165 26.981C5.22845 28.0126 6.33501 28.8549 7.5515 29.4164C8.56416 29.8839 10.0224 30.6264 10.991 31.6734C11.6324 32.3667 11.9492 33.3081 11.873 34.2503C11.3899 34.4384 11.0462 34.9074 11.0462 35.4562V36.3242C11.0462 37.0382 11.6271 37.619 12.341 37.619H18.9455C19.4589 37.619 19.9021 37.3179 20.1114 36.8836C20.3206 37.3179 20.7639 37.619 21.2772 37.619H27.8817C28.5956 37.619 29.1765 37.0382 29.1765 36.3242V35.4562C29.1765 34.8246 28.7215 34.2979 28.1223 34.1846C28.0658 33.2646 28.3823 32.3507 29.0088 31.6734C29.9774 30.6264 31.4356 29.8839 32.4483 29.4164C33.6648 28.8549 34.7712 28.0128 35.6481 26.9809L36.8876 25.5224C37.6995 24.567 38.3034 23.4767 38.6826 22.2818L39.9353 18.3338C40.0898 17.8476 39.9627 17.3204 39.604 16.9578ZM17.119 15.1852H22.8808V24.4277H17.119V15.1852ZM25.4201 25.5663L24.584 25.8556C24.5807 25.8567 24.5775 25.8581 24.5743 25.8593C24.5092 25.882 24.4448 25.9062 24.3809 25.9313C24.3596 25.9397 24.3383 25.9484 24.3171 25.957C24.2678 25.9771 24.2189 25.998 24.1704 26.0195C24.1499 26.0286 24.1293 26.0374 24.1089 26.0467C24.0497 26.0738 23.9911 26.1019 23.9332 26.1311C23.8989 26.1483 23.865 26.1664 23.8311 26.1843C23.8077 26.1967 23.7843 26.2092 23.7611 26.222C23.7359 26.2358 23.7103 26.2486 23.6853 26.2628H16.3147C16.2899 26.2487 16.2644 26.236 16.2393 26.2223C16.2157 26.2093 16.1919 26.1966 16.1681 26.1839C16.1345 26.1662 16.101 26.1483 16.0671 26.1313C16.0089 26.102 15.95 26.0737 15.8907 26.0464C15.8709 26.0374 15.851 26.0289 15.8311 26.0202C15.7816 25.9982 15.7317 25.977 15.6814 25.9564C15.661 25.9481 15.6408 25.9399 15.6204 25.9319C15.5528 25.9053 15.4849 25.8796 15.416 25.8558L14.5799 25.5663H25.4201ZM11.8267 30.9002C10.7206 29.7045 9.12939 28.8907 8.02876 28.3826C6.96134 27.8899 5.98978 27.1502 5.21923 26.2435L3.97977 24.785C3.26633 23.9455 2.73563 22.9874 2.40243 21.9373L1.14969 17.9894C1.1132 17.8744 1.16883 17.7955 1.20531 17.7586C1.24172 17.7218 1.32 17.6656 1.43531 17.7005C1.52727 17.7287 1.68914 17.8709 1.72883 17.9585L3.25829 21.3329C3.27922 21.3791 3.30626 21.4223 3.33868 21.4613L5.44899 24.0052C5.50063 24.0674 5.56493 24.1179 5.63767 24.1534L7.72525 25.1713L9.2351 27.1745C9.34697 27.3231 9.51752 27.4012 9.69017 27.4012C9.80947 27.4012 9.92978 27.3638 10.0324 27.2865C10.2835 27.0973 10.3335 26.7403 10.1443 26.4893L8.57759 24.4106L7.73806 22.8699C7.63642 22.6835 7.6983 22.4489 7.87869 22.336C8.0383 22.2363 8.25681 22.2702 8.39853 22.4168L11.5217 25.6474C11.5367 25.6627 11.5525 25.6772 11.5689 25.6908C11.5696 25.6913 11.5702 25.692 11.5709 25.6926C11.5757 25.6966 11.5812 25.6999 11.5862 25.7037C11.6342 25.7403 11.6874 25.7699 11.7448 25.7897L15.0436 26.9317C15.0467 26.9327 15.0496 26.934 15.0526 26.935C15.1292 26.9617 15.2048 26.991 15.2793 27.0219C15.3035 27.0319 15.3272 27.043 15.3512 27.0535C15.4064 27.0776 15.4613 27.1024 15.5153 27.1289C15.538 27.14 15.5606 27.1517 15.5832 27.1631C15.6425 27.1935 15.7012 27.225 15.7589 27.2581C15.7724 27.2658 15.7858 27.2734 15.7991 27.2811C16.803 27.8717 17.5425 28.8631 17.8032 30.0155L18.1864 34.1611H13.0195C13.0681 32.9652 12.6436 31.7832 11.8267 30.9002ZM18.9455 36.4803H12.341C12.2549 36.4803 12.1848 36.4101 12.1848 36.324V35.456C12.1848 35.3699 12.2549 35.2998 12.341 35.2998H12.3817H18.8107H18.9454C19.0316 35.2998 19.1017 35.37 19.1017 35.456V36.324C19.1017 36.4102 19.0317 36.4803 18.9455 36.4803ZM21.0663 29.875L20.6554 34.321C20.4192 34.4509 20.2289 34.6529 20.1114 34.8966C19.9575 34.5772 19.6776 34.3298 19.3354 34.2215L18.9336 29.875C18.9314 29.8519 18.9279 29.829 18.923 29.8063C18.7267 28.9047 18.2993 28.0795 17.7046 27.4013H22.2954C21.7007 28.0795 21.2733 28.9047 21.077 29.8063C21.072 29.829 21.0685 29.8519 21.0663 29.875ZM28.038 36.324C28.038 36.4102 27.9679 36.4803 27.8817 36.4803H21.2773C21.1911 36.4803 21.1211 36.4101 21.1211 36.324V35.456C21.1211 35.3699 21.1911 35.2998 21.2773 35.2998H27.6181H27.8818C27.9679 35.2998 28.038 35.37 28.038 35.456V36.324ZM38.8502 17.9894L37.5975 21.9373C37.2644 22.9874 36.7337 23.9455 36.0201 24.785L34.7807 26.2435C34.0101 27.1502 33.0387 27.8899 31.9712 28.3826C30.8705 28.8907 29.2792 29.7045 28.1732 30.9002C27.3563 31.7832 26.9318 32.9652 26.9804 34.1613H21.8135L22.1967 30.0156C22.4575 28.8631 23.1971 27.8717 24.2011 27.2811C24.2143 27.2735 24.2275 27.266 24.2407 27.2585C24.2986 27.2252 24.3576 27.1935 24.4172 27.163C24.4396 27.1516 24.4618 27.1402 24.4843 27.1292C24.5388 27.1024 24.5942 27.0774 24.65 27.053C24.6734 27.0428 24.6966 27.032 24.7202 27.0221C24.7979 26.9899 24.8765 26.9592 24.9565 26.9316L28.2553 25.7897C28.3105 25.7706 28.3617 25.7424 28.4083 25.7077C28.4329 25.6894 28.4568 25.6697 28.4783 25.6474L31.6015 22.4169C31.7433 22.2703 31.9618 22.2361 32.1212 22.336C32.3018 22.449 32.3637 22.6836 32.262 22.87L31.4233 24.4091L29.8555 26.4894C29.6663 26.7405 29.7165 27.0974 29.9675 27.2866C30.0701 27.364 30.1904 27.4013 30.3097 27.4013C30.4823 27.4013 30.6528 27.3231 30.7647 27.1746L32.2744 25.1716L34.3625 24.1534C34.4351 24.118 34.4994 24.0674 34.5512 24.0052L36.6615 21.4613C36.6939 21.4223 36.7209 21.3791 36.7419 21.333L38.2713 17.9585C38.311 17.8709 38.4728 17.7288 38.5648 17.7007C38.6801 17.6652 38.7584 17.7219 38.7948 17.7587C38.8311 17.7955 38.8867 17.8744 38.8502 17.9894Z"
                                                        fill="black" />
                                                    <path
                                                        d="M33.3859 11.1096L20.4857 2.52829C20.1907 2.33188 19.8093 2.33188 19.5142 2.52829L6.614 11.1096C6.17822 11.3996 5.91806 11.8851 5.91814 12.4085C5.91814 12.9319 6.17829 13.4174 6.614 13.7071C6.87642 13.8817 7.1772 13.969 7.47798 13.969C7.77877 13.969 8.07955 13.8817 8.34189 13.7071L9.3433 13.041V15.8437C9.3433 16.1582 9.59814 16.413 9.9126 16.413C10.2271 16.413 10.4819 16.1582 10.4819 15.8437V12.2837L20 5.95228L29.518 12.2837V15.8494C29.518 16.1639 29.7729 16.4187 30.0873 16.4187C30.4017 16.4187 30.6566 16.1639 30.6566 15.8494V13.041L31.658 13.7071C32.1828 14.0564 32.8611 14.0564 33.3859 13.7071C33.8217 13.4173 34.0819 12.9318 34.0819 12.4085C34.0819 11.8851 33.8218 11.3995 33.3859 11.1096ZM32.7552 12.7593C32.6135 12.8536 32.4303 12.8536 32.2885 12.7593L20.4857 4.90798C20.2465 4.74868 19.9505 4.7186 19.6896 4.81767C19.6289 4.84079 19.57 4.87079 19.5141 4.90798L7.71142 12.7592C7.7115 12.7592 7.71134 12.7592 7.71142 12.7592C7.56962 12.8536 7.38642 12.8535 7.24462 12.7592C7.07501 12.6464 7.05665 12.4763 7.05665 12.4084C7.05665 12.3405 7.07494 12.1704 7.24462 12.0575L20 3.57259L32.7553 12.0575C32.925 12.1704 32.9433 12.3406 32.9433 12.4085C32.9433 12.4764 32.925 12.6464 32.7552 12.7593Z"
                                                        fill="#ED6E5A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_301_1204">
                                                        <rect width="40" height="40" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="/property/search?category=land">Land</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="filter-item">
                            <div class="filter-content">
                                <div class="icon">
                                    <span>
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M31.3241 16.9595H27.7787C27.4643 16.9595 27.2094 17.2143 27.2094 17.5288C27.2094 17.8432 27.4643 18.0981 27.7787 18.0981H29.9512L25.2067 22.8426L23.9477 21.5832C23.8409 21.4765 23.6962 21.4165 23.5451 21.4165C23.3941 21.4165 23.2494 21.4765 23.1426 21.5832L19.2312 25.4947L17.3357 23.5991C17.229 23.4924 17.0841 23.4324 16.9332 23.4324C16.7823 23.4324 16.6374 23.4924 16.5307 23.5991L9.52241 30.6074C9.30007 30.8297 9.30007 31.1901 9.52241 31.4125C9.63358 31.5236 9.77921 31.5792 9.92491 31.5792C10.0706 31.5792 10.2163 31.5236 10.3274 31.4125L16.9332 24.8067L18.8287 26.7024C18.9354 26.8091 19.0802 26.8691 19.2312 26.8691C19.3821 26.8691 19.5269 26.8091 19.6337 26.7024L23.5451 22.7909L24.8042 24.0501C25.0265 24.2723 25.3869 24.2723 25.6093 24.0501L30.7548 18.9046V21.0883C30.7548 21.4028 31.0097 21.6576 31.3241 21.6576C31.6386 21.6576 31.8934 21.4028 31.8934 21.0883V17.5288C31.8934 17.2143 31.6386 16.9595 31.3241 16.9595Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M31.8785 32.1779H8.69072V16.15C8.69072 15.8357 8.43587 15.5808 8.12142 15.5808C7.80705 15.5808 7.55212 15.8357 7.55212 16.1501V32.7472C7.55212 33.0617 7.80697 33.3165 8.12142 33.3165H31.8785C32.193 33.3165 32.4478 33.0617 32.4478 32.7472C32.4478 32.4328 32.193 32.1779 31.8785 32.1779Z"
                                                fill="black" />
                                            <path
                                                d="M38.2736 34.7615H35.038V16.3669L36.8586 17.578C37.5283 18.0236 38.3935 18.0235 39.0632 17.5781C39.6191 17.2083 39.951 16.5888 39.951 15.921C39.951 15.2532 39.6191 14.6338 39.0632 14.264L34.6917 11.356C34.4299 11.1817 34.0766 11.2529 33.9025 11.5146C33.7283 11.7764 33.7994 12.1298 34.0611 12.3038L38.4326 15.2119C38.6741 15.3724 38.8125 15.6308 38.8125 15.9209C38.8125 16.211 38.6741 16.4694 38.4326 16.6301C38.146 16.8208 37.7758 16.8207 37.4892 16.6301L20.5598 5.36843C20.2197 5.14233 19.7802 5.14226 19.4402 5.36858L2.51078 16.6301C2.22422 16.8208 1.85391 16.8208 1.56734 16.6301C1.32586 16.4695 1.18742 16.2111 1.18742 15.921C1.18742 15.6309 1.32594 15.3725 1.56734 15.2119L20 2.95038L31.1169 10.3455C31.3786 10.5196 31.732 10.4485 31.9061 10.1869C32.0803 9.92507 32.0092 9.57171 31.7475 9.39765L20.5598 1.95522C20.2197 1.72913 19.7802 1.72905 19.4402 1.95538L13.9093 5.63452V5.14155H14.0737C14.4816 5.14155 14.8134 4.80968 14.8134 4.40187V2.67483C14.8134 2.26702 14.4815 1.93515 14.0737 1.93515H8.05148C7.64359 1.93515 7.3118 2.26702 7.3118 2.67483V4.40194C7.3118 4.80976 7.64359 5.14163 8.05148 5.14163H8.21586V9.42186L0.936797 14.264C0.380781 14.6338 0.0489062 15.2533 0.0489062 15.9211C0.0489062 16.5889 0.380859 17.2083 0.936797 17.5781C1.27164 17.8009 1.65531 17.9123 2.03914 17.9123C2.42281 17.9123 2.80664 17.8008 3.14141 17.5781L4.96195 16.3671V26.5174C4.96195 26.8319 5.2168 27.0867 5.53125 27.0867C5.84563 27.0867 6.10055 26.8319 6.10055 26.5174V15.6096L20 6.36351L33.8995 15.6096V34.7614H6.10047V30.0542C6.10047 29.7398 5.84563 29.485 5.53117 29.485C5.2168 29.485 4.96187 29.7398 4.96187 30.0542V34.7614H1.72641C0.774453 34.7615 0 35.5359 0 36.4879C0 37.4398 0.774453 38.2143 1.72641 38.2143H38.2736C39.2255 38.2143 40 37.4398 40 36.4879C40 35.5359 39.2255 34.7615 38.2736 34.7615ZM12.7708 6.39194L9.35437 8.66452V5.14163H12.7708V6.39194ZM8.45039 3.07366H13.6749V4.00312H8.45039V3.07366ZM38.2736 37.0758H1.72641C1.40227 37.0758 1.13852 36.812 1.13852 36.4879C1.13852 36.1637 1.40227 35.8999 1.72641 35.8999H38.2736C38.5977 35.8999 38.8615 36.1637 38.8615 36.4879C38.8615 36.812 38.5977 37.0758 38.2736 37.0758Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="/property/search?category=shophouse">Shophouse</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="filter-item">
                            <div class="filter-content">
                                <div class="icon">
                                    <span>
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.2206 11.4313C14.3279 11.4313 9.53394 16.2252 9.53394 22.1178C9.53394 28.0105 14.3279 32.8044 20.2206 32.8044C26.1131 32.8045 30.9071 28.0105 30.9071 22.1178C30.9071 16.2252 26.1131 11.4313 20.2206 11.4313ZM20.2205 31.6659C14.9556 31.6659 10.6724 27.3826 10.6724 22.1178C10.6724 16.853 14.9556 12.5698 20.2205 12.5698C25.4853 12.5698 29.7685 16.853 29.7685 22.1178C29.7685 27.3826 25.4853 31.6659 20.2205 31.6659Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M27.2576 19.9423C27.1492 19.6086 26.8527 19.3804 26.5023 19.3613L22.4649 19.1395L21.0066 15.3683C20.88 15.041 20.5715 14.8295 20.2205 14.8295C19.8697 14.8295 19.5611 15.041 19.4345 15.3683L17.9761 19.1395L13.9388 19.3613C13.5883 19.3805 13.2919 19.6086 13.1834 19.9423C13.075 20.276 13.1809 20.6348 13.453 20.8562L16.589 23.4087L15.5521 27.317C15.4622 27.6562 15.5876 28.0086 15.8714 28.2148C16.1552 28.4211 16.529 28.4313 16.824 28.2409L20.2205 26.0472L23.6171 28.241C23.7578 28.3318 23.9163 28.3769 24.0746 28.3769C24.2481 28.3769 24.4212 28.3226 24.5697 28.2148C24.8536 28.0085 24.9789 27.656 24.8888 27.3169L23.8521 23.4087L26.988 20.8563C27.2601 20.6348 27.366 20.276 27.2576 19.9423ZM22.9853 22.6462C22.7287 22.8548 22.6177 23.1962 22.7026 23.5159L23.5922 26.8696L20.6777 24.9872C20.4 24.8078 20.0411 24.8078 19.7632 24.9872L16.8487 26.8696L17.7384 23.516C17.8232 23.1962 17.7122 22.8548 17.4558 22.6463L14.7648 20.4561L18.229 20.2659C18.5593 20.2478 18.8498 20.0368 18.969 19.7284L20.2205 16.4924L21.4719 19.7287C21.5913 20.037 21.8819 20.2479 22.2117 20.2659L25.6761 20.4561L22.9853 22.6462Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M38.2735 34.7614H35.0379V16.3669L36.8585 17.578C37.1934 17.8008 37.577 17.9121 37.9609 17.9121C38.3445 17.9121 38.7284 17.8007 39.0631 17.578C39.6191 17.2082 39.9509 16.5887 39.9509 15.9209C39.9509 15.2531 39.619 14.6337 39.0631 14.2639L34.5391 11.2545C34.2773 11.0802 33.9239 11.1513 33.7499 11.4131C33.5756 11.6748 33.6467 12.0282 33.9085 12.2023L38.4325 15.2118C38.674 15.3723 38.8124 15.6308 38.8124 15.9209C38.8124 16.2109 38.674 16.4694 38.4325 16.63C38.1459 16.8207 37.7756 16.8206 37.4891 16.63L20.5597 5.36846C20.2197 5.14252 19.7804 5.14236 19.4401 5.36861L2.51078 16.6302C2.22421 16.8209 1.85398 16.8207 1.56742 16.6301C1.32593 16.4695 1.1875 16.2111 1.1875 15.921C1.1875 15.6309 1.32593 15.3725 1.56742 15.2119L9.1003 10.2009L9.10045 10.2009L13.6554 7.17087C13.6557 7.17072 13.6558 7.17056 13.656 7.17048L20 2.95033L30.9061 10.2052C31.1679 10.3793 31.5213 10.3082 31.6953 10.0466C31.8695 9.78477 31.7985 9.43142 31.5367 9.25735L20.5597 1.95526C20.2197 1.72932 19.7804 1.72917 19.4401 1.95541L13.9093 5.63447V5.14158H14.0736C14.4815 5.14158 14.8134 4.80971 14.8134 4.40189V2.67479C14.8134 2.26698 14.4815 1.9351 14.0736 1.9351H8.05155C7.64366 1.9351 7.31178 2.26698 7.31178 2.67479V4.40189C7.31178 4.80971 7.64366 5.14158 8.05155 5.14158H8.21584V9.42181L0.936717 14.2639C0.38078 14.6337 0.0489062 15.2532 0.0489062 15.921C0.0489062 16.5888 0.380859 17.2082 0.936717 17.578C1.6064 18.0236 2.47164 18.0236 3.14132 17.578L4.96194 16.3669V26.5164C4.96194 26.8308 5.21679 27.0857 5.53124 27.0857C5.84569 27.0857 6.10053 26.8308 6.10053 26.5164V15.6096L20 6.36353L28.285 11.8748L33.8994 15.6096V34.7614H6.10046V30.0532C6.10046 29.7387 5.84561 29.4839 5.53116 29.4839C5.21671 29.4839 4.96187 29.7387 4.96187 30.0532V34.7614H1.7264C0.774452 34.7614 0 35.5359 0 36.4878C0 37.4398 0.774452 38.2142 1.7264 38.2142H38.2736C39.2256 38.2142 40 37.4398 40 36.4878C40 35.5359 39.2255 34.7614 38.2735 34.7614ZM12.7708 6.39181L9.35436 8.66446V5.14158H12.7708V6.39181ZM8.4503 3.07369H13.6749V4.00314H13.3401H8.78514H8.4503V3.07369ZM38.2735 37.0757H1.7264C1.40226 37.0757 1.13851 36.8119 1.13851 36.4878C1.13851 36.1635 1.40226 35.8998 1.7264 35.8998H38.2736C38.5977 35.8998 38.8615 36.1635 38.8615 36.4878C38.8614 36.812 38.5977 37.0757 38.2735 37.0757Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="/property/search?category=warehouse">Warehouse</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="filter-item">
                            <div class="filter-content">
                                <div class="icon">
                                    <span>
                                        <svg width="40" height="31" viewBox="0 0 40 31" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M38.2735 26.5967H37.1977V12.6726H37.6379C38.0108 12.6726 38.3521 12.4685 38.5285 12.1399C38.705 11.8113 38.6866 11.4141 38.4806 11.1031L31.422 0.452577C31.2342 0.169218 30.9192 7.80819e-05 30.5792 7.80819e-05H27.0216C26.7071 7.80819e-05 26.4524 0.254922 26.4524 0.569374C26.4524 0.883827 26.7072 1.13867 27.0216 1.13867H30.5107L37.4003 11.5343H16.6922L9.80248 1.13859H23.4353C23.7497 1.13859 24.0046 0.883749 24.0046 0.569296C24.0046 0.254843 23.7497 0 23.4353 0H8.74225C8.55139 0 8.37319 0.0957031 8.26772 0.254765L0.970311 11.2658C0.970311 11.2658 0.970233 11.2659 0.970154 11.2661L0.904139 11.3657C0.732655 11.6247 0.717421 11.9554 0.864373 12.2291C1.01133 12.5027 1.29554 12.6726 1.60609 12.6726H1.72578H2.36109V26.5967H1.7264C0.774452 26.5967 0 27.3713 0 28.3232C0 29.2752 0.774452 30.0496 1.7264 30.0496H38.2736C39.2256 30.0496 40 29.2752 40 28.3232C39.9999 27.3713 39.2255 26.5967 38.2735 26.5967ZM15.9708 12.6726H36.0592V26.5967H15.9708V12.6726ZM2.15836 11.5341L8.74225 1.59976L15.3262 11.5341H2.15836ZM11.5915 16.824H6.17546C5.76218 16.824 5.42585 17.1603 5.42585 17.5736V26.5967H3.4996V12.6726H14.8323V26.5967H12.3411V17.5736C12.3411 17.1602 12.0047 16.824 11.5915 16.824ZM11.2026 17.9625V26.5967H6.56444V17.9625H11.2026ZM38.2735 28.9111H1.7264C1.40226 28.9111 1.13851 28.6474 1.13851 28.3232C1.13851 27.999 1.40226 27.7353 1.7264 27.7353H38.2735C38.5977 27.7353 38.8614 27.999 38.8614 28.3232C38.8614 28.6474 38.5977 28.9111 38.2735 28.9111Z"
                                                fill="black" />
                                            <path
                                                d="M10.3107 21.3278C9.99624 21.3278 9.74139 21.5826 9.74139 21.8971V23.0735C9.74147 23.388 9.99632 23.6428 10.3107 23.6428C10.6251 23.6428 10.88 23.388 10.88 23.0735V21.8971C10.88 21.5825 10.6251 21.3278 10.3107 21.3278Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M33.0554 17.4977H28.0869C27.675 17.4977 27.3397 17.8328 27.3397 18.2449V23.6137C27.3397 24.0256 27.6749 24.3608 28.0869 24.3608H33.0554C33.4674 24.3608 33.8025 24.0257 33.8025 23.6137V18.2449C33.8025 17.8329 33.4674 17.4977 33.0554 17.4977ZM32.664 23.2222H28.4783V18.6362H32.664V23.2222Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M23.4135 17.4977H18.445C18.033 17.4977 17.6979 17.8328 17.6979 18.2449V23.6137C17.6979 24.0256 18.033 24.3608 18.445 24.3608H23.4135C23.8254 24.3608 24.1606 24.0257 24.1606 23.6137V18.2449C24.1605 17.8329 23.8254 17.4977 23.4135 17.4977ZM23.022 23.2222H18.8364V18.6362H23.022V23.2222Z"
                                                fill="#ED6E5A" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="/property/search?category=houses">Houses</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="filter-item">
                            <div class="filter-content">
                                <div class="icon">
                                    <span>
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.2406 5.6167H7.92819C7.551 5.6167 7.2442 5.92357 7.2442 6.30068V9.44865C7.24412 9.82576 7.551 10.1326 7.92819 10.1326H10.2406C10.6178 10.1326 10.9246 9.82576 10.9246 9.44865V6.30068C10.9246 5.92357 10.6178 5.6167 10.2406 5.6167ZM9.786 8.99412H8.38264V6.75522H9.786V8.99412Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M15.316 5.6167H13.0035C12.6263 5.6167 12.3195 5.92357 12.3195 6.30068V9.44865C12.3194 9.82576 12.6263 10.1326 13.0035 10.1326H15.316C15.6932 10.1326 16 9.82576 16 9.44865V6.30068C16 5.92357 15.6932 5.6167 15.316 5.6167ZM14.8614 8.99412H13.458V6.75522H14.8614V8.99412Z"
                                                fill="black" />
                                            <path
                                                d="M20.3912 5.6167H18.0788C17.7016 5.6167 17.3948 5.92357 17.3948 6.30068V9.44865C17.3948 9.82576 17.7016 10.1326 18.0788 10.1326H20.3912C20.7684 10.1326 21.0752 9.82576 21.0752 9.44865V6.30068C21.0752 5.92357 20.7684 5.6167 20.3912 5.6167ZM19.9367 8.99412H18.5334V6.75522H19.9367V8.99412Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M10.2405 14.1809H7.92806C7.55088 14.1809 7.24408 14.4878 7.24408 14.8649V18.0129C7.24408 18.39 7.55088 18.6969 7.92806 18.6969H10.2405C10.6177 18.6969 10.9245 18.39 10.9245 18.0129V14.8649C10.9245 14.4878 10.6177 14.1809 10.2405 14.1809ZM9.78603 17.5584H8.38267V15.3194H9.78603V17.5584Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M15.3159 14.1809H13.0034C12.6263 14.1809 12.3195 14.4878 12.3195 14.8649V18.0129C12.3195 18.39 12.6263 18.6969 13.0034 18.6969H15.3159C15.6931 18.6969 15.9999 18.39 15.9999 18.0129V14.8649C15.9999 14.4878 15.6931 14.1809 15.3159 14.1809ZM14.8614 17.5584H13.458V15.3194H14.8614V17.5584Z"
                                                fill="black" />
                                            <path
                                                d="M20.3912 14.1809H18.0788C17.7016 14.1809 17.3948 14.4878 17.3948 14.8649V18.0129C17.3948 18.39 17.7016 18.6969 18.0788 18.6969H20.3912C20.7684 18.6969 21.0752 18.39 21.0752 18.0129V14.8649C21.0752 14.4878 20.7684 14.1809 20.3912 14.1809ZM19.9367 17.5584H18.5334V15.3194H19.9367V17.5584Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M10.2405 22.7454H7.92806C7.55088 22.7454 7.24408 23.0522 7.24408 23.4293V26.5773C7.24408 26.9544 7.55088 27.2613 7.92806 27.2613H10.2405C10.6177 27.2613 10.9245 26.9544 10.9245 26.5773V23.4293C10.9245 23.0522 10.6177 22.7454 10.2405 22.7454ZM9.78603 26.1228H8.38267V23.8839H9.78603V26.1228Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M15.3159 22.7454H13.0034C12.6263 22.7454 12.3195 23.0522 12.3195 23.4293V26.5773C12.3195 26.9544 12.6263 27.2613 13.0034 27.2613H15.3159C15.6931 27.2613 15.9999 26.9544 15.9999 26.5773V23.4293C15.9999 23.0522 15.6931 22.7454 15.3159 22.7454ZM14.8614 26.1228H13.458V23.8839H14.8614V26.1228Z"
                                                fill="black" />
                                            <path
                                                d="M20.3912 22.7454H18.0788C17.7016 22.7454 17.3948 23.0522 17.3948 23.4293V26.5773C17.3948 26.9544 17.7016 27.2613 18.0788 27.2613H20.3912C20.7684 27.2613 21.0752 26.9544 21.0752 26.5773V23.4293C21.0752 23.0522 20.7684 22.7454 20.3912 22.7454ZM19.9367 26.1228H18.5334V23.8839H19.9367V26.1228Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M10.2405 31.3096H7.92806C7.55088 31.3096 7.24408 31.6164 7.24408 31.9936V35.1415C7.24408 35.5186 7.55088 35.8255 7.92806 35.8255H10.2405C10.6177 35.8255 10.9245 35.5186 10.9245 35.1415V31.9936C10.9245 31.6164 10.6177 31.3096 10.2405 31.3096ZM9.78603 34.687H8.38267V32.4481H9.78603V34.687Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M20.3912 31.3096H18.0788C17.7016 31.3096 17.3948 31.6164 17.3948 31.9936V35.1415C17.3948 35.5186 17.7016 35.8255 18.0788 35.8255H20.3912C20.7684 35.8255 21.0752 35.5186 21.0752 35.1415V31.9936C21.0752 31.6164 20.7684 31.3096 20.3912 31.3096ZM19.9367 34.687H18.5334V32.4481H19.9367V34.687Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M36.5569 36.8882H34.957L34.9527 27.8429C34.9525 27.5286 34.6977 27.2739 34.3834 27.2739H34.3831C34.0688 27.2741 33.814 27.5291 33.8142 27.8434L33.8185 36.8881H30.7342V34.0573C30.7342 33.6093 30.3697 33.2448 29.9216 33.2448H27.3027C26.8546 33.2448 26.4901 33.6093 26.4901 34.0573V36.8881H23.4154L23.4078 18.7982H33.8099L33.8125 24.2934C33.8127 24.6077 34.0675 24.8624 34.3818 24.8624H34.382C34.6964 24.8623 34.9512 24.6073 34.951 24.2929L34.9485 18.7983H35.8678C36.1822 18.7983 36.4371 18.5434 36.4371 18.229V16.2915C36.4371 15.977 36.1823 15.7222 35.8678 15.7222H23.4064L23.401 2.87297H23.9667C24.3719 2.87297 24.7015 2.54336 24.7015 2.1382V0.734766C24.7015 0.329609 24.3719 0 23.9667 0H4.29768C3.89252 0 3.56291 0.329609 3.56291 0.734766V2.13828C3.56291 2.54344 3.89252 2.87305 4.29768 2.87305H4.84854L4.85908 27.6513C4.85924 27.9657 5.11408 28.2204 5.42838 28.2204H5.42861C5.74299 28.2202 5.99775 27.9652 5.9976 27.6509L5.98705 2.87305H22.2624L22.2769 36.8882H16.6117V31.1935C16.6117 30.7341 16.238 30.3605 15.7787 30.3605H12.4858C12.0265 30.3605 11.6528 30.7342 11.6528 31.1935V36.8882H6.00158L5.99916 31.1877C5.999 30.8734 5.74416 30.6187 5.42986 30.6187H5.42963C5.11525 30.6188 4.86049 30.8738 4.86064 31.1881L4.86307 36.8881H3.44314C2.58525 36.8881 1.88721 37.5861 1.88721 38.4441C1.88721 39.302 2.58518 40 3.44314 40H36.557C37.4149 40 38.1129 39.302 38.1129 38.4441C38.1128 37.5861 37.4149 36.8882 36.5569 36.8882ZM27.6286 34.3833H29.5957V36.8882H27.6286V34.3833ZM35.2985 16.8608V17.6598H23.4072L23.4068 16.8608H35.2985ZM4.7015 1.73453V1.13852H23.563V1.73453H4.7015ZM12.7913 31.4991H15.4731V36.8882H12.7913V31.4991ZM36.5569 38.8614H3.44314C3.21299 38.8614 3.02572 38.6741 3.02572 38.4441C3.02572 38.214 3.21299 38.0267 3.44314 38.0267H36.5569C36.7871 38.0267 36.9742 38.214 36.9742 38.4441C36.9742 38.6741 36.787 38.8614 36.5569 38.8614Z"
                                                fill="black" />
                                            <path
                                                d="M27.1952 20.9156H25.0579C24.6855 20.9156 24.3826 21.2186 24.3826 21.591V24.5006C24.3826 24.873 24.6855 25.1759 25.0579 25.1759H27.1953C27.5677 25.1759 27.8706 24.8729 27.8706 24.5006V21.591C27.8706 21.2185 27.5676 20.9156 27.1952 20.9156ZM26.7321 24.0374H25.5212V22.0542H26.7321V24.0374Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M31.8863 20.9156H29.749C29.3766 20.9156 29.0737 21.2186 29.0737 21.591V24.5006C29.0737 24.873 29.3766 25.1759 29.749 25.1759H31.8863C32.2587 25.1759 32.5616 24.8729 32.5616 24.5006V21.591C32.5616 21.2185 32.2587 20.9156 31.8863 20.9156ZM31.4231 24.0374H30.2122V22.0542H31.4231V24.0374Z"
                                                fill="black" />
                                            <path
                                                d="M27.1953 26.8671H25.0579C24.6855 26.8671 24.3826 27.17 24.3826 27.5424V30.4521C24.3826 30.8244 24.6856 31.1273 25.0579 31.1273H27.1953C27.5677 31.1273 27.8706 30.8243 27.8706 30.4521V27.5424C27.8706 27.17 27.5676 26.8671 27.1953 26.8671ZM26.7321 29.9889H25.5211V28.0057H26.7321V29.9889Z"
                                                fill="black" />
                                            <path
                                                d="M31.8863 26.8671H29.749C29.3766 26.8671 29.0737 27.17 29.0737 27.5424V30.4521C29.0737 30.8244 29.3766 31.1273 29.749 31.1273H31.8863C32.2587 31.1273 32.5616 30.8243 32.5616 30.4521V27.5424C32.5616 27.17 32.2587 26.8671 31.8863 26.8671ZM31.4231 29.9889H30.2122V28.0057H31.4231V29.9889Z"
                                                fill="#ED6E5A" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="/property/search?category=apartments">Apartments</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="filter-item">
                            <div class="filter-content">
                                <div class="icon">
                                    <span>
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_301_12046)">
                                                <path
                                                    d="M21.6399 18.7241C21.3255 18.7241 21.0706 18.979 21.0706 19.2934V20.5321C21.0706 20.8465 21.3254 21.1014 21.6399 21.1014C21.9543 21.1014 22.2092 20.8465 22.2092 20.5321V19.2934C22.2092 18.979 21.9543 18.7241 21.6399 18.7241Z"
                                                    fill="#ED6E5A" />
                                                <path
                                                    d="M39.604 16.9578C39.2453 16.5952 38.7195 16.4628 38.2318 16.6117V16.6118C37.828 16.7352 37.4084 17.1039 37.2341 17.4884L35.7362 20.7932L33.7531 23.1838L33.2554 23.4264L33.2618 23.4148C33.6509 22.7005 33.4153 21.8027 32.7252 21.3708C32.1128 20.9877 31.296 21.0948 30.7829 21.6255L30.6565 21.7561V19.3864C30.6565 19.072 30.4017 18.8171 30.0872 18.8171C29.7729 18.8171 29.5179 19.072 29.5179 19.3864V22.9338L28.0737 24.4276H24.0194V15.0682C24.0194 14.5049 23.5612 14.0466 22.9979 14.0466H17.002C16.4387 14.0466 15.9805 14.5049 15.9805 15.0682V24.4277H11.9262L10.482 22.9338V19.39C10.482 19.0755 10.2271 18.8207 9.91268 18.8207C9.59822 18.8207 9.34338 19.0755 9.34338 19.39V21.7562L9.21713 21.6256C8.704 21.0949 7.8872 20.9877 7.2747 21.3709C6.58478 21.8029 6.34907 22.7006 6.73829 23.4149L6.7447 23.4266L6.24696 23.1838L4.26376 20.7933L2.76586 17.4885C2.59157 17.104 2.17203 16.7352 1.76821 16.6118C1.28047 16.463 0.754687 16.5954 0.396015 16.9579C0.0372641 17.3205 -0.0897674 17.8476 0.0644517 18.3338L1.31719 22.2818C1.69641 23.4767 2.30032 24.567 3.11219 25.5224L4.35165 26.981C5.22845 28.0126 6.33501 28.8549 7.5515 29.4164C8.56416 29.8839 10.0224 30.6264 10.991 31.6734C11.6324 32.3667 11.9492 33.3081 11.873 34.2503C11.3899 34.4384 11.0462 34.9074 11.0462 35.4562V36.3242C11.0462 37.0382 11.6271 37.619 12.341 37.619H18.9455C19.4589 37.619 19.9021 37.3179 20.1114 36.8836C20.3206 37.3179 20.7639 37.619 21.2772 37.619H27.8817C28.5956 37.619 29.1765 37.0382 29.1765 36.3242V35.4562C29.1765 34.8246 28.7215 34.2979 28.1223 34.1846C28.0658 33.2646 28.3823 32.3507 29.0088 31.6734C29.9774 30.6264 31.4356 29.8839 32.4483 29.4164C33.6648 28.8549 34.7712 28.0128 35.6481 26.9809L36.8876 25.5224C37.6995 24.567 38.3034 23.4767 38.6826 22.2818L39.9353 18.3338C40.0898 17.8476 39.9627 17.3204 39.604 16.9578ZM17.119 15.1852H22.8808V24.4277H17.119V15.1852ZM25.4201 25.5663L24.584 25.8556C24.5807 25.8567 24.5775 25.8581 24.5743 25.8593C24.5092 25.882 24.4448 25.9062 24.3809 25.9313C24.3596 25.9397 24.3383 25.9484 24.3171 25.957C24.2678 25.9771 24.2189 25.998 24.1704 26.0195C24.1499 26.0286 24.1293 26.0374 24.1089 26.0467C24.0497 26.0738 23.9911 26.1019 23.9332 26.1311C23.8989 26.1483 23.865 26.1664 23.8311 26.1843C23.8077 26.1967 23.7843 26.2092 23.7611 26.222C23.7359 26.2358 23.7103 26.2486 23.6853 26.2628H16.3147C16.2899 26.2487 16.2644 26.236 16.2393 26.2223C16.2157 26.2093 16.1919 26.1966 16.1681 26.1839C16.1345 26.1662 16.101 26.1483 16.0671 26.1313C16.0089 26.102 15.95 26.0737 15.8907 26.0464C15.8709 26.0374 15.851 26.0289 15.8311 26.0202C15.7816 25.9982 15.7317 25.977 15.6814 25.9564C15.661 25.9481 15.6408 25.9399 15.6204 25.9319C15.5528 25.9053 15.4849 25.8796 15.416 25.8558L14.5799 25.5663H25.4201ZM11.8267 30.9002C10.7206 29.7045 9.12939 28.8907 8.02876 28.3826C6.96134 27.8899 5.98978 27.1502 5.21923 26.2435L3.97977 24.785C3.26633 23.9455 2.73563 22.9874 2.40243 21.9373L1.14969 17.9894C1.1132 17.8744 1.16883 17.7955 1.20531 17.7586C1.24172 17.7218 1.32 17.6656 1.43531 17.7005C1.52727 17.7287 1.68914 17.8709 1.72883 17.9585L3.25829 21.3329C3.27922 21.3791 3.30626 21.4223 3.33868 21.4613L5.44899 24.0052C5.50063 24.0674 5.56493 24.1179 5.63767 24.1534L7.72525 25.1713L9.2351 27.1745C9.34697 27.3231 9.51752 27.4012 9.69017 27.4012C9.80947 27.4012 9.92978 27.3638 10.0324 27.2865C10.2835 27.0973 10.3335 26.7403 10.1443 26.4893L8.57759 24.4106L7.73806 22.8699C7.63642 22.6835 7.6983 22.4489 7.87869 22.336C8.0383 22.2363 8.25681 22.2702 8.39853 22.4168L11.5217 25.6474C11.5367 25.6627 11.5525 25.6772 11.5689 25.6908C11.5696 25.6913 11.5702 25.692 11.5709 25.6926C11.5757 25.6966 11.5812 25.6999 11.5862 25.7037C11.6342 25.7403 11.6874 25.7699 11.7448 25.7897L15.0436 26.9317C15.0467 26.9327 15.0496 26.934 15.0526 26.935C15.1292 26.9617 15.2048 26.991 15.2793 27.0219C15.3035 27.0319 15.3272 27.043 15.3512 27.0535C15.4064 27.0776 15.4613 27.1024 15.5153 27.1289C15.538 27.14 15.5606 27.1517 15.5832 27.1631C15.6425 27.1935 15.7012 27.225 15.7589 27.2581C15.7724 27.2658 15.7858 27.2734 15.7991 27.2811C16.803 27.8717 17.5425 28.8631 17.8032 30.0155L18.1864 34.1611H13.0195C13.0681 32.9652 12.6436 31.7832 11.8267 30.9002ZM18.9455 36.4803H12.341C12.2549 36.4803 12.1848 36.4101 12.1848 36.324V35.456C12.1848 35.3699 12.2549 35.2998 12.341 35.2998H12.3817H18.8107H18.9454C19.0316 35.2998 19.1017 35.37 19.1017 35.456V36.324C19.1017 36.4102 19.0317 36.4803 18.9455 36.4803ZM21.0663 29.875L20.6554 34.321C20.4192 34.4509 20.2289 34.6529 20.1114 34.8966C19.9575 34.5772 19.6776 34.3298 19.3354 34.2215L18.9336 29.875C18.9314 29.8519 18.9279 29.829 18.923 29.8063C18.7267 28.9047 18.2993 28.0795 17.7046 27.4013H22.2954C21.7007 28.0795 21.2733 28.9047 21.077 29.8063C21.072 29.829 21.0685 29.8519 21.0663 29.875ZM28.038 36.324C28.038 36.4102 27.9679 36.4803 27.8817 36.4803H21.2773C21.1911 36.4803 21.1211 36.4101 21.1211 36.324V35.456C21.1211 35.3699 21.1911 35.2998 21.2773 35.2998H27.6181H27.8818C27.9679 35.2998 28.038 35.37 28.038 35.456V36.324ZM38.8502 17.9894L37.5975 21.9373C37.2644 22.9874 36.7337 23.9455 36.0201 24.785L34.7807 26.2435C34.0101 27.1502 33.0387 27.8899 31.9712 28.3826C30.8705 28.8907 29.2792 29.7045 28.1732 30.9002C27.3563 31.7832 26.9318 32.9652 26.9804 34.1613H21.8135L22.1967 30.0156C22.4575 28.8631 23.1971 27.8717 24.2011 27.2811C24.2143 27.2735 24.2275 27.266 24.2407 27.2585C24.2986 27.2252 24.3576 27.1935 24.4172 27.163C24.4396 27.1516 24.4618 27.1402 24.4843 27.1292C24.5388 27.1024 24.5942 27.0774 24.65 27.053C24.6734 27.0428 24.6966 27.032 24.7202 27.0221C24.7979 26.9899 24.8765 26.9592 24.9565 26.9316L28.2553 25.7897C28.3105 25.7706 28.3617 25.7424 28.4083 25.7077C28.4329 25.6894 28.4568 25.6697 28.4783 25.6474L31.6015 22.4169C31.7433 22.2703 31.9618 22.2361 32.1212 22.336C32.3018 22.449 32.3637 22.6836 32.262 22.87L31.4233 24.4091L29.8555 26.4894C29.6663 26.7405 29.7165 27.0974 29.9675 27.2866C30.0701 27.364 30.1904 27.4013 30.3097 27.4013C30.4823 27.4013 30.6528 27.3231 30.7647 27.1746L32.2744 25.1716L34.3625 24.1534C34.4351 24.118 34.4994 24.0674 34.5512 24.0052L36.6615 21.4613C36.6939 21.4223 36.7209 21.3791 36.7419 21.333L38.2713 17.9585C38.311 17.8709 38.4728 17.7288 38.5648 17.7007C38.6801 17.6652 38.7584 17.7219 38.7948 17.7587C38.8311 17.7955 38.8867 17.8744 38.8502 17.9894Z"
                                                    fill="black" />
                                                <path
                                                    d="M33.3859 11.1096L20.4857 2.52829C20.1907 2.33188 19.8093 2.33188 19.5142 2.52829L6.614 11.1096C6.17822 11.3996 5.91806 11.8851 5.91814 12.4085C5.91814 12.9319 6.17829 13.4174 6.614 13.7071C6.87642 13.8817 7.1772 13.969 7.47798 13.969C7.77877 13.969 8.07955 13.8817 8.34189 13.7071L9.3433 13.041V15.8437C9.3433 16.1582 9.59814 16.413 9.9126 16.413C10.2271 16.413 10.4819 16.1582 10.4819 15.8437V12.2837L20 5.95228L29.518 12.2837V15.8494C29.518 16.1639 29.7729 16.4187 30.0873 16.4187C30.4017 16.4187 30.6566 16.1639 30.6566 15.8494V13.041L31.658 13.7071C32.1828 14.0564 32.8611 14.0564 33.3859 13.7071C33.8217 13.4173 34.0819 12.9318 34.0819 12.4085C34.0819 11.8851 33.8218 11.3995 33.3859 11.1096ZM32.7552 12.7593C32.6135 12.8536 32.4303 12.8536 32.2885 12.7593L20.4857 4.90798C20.2465 4.74868 19.9505 4.7186 19.6896 4.81767C19.6289 4.84079 19.57 4.87079 19.5141 4.90798L7.71142 12.7592C7.7115 12.7592 7.71134 12.7592 7.71142 12.7592C7.56962 12.8536 7.38642 12.8535 7.24462 12.7592C7.07501 12.6464 7.05665 12.4763 7.05665 12.4084C7.05665 12.3405 7.07494 12.1704 7.24462 12.0575L20 3.57259L32.7553 12.0575C32.925 12.1704 32.9433 12.3406 32.9433 12.4085C32.9433 12.4764 32.925 12.6464 32.7552 12.7593Z"
                                                    fill="#ED6E5A" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_301_12044">
                                                    <rect width="40" height="40" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="/property/search?category=land">Land</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="filter-item">
                            <div class="filter-content">
                                <div class="icon">
                                    <span>
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M31.3241 16.9595H27.7787C27.4643 16.9595 27.2094 17.2143 27.2094 17.5288C27.2094 17.8432 27.4643 18.0981 27.7787 18.0981H29.9512L25.2067 22.8426L23.9477 21.5832C23.8409 21.4765 23.6962 21.4165 23.5451 21.4165C23.3941 21.4165 23.2494 21.4765 23.1426 21.5832L19.2312 25.4947L17.3357 23.5991C17.229 23.4924 17.0841 23.4324 16.9332 23.4324C16.7823 23.4324 16.6374 23.4924 16.5307 23.5991L9.52241 30.6074C9.30007 30.8297 9.30007 31.1901 9.52241 31.4125C9.63358 31.5236 9.77921 31.5792 9.92491 31.5792C10.0706 31.5792 10.2163 31.5236 10.3274 31.4125L16.9332 24.8067L18.8287 26.7024C18.9354 26.8091 19.0802 26.8691 19.2312 26.8691C19.3821 26.8691 19.5269 26.8091 19.6337 26.7024L23.5451 22.7909L24.8042 24.0501C25.0265 24.2723 25.3869 24.2723 25.6093 24.0501L30.7548 18.9046V21.0883C30.7548 21.4028 31.0097 21.6576 31.3241 21.6576C31.6386 21.6576 31.8934 21.4028 31.8934 21.0883V17.5288C31.8934 17.2143 31.6386 16.9595 31.3241 16.9595Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M31.8785 32.1779H8.69072V16.15C8.69072 15.8357 8.43587 15.5808 8.12142 15.5808C7.80705 15.5808 7.55212 15.8357 7.55212 16.1501V32.7472C7.55212 33.0617 7.80697 33.3165 8.12142 33.3165H31.8785C32.193 33.3165 32.4478 33.0617 32.4478 32.7472C32.4478 32.4328 32.193 32.1779 31.8785 32.1779Z"
                                                fill="black" />
                                            <path
                                                d="M38.2736 34.7615H35.038V16.3669L36.8586 17.578C37.5283 18.0236 38.3935 18.0235 39.0632 17.5781C39.6191 17.2083 39.951 16.5888 39.951 15.921C39.951 15.2532 39.6191 14.6338 39.0632 14.264L34.6917 11.356C34.4299 11.1817 34.0766 11.2529 33.9025 11.5146C33.7283 11.7764 33.7994 12.1298 34.0611 12.3038L38.4326 15.2119C38.6741 15.3724 38.8125 15.6308 38.8125 15.9209C38.8125 16.211 38.6741 16.4694 38.4326 16.6301C38.146 16.8208 37.7758 16.8207 37.4892 16.6301L20.5598 5.36843C20.2197 5.14233 19.7802 5.14226 19.4402 5.36858L2.51078 16.6301C2.22422 16.8208 1.85391 16.8208 1.56734 16.6301C1.32586 16.4695 1.18742 16.2111 1.18742 15.921C1.18742 15.6309 1.32594 15.3725 1.56734 15.2119L20 2.95038L31.1169 10.3455C31.3786 10.5196 31.732 10.4485 31.9061 10.1869C32.0803 9.92507 32.0092 9.57171 31.7475 9.39765L20.5598 1.95522C20.2197 1.72913 19.7802 1.72905 19.4402 1.95538L13.9093 5.63452V5.14155H14.0737C14.4816 5.14155 14.8134 4.80968 14.8134 4.40187V2.67483C14.8134 2.26702 14.4815 1.93515 14.0737 1.93515H8.05148C7.64359 1.93515 7.3118 2.26702 7.3118 2.67483V4.40194C7.3118 4.80976 7.64359 5.14163 8.05148 5.14163H8.21586V9.42186L0.936797 14.264C0.380781 14.6338 0.0489062 15.2533 0.0489062 15.9211C0.0489062 16.5889 0.380859 17.2083 0.936797 17.5781C1.27164 17.8009 1.65531 17.9123 2.03914 17.9123C2.42281 17.9123 2.80664 17.8008 3.14141 17.5781L4.96195 16.3671V26.5174C4.96195 26.8319 5.2168 27.0867 5.53125 27.0867C5.84563 27.0867 6.10055 26.8319 6.10055 26.5174V15.6096L20 6.36351L33.8995 15.6096V34.7614H6.10047V30.0542C6.10047 29.7398 5.84563 29.485 5.53117 29.485C5.2168 29.485 4.96187 29.7398 4.96187 30.0542V34.7614H1.72641C0.774453 34.7615 0 35.5359 0 36.4879C0 37.4398 0.774453 38.2143 1.72641 38.2143H38.2736C39.2255 38.2143 40 37.4398 40 36.4879C40 35.5359 39.2255 34.7615 38.2736 34.7615ZM12.7708 6.39194L9.35437 8.66452V5.14163H12.7708V6.39194ZM8.45039 3.07366H13.6749V4.00312H8.45039V3.07366ZM38.2736 37.0758H1.72641C1.40227 37.0758 1.13852 36.812 1.13852 36.4879C1.13852 36.1637 1.40227 35.8999 1.72641 35.8999H38.2736C38.5977 35.8999 38.8615 36.1637 38.8615 36.4879C38.8615 36.812 38.5977 37.0758 38.2736 37.0758Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="/property/search?category=shophouse">Shophouse</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="filter-item">
                            <div class="filter-content">
                                <div class="icon">
                                    <span>
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.2206 11.4313C14.3279 11.4313 9.53394 16.2252 9.53394 22.1178C9.53394 28.0105 14.3279 32.8044 20.2206 32.8044C26.1131 32.8045 30.9071 28.0105 30.9071 22.1178C30.9071 16.2252 26.1131 11.4313 20.2206 11.4313ZM20.2205 31.6659C14.9556 31.6659 10.6724 27.3826 10.6724 22.1178C10.6724 16.853 14.9556 12.5698 20.2205 12.5698C25.4853 12.5698 29.7685 16.853 29.7685 22.1178C29.7685 27.3826 25.4853 31.6659 20.2205 31.6659Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M27.2576 19.9423C27.1492 19.6086 26.8527 19.3804 26.5023 19.3613L22.4649 19.1395L21.0066 15.3683C20.88 15.041 20.5715 14.8295 20.2205 14.8295C19.8697 14.8295 19.5611 15.041 19.4345 15.3683L17.9761 19.1395L13.9388 19.3613C13.5883 19.3805 13.2919 19.6086 13.1834 19.9423C13.075 20.276 13.1809 20.6348 13.453 20.8562L16.589 23.4087L15.5521 27.317C15.4622 27.6562 15.5876 28.0086 15.8714 28.2148C16.1552 28.4211 16.529 28.4313 16.824 28.2409L20.2205 26.0472L23.6171 28.241C23.7578 28.3318 23.9163 28.3769 24.0746 28.3769C24.2481 28.3769 24.4212 28.3226 24.5697 28.2148C24.8536 28.0085 24.9789 27.656 24.8888 27.3169L23.8521 23.4087L26.988 20.8563C27.2601 20.6348 27.366 20.276 27.2576 19.9423ZM22.9853 22.6462C22.7287 22.8548 22.6177 23.1962 22.7026 23.5159L23.5922 26.8696L20.6777 24.9872C20.4 24.8078 20.0411 24.8078 19.7632 24.9872L16.8487 26.8696L17.7384 23.516C17.8232 23.1962 17.7122 22.8548 17.4558 22.6463L14.7648 20.4561L18.229 20.2659C18.5593 20.2478 18.8498 20.0368 18.969 19.7284L20.2205 16.4924L21.4719 19.7287C21.5913 20.037 21.8819 20.2479 22.2117 20.2659L25.6761 20.4561L22.9853 22.6462Z"
                                                fill="#ED6E5A" />
                                            <path
                                                d="M38.2735 34.7614H35.0379V16.3669L36.8585 17.578C37.1934 17.8008 37.577 17.9121 37.9609 17.9121C38.3445 17.9121 38.7284 17.8007 39.0631 17.578C39.6191 17.2082 39.9509 16.5887 39.9509 15.9209C39.9509 15.2531 39.619 14.6337 39.0631 14.2639L34.5391 11.2545C34.2773 11.0802 33.9239 11.1513 33.7499 11.4131C33.5756 11.6748 33.6467 12.0282 33.9085 12.2023L38.4325 15.2118C38.674 15.3723 38.8124 15.6308 38.8124 15.9209C38.8124 16.2109 38.674 16.4694 38.4325 16.63C38.1459 16.8207 37.7756 16.8206 37.4891 16.63L20.5597 5.36846C20.2197 5.14252 19.7804 5.14236 19.4401 5.36861L2.51078 16.6302C2.22421 16.8209 1.85398 16.8207 1.56742 16.6301C1.32593 16.4695 1.1875 16.2111 1.1875 15.921C1.1875 15.6309 1.32593 15.3725 1.56742 15.2119L9.1003 10.2009L9.10045 10.2009L13.6554 7.17087C13.6557 7.17072 13.6558 7.17056 13.656 7.17048L20 2.95033L30.9061 10.2052C31.1679 10.3793 31.5213 10.3082 31.6953 10.0466C31.8695 9.78477 31.7985 9.43142 31.5367 9.25735L20.5597 1.95526C20.2197 1.72932 19.7804 1.72917 19.4401 1.95541L13.9093 5.63447V5.14158H14.0736C14.4815 5.14158 14.8134 4.80971 14.8134 4.40189V2.67479C14.8134 2.26698 14.4815 1.9351 14.0736 1.9351H8.05155C7.64366 1.9351 7.31178 2.26698 7.31178 2.67479V4.40189C7.31178 4.80971 7.64366 5.14158 8.05155 5.14158H8.21584V9.42181L0.936717 14.2639C0.38078 14.6337 0.0489062 15.2532 0.0489062 15.921C0.0489062 16.5888 0.380859 17.2082 0.936717 17.578C1.6064 18.0236 2.47164 18.0236 3.14132 17.578L4.96194 16.3669V26.5164C4.96194 26.8308 5.21679 27.0857 5.53124 27.0857C5.84569 27.0857 6.10053 26.8308 6.10053 26.5164V15.6096L20 6.36353L28.285 11.8748L33.8994 15.6096V34.7614H6.10046V30.0532C6.10046 29.7387 5.84561 29.4839 5.53116 29.4839C5.21671 29.4839 4.96187 29.7387 4.96187 30.0532V34.7614H1.7264C0.774452 34.7614 0 35.5359 0 36.4878C0 37.4398 0.774452 38.2142 1.7264 38.2142H38.2736C39.2256 38.2142 40 37.4398 40 36.4878C40 35.5359 39.2255 34.7614 38.2735 34.7614ZM12.7708 6.39181L9.35436 8.66446V5.14158H12.7708V6.39181ZM8.4503 3.07369H13.6749V4.00314H13.3401H8.78514H8.4503V3.07369ZM38.2735 37.0757H1.7264C1.40226 37.0757 1.13851 36.8119 1.13851 36.4878C1.13851 36.1635 1.40226 35.8998 1.7264 35.8998H38.2736C38.5977 35.8998 38.8615 36.1635 38.8615 36.4878C38.8614 36.812 38.5977 37.0757 38.2735 37.0757Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="/property/search?category=warehouse">Warehouse</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider icon area end -->

        <!-- featured area start -->
        <section class="bd-featured-area section-space">
            <div class="container">
                <div class="row g-5 section-title-space align-items-center justify-content-between">
                    <div class="col-xxl-7 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper anim-wrapper animation-style-3">
                            <span class="section-subtitle uppercase">
                                <i class="icon-home"></i>
                                featured
                            </span>
                            <h2 class="section-title title-animation">Discover our featured listings</h2>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6">
                        <div class="common-nav-pre">
                            <!-- If we need navigation buttons -->
                            <div class="common-navigation justify-content-lg-end justify-content-start">
                                <button class="common-slider-button-prev">
                                    <i class="fa-regular fa-arrow-left"></i>
                                </button>
                                <!-- If we need pagination -->
                                <div class="why-choos-pagination">
                                    <div class="bd-swiper-dot text-center"></div>
                                </div>
                                <button class="common-slider-button-next">
                                    <i class="fa-regular fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="swiper common-carousel-active wow bdFadeInUp" data-wow-delay=".3s"
                            data-wow-duration="1s">
                            <div class="swiper-wrapper">
                                @foreach ($featuredPropertys as $property)
                                    <div class="swiper-slide">
                                        <div class="featured-item style-one">
                                            <div class="thumb-wrapper">
                                                <div class="badge-wrap">
                                                    @if ($property->featured == 'Yes')
                                                        <a class="bd-badge">Featured</a>
                                                    @endif
                                                    <a class="bd-badge">{{ $property->property_status }}</a>
                                                    <a class="bd-badge">{{ $property->property_category }}</a>
                                                </div>
                                                @php
                                                    $filePaths = json_decode($property->image);
                                                @endphp
                                                <div class="thumb">
                                                    <a href="{{ route('property.detail', $property->property_id) }}">
                                                        <figure>
                                                            @foreach ($filePaths as $filePath)
                                                                <img src="{{ Storage::url($filePath) }}" alt="Image">
                                                                @php
                                                                    break;
                                                                @endphp
                                                            @endforeach
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="price">
                                                    <span>
                                                        Rp
                                                        {{ number_format((int) $property->property_price, 0, ',', '.') }}
                                                        {{ $property->property_status == 'For Rent' || $property->property_status == 'Rented Out' ? '/Mo' : '' }}
                                                    </span>
                                                </div>
                                                <h3 class="title">
                                                    <a
                                                        href="{{ route('property.detail', $property->property_id) }}">{{ $property->property_title }}</a>
                                                </h3>
                                                <span class="info">{{ $property->address }}</span>
                                                <div class="bd-meta">
                                                    @if ($property->beds != '-')
                                                        <div class="meta-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-bed-front"></i></span><span
                                                                class="title">{{ $property->beds }} bed</span>
                                                        </div>
                                                    @endif
                                                    @if ($property->baths != '-')
                                                        <div class="meta-item">
                                                            <span class="icon"><i
                                                                    class="fa-duotone fa-shower"></i></span><span
                                                                class="title">{{ $property->baths }} bath</span>
                                                        </div>
                                                    @endif
                                                    <div class="meta-item">
                                                        <span class="icon"><i
                                                                class="fa-regular fa-arrows-maximize"></i></span><span
                                                            class="title">{{ $property->lot_area }} m²</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- featured area end -->

        <!-- why choose us area start -->
        <section class="bd-whychoose-ara section-space theme-bg-primary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper anim-wrapper section-title-space text-center animation-style-3">
                            <span class="section-subtitle uppercase">
                                <i class="icon-home"></i>
                                Why choose us
                            </span>
                            <h2 class="section-title title-animation">Why choose SIPERANTARA</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="why-choose-item style-one wow bdFadeInUp" data-wow-delay=".3s"
                            data-wow-duration="1s">
                            <div class="icon">
                                <span><i class="icon-solution"></i></span>
                            </div>
                            <div class="content mb-75">
                                <h3 class="title">Top Listing
                                </h3>
                                <p class="description">We offer a wide range of properties tailored to your needs, from
                                    residential to commercial and industrial options.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="why-choose-item style-one wow bdFadeInUp" data-wow-delay=".5s"
                            data-wow-duration="1s">
                            <div class="icon">
                                <span><i class="icon-flexibility"></i></span>
                            </div>
                            <div class="content mb-25">
                                <h3 class="title">Transparency
                                </h3>
                                <p class="description">We prioritize a transparent buying and selling process. There’s no
                                    price or commission markup—you’re fully informed and involved in every step of the
                                    transaction.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="why-choose-item style-one wow bdFadeInUp" data-wow-delay=".7s"
                            data-wow-duration="1s">
                            <div class="icon">
                                <span><i class="icon-efficiency"></i></span>
                            </div>
                            <div class="content">
                                <h3 class="title">Professionalism
                                </h3>
                                <p class="description"> Whether you're entrusting us with your property or searching for
                                    one through us, we guarantee the highest standards of service that a property agency can
                                    provide. We prioritize ethics and always act in the best interest of our clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-4">
                        <div class="testimonials-info-wrapper">
                            <div class="testimonials-info-item">
                                <div class="content">
                                    <h2 class="title"><span data-purecounter-duration="1" data-purecounter-end="1200"
                                            class="purecounter">1200+</span>+</h2>
                                    <p class="description">Properties Sold</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-4">
                        <div class="testimonials-info-wrapper">
                            <div class="testimonials-info-item">
                                <div class="content">
                                    <h2 class="title"><span data-purecounter-duration="1" data-purecounter-end="1000"
                                            class="purecounter">1000+</span>+</h2>
                                    <p class="description">Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-4">
                        <div class="testimonials-info-wrapper">
                            <div class="testimonials-info-item">
                                <div class="content">
                                    <h2 class="title"><span data-purecounter-duration="1" data-purecounter-end="500"
                                            class="purecounter">500+</span>+</h2>
                                    <p class="description">Review</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- why choose us area end -->

        <!-- agent area start -->
        <div class="bd-team-area section-space fix">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xxl-4 col-xl-4">
                        <div class="team-content-inner d-flex flex-column justify-content-between h-100">
                            <div class="team-intro-content style-one">
                                <div class="section-title-wrapper anim-wrapper section-title-space animation-style-3">
                                    <span class="section-subtitle uppercase">
                                        <i class="icon-home"></i>
                                        Team members
                                    </span>
                                    <h2 class="section-title title-animation">Our skilled lead Siperantara agents</h2>
                                </div>
                                <a class="bd-half-outline-btn" href="/agent/join"><span class="text">Join Us</span></a>
                            </div>
                            <div class="pagination-wrapper">
                                <div class="common-nav-pre">
                                    <!-- If we need navigation buttons -->
                                    <div class="common-navigation justify-content-start">
                                        <button class="common-slider-button-prev"><i
                                                class="fa-regular fa-arrow-left"></i></button>
                                        <!-- If we need pagination -->
                                        <div class="team-pagination">
                                            <div class="team-slider-dot text-center"></div>
                                        </div>
                                        <button class="common-slider-button-next"><i
                                                class="fa-regular fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8">
                        <div class="team-slider-inner wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="swiper team-slider-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="team-item style-two">
                                            <div class="thumb">
                                                <figure><img src="{{ asset('assets/images/agent/agent-01.png') }}"
                                                        alt="Image">
                                                </figure>
                                            </div>
                                            <div class="content-inner">
                                                <div class="content">
                                                    <h3 class="title">Sarah Johnson
                                                    </h3>
                                                    <span class="info">Siperantara Agent</span>
                                                </div>
                                                <div class="team-social">
                                                    <ul>
                                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item style-two">
                                            <div class="thumb">
                                                <figure><a href="agent-details.html"><img
                                                            src="{{ asset('assets/images/agent/agent-02.png') }}"
                                                            alt="Image"></a>
                                                </figure>
                                            </div>
                                            <div class="content-inner">
                                                <div class="content">
                                                    <h3 class="title"><a href="agent-details.html">Todd C. Rivera</a>
                                                    </h3>
                                                    <span class="info">Real Estate Advisors</span>
                                                </div>
                                                <div class="team-social">
                                                    <ul>
                                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item style-two">
                                            <div class="thumb">
                                                <figure><a href="agent-details.html"><img
                                                            src="{{ asset('assets/images/agent/agent-05.png') }}"
                                                            alt="Image"></a>
                                                </figure>
                                            </div>
                                            <div class="content-inner">
                                                <div class="content">
                                                    <h3 class="title"><a href="agent-details.html">Melvin K. Thorne</a>
                                                    </h3>
                                                    <span class="info">Pinnacle Real Estate</span>
                                                </div>
                                                <div class="team-social">
                                                    <ul>
                                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item style-two">
                                            <div class="thumb">
                                                <figure><a href="agent-details.html"><img
                                                            src="{{ asset('assets/images/agent/agent-04.png') }}"
                                                            alt="Image"></a>
                                                </figure>
                                            </div>
                                            <div class="content-inner">
                                                <div class="content">
                                                    <h3 class="title"><a href="agent-details.html">Burt M. Guthrie</a>
                                                    </h3>
                                                    <span class="info">Found Property Group</span>
                                                </div>
                                                <div class="team-social">
                                                    <ul>
                                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- agent area end -->

        <!-- video area start -->
        <div class="bd-video-area style-one position-relative jarallax">
            <div class="video-bg-thumb include-bg jarallax-img"
                data-background="{{ asset('assets/images/bg/video-bg-home-01.png') }}">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="video-content text-center">
                            <div class="video-play">
                                <a href="https://www.youtube.com/watch?v=go7QYaQR494" class="bd-play-btn popup-video"><i
                                        class="fa-duotone fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video area end -->

    </main>
    <!-- Body main wrapper end -->
@endsection
