@extends('guest.layouts.app')

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
                                    <h1 class="bd-breadcrumb-title">Development</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="/"><i class="icon-home"></i>Home</a></span>
                                        <span><a href="/property">Property</a></span>
                                        <span>Development</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area end -->


        <!-- development area start -->
        <section class="bd-about-area section-space p-relative">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-5">
                        <div class="about-content style-one">
                            <div class="section-title-wrapper anim-wrapper animation-style-3 mb-20">
                                <span class="section-subtitle uppercase" style="line-height: 2">
                                    <i class="icon-home"></i>
                                    PT. BUMI KARYA MENTARI
                                </span>
                                <h2 class="section-title title-animation" id="main-title" style="line-height: 0.6"><span style="font-family: 'tangerine', sans-serif; color: #0A2735;">Cluster Garuda</span><br><span style="font-size: 20px">at <span style="color: #C1953A ;">Mentari Village</span></span></h2>
                            </div>
                            <div class="about-tab">
                                <div class="bd-tab">
                                    {{-- <ul class="nav nav-tabs" id="myTab1" role="tablist">
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
                                    </ul> --}}
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="townville-tab-pane" role="tabpanel"
                                            aria-labelledby="townville-tab" tabindex="0">
                                            <div class="about-tab-contnent">
                                                <p class="description">Cluster Garuda di Mentari Village, Balikpapan, 
                                                    adalah pilihan hunian premium yang terjangkau untuk keluarga modern. 
                                                    Dirancang dengan arsitektur elegan dan layout fungsional, setiap unit 
                                                    menawarkan spesifikasi premium, termasuk bahan bangunan berkualitas 
                                                    dan solusi hemat energi. Cluster eksklusif ini menghadirkan kenyamanan 
                                                    dan keanggunan, menciptakan gaya hidup terbaik di komunitas yang berkembang.</p>
                                                <a href="{{ route('detail-new-develop') }}" class="bd-animated-btn style-two mt-20">
                                                    <svg viewBox="0 0 24 24" class="arrow-right" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                                                        </path>
                                                    </svg>
                                                    <span class="bd-animated-btn-text">Explore More</span>
                                                    <span class="bd-animated-btn-circle"></span>
                                                    <svg viewBox="0 0 24 24" class="arrow-left" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        {{-- <div class="tab-pane fade" id="nordville-tab-pane" role="tabpanel"
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
                                        </div> --}}
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
                                    <img id="main-image" src="{{ asset('assets/images/development/cluster-garuda/garuda-1.png') }}" alt="image">
                                </figure>
                            </div>
                            <div class="thumb-two-inner">
                                <div class="thumb-two">
                                    <figure>
                                        <img id="image-two" src="{{ asset('assets/images/development/cluster-garuda/garuda-2.png') }}" alt="image">
                                    </figure>
                                </div>
                                <div class="thumb-two">
                                    <figure>
                                        <img id="image-three"
                                            src="{{ asset('assets/images/development/cluster-garuda/garuda-3.png') }}" alt="image">
                                    </figure>
                                </div>
                            </div>
                            {{-- documentation js --}}
                            {{-- <div class="thumb-one">
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- development area end -->
    </main>
@endsection
