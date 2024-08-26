@extends('guest.layouts.app')
@section('content')
    <main>

        <!-- Breadcrumb area start -->
        <section class="bd-breadcrumb-area p-relative fix">
            <!-- breadcrumb background image -->
            <div class="bd-breadcrumb-bg" data-background="{{ asset('assets/images/breadcrumb/breadcrumb-thumb-01.png') }}"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Agent</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="/"><i class="icon-home"></i>Home</a></span>
                                        <span>Agent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area end -->

        <!-- Agent area Start -->
        <section class="bd-agent-area section-space">
            <div class="container">
                <div class="agent-tab-item">
                    <div class="row">
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel"
                                aria-labelledby="grid-tab" tabindex="0">
                                <div class="row gy-30">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".3s"
                                            data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <figure><img src="{{ asset('assets/images/agent/agent-01.png') }}"
                                                            alt="agent thumb not found"></figure>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title">Sarah John</h3>
                                                    </div>
                                                    <span class="info underline">Company Agent at
                                                        Siperantara
                                                    </span>
                                                </div>
                                                <div class="contact-list-wrapper">
                                                    <ul>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                                                <a target="_blank" href="https://www.google.com/maps">27
                                                                    Division St, NY
                                                                    10002,
                                                                    USA</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                                                <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-phone-volume"></i></span>
                                                            <span class="title">
                                                                <a href="tel:+1(800)123456789">+00 (123) 456 889</a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bottom">
                                                    <div class="agent-social-wrapper">
                                                        <div class="bd-social">
                                                            <ul>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-instagram"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".4s"
                                            data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <a href="agent-details.html">
                                                        <figure><img src="assets/images/agent/agent-02.png"
                                                                alt="agent thumb not found"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><a href="agent-details.html">Britany Watkn</a>
                                                        </h3>
                                                        <div class="bd-rating">
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="info underline">Company Agent at
                                                        <a href="agent-details.html">Modern House Real Estate</a>
                                                    </span>
                                                </div>
                                                <div class="contact-list-wrapper">
                                                    <ul>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                                                <a target="_blank" href="https://www.google.com/maps">27
                                                                    Division St, NY
                                                                    10002,
                                                                    USA</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                                                <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-phone-volume"></i></span>
                                                            <span class="title">
                                                                <a href="tel:+1(800)123456789">+00 (123) 456 889</a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bottom">
                                                    <div class="agent-social-wrapper">
                                                        <div class="bd-social">
                                                            <ul>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-x-twitter"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-youtube"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="agent-text-link underline">
                                                        <a href="agent-details.html">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".5s"
                                            data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <a href="agent-details.html">
                                                        <figure><img src="assets/images/agent/agent-03.png"
                                                                alt="agent thumb not found"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><a href="agent-details.html">Vient Fuller</a>
                                                        </h3>
                                                        <div class="bd-rating">
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="info underline">Company Agent at
                                                        <a href="agent-details.html">Modern House Real Estate</a>
                                                    </span>
                                                </div>
                                                <div class="contact-list-wrapper">
                                                    <ul>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                                                <a target="_blank" href="https://www.google.com/maps">27
                                                                    Division St, NY
                                                                    10002,
                                                                    USA</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                                                <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-phone-volume"></i></span>
                                                            <span class="title">
                                                                <a href="tel:+1(800)123456789">+00 (123) 456 889</a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bottom">
                                                    <div class="agent-social-wrapper">
                                                        <div class="bd-social">
                                                            <ul>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-x-twitter"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-youtube"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="agent-text-link underline">
                                                        <a href="agent-details.html">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".6s"
                                            data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <a href="agent-details.html">
                                                        <figure><img src="assets/images/agent/agent-04.png"
                                                                alt="agent thumb not found"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><a href="agent-details.html">Samuel Paler</a>
                                                        </h3>
                                                        <div class="bd-rating">
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="info underline">Company Agent at
                                                        <a href="agent-details.html">Modern House Real Estate</a>
                                                    </span>
                                                </div>
                                                <div class="contact-list-wrapper">
                                                    <ul>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                                                <a target="_blank" href="https://www.google.com/maps">27
                                                                    Division St, NY
                                                                    10002,
                                                                    USA</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                                                <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-phone-volume"></i></span>
                                                            <span class="title">
                                                                <a href="tel:+1(800)123456789">+00 (123) 456 889</a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bottom">
                                                    <div class="agent-social-wrapper">
                                                        <div class="bd-social">
                                                            <ul>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-x-twitter"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-youtube"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="agent-text-link underline">
                                                        <a href="agent-details.html">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".7s"
                                            data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <a href="agent-details.html">
                                                        <figure><img src="assets/images/agent/agent-05.png"
                                                                alt="agent thumb not found"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><a href="agent-details.html">Chris Matial</a>
                                                        </h3>
                                                        <div class="bd-rating">
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="info underline">Company Agent at
                                                        <a href="agent-details.html">Modern House Real Estate</a>
                                                    </span>
                                                </div>
                                                <div class="contact-list-wrapper">
                                                    <ul>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                                                <a target="_blank" href="https://www.google.com/maps">27
                                                                    Division St, NY
                                                                    10002,
                                                                    USA</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                                                <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-phone-volume"></i></span>
                                                            <span class="title">
                                                                <a href="tel:+1(800)123456789">+00 (123) 456 889</a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bottom">
                                                    <div class="agent-social-wrapper">
                                                        <div class="bd-social">
                                                            <ul>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-x-twitter"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-youtube"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="agent-text-link underline">
                                                        <a href="agent-details.html">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".8s"
                                            data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <a href="agent-details.html">
                                                        <figure><img src="assets/images/agent/agent-06.png"
                                                                alt="agent thumb not found"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><a href="agent-details.html">Mariusz Celsa</a>
                                                        </h3>
                                                        <div class="bd-rating">
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="info underline">Company Agent at
                                                        <a href="agent-details.html">Modern House Real Estate</a>
                                                    </span>
                                                </div>
                                                <div class="contact-list-wrapper">
                                                    <ul>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                                                <a target="_blank" href="https://www.google.com/maps">27
                                                                    Division St, NY
                                                                    10002,
                                                                    USA</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                                                <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i
                                                                    class="fa-regular fa-phone-volume"></i></span>
                                                            <span class="title">
                                                                <a href="tel:+1(800)123456789">+00 (123) 456 889</a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bottom">
                                                    <div class="agent-social-wrapper">
                                                        <div class="bd-social">
                                                            <ul>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-x-twitter"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="fa-brands fa-youtube"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="agent-text-link underline">
                                                        <a href="agent-details.html">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="infinite-pagination d-none">
                        <a href="shop.html" class="infinite-next-link">Next</a>
                    </div>
                    <div class="pagination__wrapper mt-50">
                        <div class="basic-pagination">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa-regular fa-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a class="current" href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Agent area end -->

    </main>
@endsection
