@extends('layouts.app')
@section('content')
    <main>
        <!-- Breadcrumb area start -->
        <section class="bd-breadcrumb-area p-relative fix">
            <!-- breadcrumb background image -->
            <div class="bd-breadcrumb-bg" data-background="{{ asset('assets/images/breadcrumb/breadcrumb-thumb-01.png') }}">
            </div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Guide</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="/"><i class="icon-home"></i>Home</a></span>
                                        <span>Guide</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area end -->

        <section class="bd-services-item section-space theme-bg-primary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper anim-wrapper section-title-space text-center animation-style-3">

                            <h2 class="section-title title-animation">Informational Guide</h2>
                        </div>

                    </div>
                </div>
                <div class="row g-5 justify-content-between justify-content-md-center">

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            {{-- <span class="icon"><i class="icon-rent-property"></i></span> --}}
                            <div class="content mb-55">
                                <h3 class="title">
                                    <a href="/guide/buyers">Buyer's Guide</a>
                                </h3>
                                <p class="description">Before you start your journey to owning your dream property, download our buyer's guide for a complete overview of the process from start to finish.

                                </p>
                            </div>
                            <div class="btn-inner">
                                <a class="bd-half-outline-btn" href="/guide/buyers"><span class="text">Read
                                        more</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            {{-- <span class="icon"><i class="icon-buy-home"></i></span> --}}
                            <div class="content">
                                <h3 class="title">
                                    <a href="/guide/seller">Seller Guide</a>
                                </h3>
                                <p class="description">To ensure your property sale is effective and delivers the best results, download our seller's guide for a step-by-step plan to successfully market or sell your property.</p>
                            </div>
                            <div class="btn-inner">
                                <a class="bd-half-outline-btn" href="/guide/seller"><span class="text">Read
                                        more</span></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            {{-- <span class="icon"><i class="icon-sell-property"></i></span> --}}
                            <div class="content mb-80">
                                <h3 class="title">
                                    <a href="/blog">Blog</a>
                                </h3>
                                <p class="description">With years of industry experience, our team boasts an in depth
                                    understanding of the market knowledge.</p>
                            </div>
                            <div class="btn-inner">
                                <a class="bd-half-outline-btn" href="/blog"><span class="text">Read
                                        more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
