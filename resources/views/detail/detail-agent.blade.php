@extends("layouts.app")
@section("content")
<main>

    <!-- Breadcrumb area start -->
    <section class="bd-breadcrumb-area p-relative fix">
        <!-- breadcrumb background image -->
        <div class="bd-breadcrumb-bg" data-background="assets/images/breadcrumb/breadcrumb-thumb-01.png"></div>
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
            <div class="agent-tab-option">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="bd-property-top-left d-flex align-items-center">
                            <div class="bd-property-top-tab bd-tab">
                                <ul class="nav nav-tabs" id="productTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid-tab-pane" type="button" role="tab" aria-controls="grid-tab-pane" aria-selected="true">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.3327 6.01341V2.98675C16.3327 2.04675 15.906 1.66675 14.846 1.66675H12.1527C11.0927 1.66675 10.666 2.04675 10.666 2.98675V6.00675C10.666 6.95341 11.0927 7.32675 12.1527 7.32675H14.846C15.906 7.33341 16.3327 6.95341 16.3327 6.01341Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.3327 15.18V12.4867C16.3327 11.4267 15.906 11 14.846 11H12.1527C11.0927 11 10.666 11.4267 10.666 12.4867V15.18C10.666 16.24 11.0927 16.6667 12.1527 16.6667H14.846C15.906 16.6667 16.3327 16.24 16.3327 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.33268 6.01341V2.98675C7.33268 2.04675 6.90602 1.66675 5.84602 1.66675H3.15268C2.09268 1.66675 1.66602 2.04675 1.66602 2.98675V6.00675C1.66602 6.95341 2.09268 7.32675 3.15268 7.32675H5.84602C6.90602 7.33341 7.33268 6.95341 7.33268 6.01341Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.33268 15.18V12.4867C7.33268 11.4267 6.90602 11 5.84602 11H3.15268C2.09268 11 1.66602 11.4267 1.66602 12.4867V15.18C1.66602 16.24 2.09268 16.6667 3.15268 16.6667H5.84602C6.90602 16.6667 7.33268 16.24 7.33268 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list-tab-pane" type="button" role="tab" aria-controls="list-tab-pane" aria-selected="false">
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 7.11108H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15 13.2222H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="bd-property-top-right">
                            <div class="bd-property-top-result">
                                <p>Showing results</p>
                            </div>
                            <div class="bd-property-top-select">
                                <select>
                                    <option>Default Sorting</option>
                                    <option>Low to Hight</option>
                                    <option>High to Low</option>
                                    <option>New Added</option>
                                    <option>On Sale</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="agent-tab-item">
                <div class="row">
                    <div class="tab-content" id="productTabContent">
                        <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel" aria-labelledby="grid-tab" tabindex="0">
                            <div class="row gy-30">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="thumb-wrapper">
                                            <div class="thumb">

                                                    <figure><img src="assets/images/agent/agent-01.png" alt="agent thumb not found"></figure>

                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="top">
                                                <div class="review">
                                                    <h3 class="title">Sarah John</h3>
                                                    <div class="bd-rating">
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                    </div>
                                                </div>
                                                <span class="info underline">Company Agent at
                                      Siperantara
                                   </span>
                                            </div>
                                            <div class="contact-list-wrapper">
                                                <ul>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                        <span class="title">
                                            <a target="_blank" href="https://www.google.com/maps">27 Division St, NY
                                               10002,
                                               USA</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                        <span class="title">
                                            <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                                        <div class="thumb-wrapper">
                                            <div class="thumb">
                                                <a href="agent-details.html">
                                                    <figure><img src="assets/images/agent/agent-02.png" alt="agent thumb not found"></figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="top">
                                                <div class="review">
                                                    <h3 class="title"><a href="agent-details.html">Britany Watkn</a> </h3>
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
                                                        <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                        <span class="title">
                                            <a target="_blank" href="https://www.google.com/maps">27 Division St, NY
                                               10002,
                                               USA</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                        <span class="title">
                                            <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
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
                                    <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <div class="thumb-wrapper">
                                            <div class="thumb">
                                                <a href="agent-details.html">
                                                    <figure><img src="assets/images/agent/agent-03.png" alt="agent thumb not found"></figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="top">
                                                <div class="review">
                                                    <h3 class="title"><a href="agent-details.html">Vient Fuller</a></h3>
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
                                                        <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                        <span class="title">
                                            <a target="_blank" href="https://www.google.com/maps">27 Division St, NY
                                               10002,
                                               USA</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                        <span class="title">
                                            <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
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
                                    <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                                        <div class="thumb-wrapper">
                                            <div class="thumb">
                                                <a href="agent-details.html">
                                                    <figure><img src="assets/images/agent/agent-04.png" alt="agent thumb not found"></figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="top">
                                                <div class="review">
                                                    <h3 class="title"><a href="agent-details.html">Samuel Paler</a></h3>
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
                                                        <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                        <span class="title">
                                            <a target="_blank" href="https://www.google.com/maps">27 Division St, NY
                                               10002,
                                               USA</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                        <span class="title">
                                            <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
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
                                    <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <div class="thumb-wrapper">
                                            <div class="thumb">
                                                <a href="agent-details.html">
                                                    <figure><img src="assets/images/agent/agent-05.png" alt="agent thumb not found"></figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="top">
                                                <div class="review">
                                                    <h3 class="title"><a href="agent-details.html">Chris Matial</a></h3>
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
                                                        <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                        <span class="title">
                                            <a target="_blank" href="https://www.google.com/maps">27 Division St, NY
                                               10002,
                                               USA</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                        <span class="title">
                                            <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
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
                                    <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
                                        <div class="thumb-wrapper">
                                            <div class="thumb">
                                                <a href="agent-details.html">
                                                    <figure><img src="assets/images/agent/agent-06.png" alt="agent thumb not found"></figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="top">
                                                <div class="review">
                                                    <h3 class="title"><a href="agent-details.html">Mariusz Celsa</a></h3>
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
                                                        <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                        <span class="title">
                                            <a target="_blank" href="https://www.google.com/maps">27 Division St, NY
                                               10002,
                                               USA</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                        <span class="title">
                                            <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                         </span>
                                                    </li>
                                                    <li class="contact-list-item">
                                                        <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
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
                        <div class="tab-pane fade" id="list-tab-pane" role="tabpanel" aria-labelledby="list-tab" tabindex="0">
                            <div class="bd-property-list-wrapper bd-property-item-primary">
                                <div class="row gy-30 justify-content-center">
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="agent-item style-two" data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <a href="agent-details.html">
                                                        <figure><img src="assets/images/agent/agent-01.png" alt="agent thumb not found"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><a href="agent-details.html">Sarah Johnson</a></h3>
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
                                                            <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                               <a target="_blank" href="https://www.google.com/maps">27 Division St,
                                                  NY 10002,
                                                  USA</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                               <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
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
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="agent-item style-two" data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <a href="agent-details.html">
                                                        <figure><img src="assets/images/agent/agent-02.png" alt="agent thumb not found"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><a href="agent-details.html">Brittany Watkins</a></h3>
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
                                                            <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                               <a target="_blank" href="https://www.google.com/maps">27 Division St,
                                                  NY 10002,
                                                  USA</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                               <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
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
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="agent-item style-two" data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <a href="agent-details.html">
                                                        <figure><img src="assets/images/agent/agent-03.png" alt="agent thumb not found"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><a href="agent-details.html">Vincent Fuller</a></h3>
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
                                                            <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                               <a target="_blank" href="https://www.google.com/maps">27 Division St,
                                                  NY 10002,
                                                  USA</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                               <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
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
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="agent-item style-two" data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <a href="agent-details.html">
                                                        <figure><img src="assets/images/agent/agent-04.png" alt="agent thumb not found"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><a href="agent-details.html">Samuel Palmer</a></h3>
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
                                                            <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                               <a target="_blank" href="https://www.google.com/maps">27 Division St,
                                                  NY 10002,
                                                  USA</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                               <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
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
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="agent-item style-two" data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <a href="agent-details.html">
                                                        <figure><img src="assets/images/agent/agent-05.png" alt="agent thumb not found"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><a href="agent-details.html">Chris Matial</a></h3>
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
                                                            <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                               <a target="_blank" href="https://www.google.com/maps">27 Division St,
                                                  NY 10002,
                                                  USA</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                               <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
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
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="agent-item style-two" data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <a href="agent-details.html">
                                                        <figure><img src="assets/images/agent/agent-06.png" alt="agent thumb not found"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><a href="agent-details.html">Mariusz Celsa</a></h3>
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
                                                            <span class="icon"><i class="fa-regular fa-location-dot"></i></span>
                                                            <span class="title">
                                               <a target="_blank" href="https://www.google.com/maps">27 Division St,
                                                  NY 10002,
                                                  USA</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                            <span class="title">
                                               <a href="mailto:reallow@mail.com">reallow@mail.com</a>
                                            </span>
                                                        </li>
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
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
                                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
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
