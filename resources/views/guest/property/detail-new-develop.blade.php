@extends('guest.layouts.app')
@section('content')
    <main>
        <!-- Breadcrumb area start -->
        <section class="bd-breadcrumb-area p-relative fix">
            <!-- breadcrumb background image -->
            <div class="bd-breadcrumb-bg-new-develop" data-background="{{ asset('assets/images/breadcrumb/mentari-village/cluster-garuda.jpg') }}"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb">
                                <div class="bd-breadcrumb-content text-center">
                                    {{-- <h1 class="bd-breadcrumb-title">Mentari Village</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="index.html"><i class="icon-home"></i>Home</a></span>
                                        <span>New Development</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area end -->

        <!-- property details content start -->
        <section class="bd-property-details-area section-space-medium">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-8 col-lg-8">
                        <div class="property-details-content-inner">
                            <h2 class="property-details-title has-max-width"><span style="font-family: 'tangerine', sans-serif; color: #0A2735;">Cluster Garuda</span></h2>
                            <span class="property-details-location">
                                <i class="fa-regular fa-location-dot"></i>
                                KM 21, Karang Joang, Kec. Balikpapan Utara
                            </span>
                            <h4 class="property-details-title-two">Description</h4>
                            <div class="property-details-descrip-text">
                                <p>Memperkenalkan Cluster Garuda, pengembangan terbaru di
                                    Mentari Village, yang dirancang khusus untuk memenuhi
                                    permintaan perumahan yang semakin meningkat di Balikpapan
                                    dengan harga yang tetap terjangkau. Cluster eksklusif ini
                                    disesuaikan untuk keluarga modern yang mencari hunian
                                    premium tanpa mengorbankan anggaran. Cluster Garuda menawarkan berbagai pilihan rumah
                                    yang
                                    dirancang dengan teliti, menyuguhkan arsitektur modern yang
                                    elegan serta layout yang memaksimalkan kenyamanan dan
                                    fungsionalitas. Setiap unit di Garuda Cluster dilengkapi dengan
                                    spesifikasi premium, termasuk bahan bangunan berkualitas
                                    tinggi, perlengkapan modern, dan solusi hemat energi.
                                    Cluster Garuda adalah solusi sempurna bagi mereka yang ingin
                                    merasakan gaya hidup terbaik di komunitas yang berkembang.
                                    Dengan memadukan kenyamanan, keanggunan, dan
                                    kepraktisan yang sempurna, Cluster ini menghadirkan
                                    pengalaman hunian yang tak tertandingi di Balikpapan.</p>
                            </div>
                            <div class="counter-wrapper style-two">
                                <div class="counter-item wow bdFadeInUp" data-wow-delay=".3s"
                                    data-wow-duration="1s">
                                    <span class="icon"><i class="icon-buy-house"></i></span>
                                    <div class="content">
                                        <p class="description">Harga Mulai</p>
                                        <h2 class="title"><span data-purecounter-duration="1"
                                                data-purecounter-end="300" class="purecounter">300</span>
                                        </h2>
                                        <p class="description">Juta-an</p>
                                    </div>
                                    <div class="apartment-counter-divider"></div>
                                </div>
                                <div class="apartment-counter-divider"></div>
                                <div class="counter-item wow bdFadeInUp" data-wow-delay=".5s"
                                    data-wow-duration="1s">
                                    <span class="icon"><i class="icon-buyers"></i></span>
                                    <div class="content">
                                        <p class="description">DP</p>
                                        <h2 class="title"><span data-purecounter-duration="1"
                                                data-purecounter-end="0" class="purecounter">0%</span>%
                                        </h2>
                                    </div>
                                </div>
                                <div class="apartment-counter-divider"></div>
                                <div class="counter-item wow bdFadeInUp" data-wow-delay=".7s"
                                    data-wow-duration="1s">
                                    <span class="icon"><i class="icon-efficiency"></i></span>
                                    <div class="content">
                                        <p class="description">Cicilan</p>
                                        <h2 class="title"><span data-purecounter-duration="1"
                                            data-purecounter-end="2" class="purecounter">2 Juta-an</span>
                                        </h2>
                                        <p class="description">Juta-an</p>
                                    </div>
                                </div>
                                <div class="apartment-counter-top-line"></div>
                                <div class="apartment-counter-bottom-line"></div>
                            </div>
                            {{-- <div class="property-details-btn">
                                <a href="contact.html" class="bd-btn btn-style btn-hover-x hover-black">
                                    Download Flyer
                                </a>
                            </div> --}}
                            <h4 class="property-details-title-two mt-40">Type Unit (LB/LT)</h4>
                            <div class="property-details-feature wow bdFadeInUp" data-wow-delay=".3s"
                                data-wow-duration="1s">
                                <ul class="mb-30">
                                    <li>
                                        <div class="property-details-feature-list-item">
                                            <span class="icon"><i class="icon-villa"></i></span>
                                            <div>
                                                <h6>STD</h6>
                                                <span class="descrip">30/60 sq meter</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property-details-feature-list-item">
                                            <span class="icon"><i class="icon-villa"></i></span>
                                            <div>
                                                <h6>Hook</h6>
                                                <span class="descrip">30/82 sq meter</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property-details-feature-list-item">
                                            <span class="icon"><i class="icon-villa"></i></span>
                                            <div>
                                                <h6>Hook</h6>
                                                <span class="descrip">30/119 sq meter</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property-details-feature-list-item">
                                            <span class="icon"><i class="icon-villa"></i></span>
                                            <div>
                                                <h6>Hook</h6>
                                                <span class="descrip">30/127 sq meter</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <div class="property-details-feature-list-item">
                                            <span class="icon"><i class="icon-villa"></i></span>
                                            <div>
                                                <h6>ROW</h6>
                                                <span class="descrip">30/60 sq meter</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property-details-feature-list-item">
                                            <span class="icon"><i class="icon-villa"></i></span>
                                            <div>
                                                <h6>Taman</h6>
                                                <span class="descrip">30/60 sq meter</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="property-details-title-two">Gallery</h4>
                            <div class="property-details-gallery wow bdFadeInUp" data-wow-delay=".3s"
                                data-wow-duration="1s">
                                    <div class="row g-5">
                                        <div class="col-12">
                                            <div class="property-details-wrapper">
                                                <div class="swiper property-details-active" style="overflow: hidden;">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class=" property-details-item">
                                                                <div class="new-develop-details-item-thumb">
                                                                    <img src="{{ asset('assets/images/gallery/mentari-village/cluster-garuda/cluster-garuda-01.jpg') }}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class=" property-details-item">
                                                                <div class="new-develop-details-item-thumb">
                                                                    <img src="{{ asset('assets/images/gallery/mentari-village/cluster-garuda/cluster-garuda-02.jpg') }}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class=" property-details-item">
                                                                <div class="new-develop-details-item-thumb">
                                                                    <img src="{{ asset('assets/images/gallery/mentari-village/cluster-garuda/cluster-garuda-03.jpg') }}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class=" property-details-item">
                                                                <div class="new-develop-details-item-thumb">
                                                                    <img src="{{ asset('assets/images/gallery/mentari-village/cluster-garuda/cluster-garuda-04.jpg') }}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class=" property-details-item">
                                                                <div class="new-develop-details-item-thumb">
                                                                    <img src="{{ asset('assets/images/gallery/mentari-village/cluster-garuda/cluster-garuda-05.jpg') }}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class=" property-details-item">
                                                                <div class="new-develop-details-item-thumb">
                                                                    <img src="{{ asset('assets/images/gallery/mentari-village/cluster-garuda/cluster-garuda-06.jpg') }}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class=" property-details-item">
                                                                <div class="new-develop-details-item-thumb">
                                                                    <img src="{{ asset('assets/images/gallery/mentari-village/cluster-garuda/cluster-garuda-07.jpg') }}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- If we need navigation buttons -->
                                                    <div class="property-details-navigation d-none d-sm-block">
                                                        <button class="property-details-button-prev circle-btn is-bg-white"><i
                                                    class="fa-regular fa-arrow-left-long"></i></button>
                                                        <button class="property-details-button-next circle-btn is-bg-white"><i
                                                    class="fa-regular fa-arrow-right-long"></i></button>
                                                    </div>
                                                    <!-- If we need pagination -->
                                                    <div class="pagination-wrapper d-block d-sm-none">
                                                        <div class="bd-swiper-dot text-center"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <div class="property-details-gallery-thumb">
                                                <img src="{{ asset('assets/images/gallery/mentari-village/cluster-garuda/map.png') }}"
                                                    alt="image not found">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-6">
                                            <div class="property-details-gallery-thumb mb-30">
                                                <img src="{{ asset('assets/images/gallery/property-details-gallery-02.png') }}"
                                                    alt="image not found">
                                            </div>
                                            <div class="property-details-gallery-thumb">
                                                <img src="{{ asset('assets/images/gallery/property-details-gallery-03.png') }}"
                                                    alt="image not found">
                                            </div>
                                        </div> --}}
                                    </div>
                            </div>
                            <h4 class="property-details-title-two"> Fasilitas </h4>
                            <div class="property-details-benefits wow bdFadeInUp" data-wow-delay=".3s"
                                data-wow-duration="1s">
                                <div class="property-details-benefits-list">
                                    <ul>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Sarana Ibadah
                                        </li>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Eco Wisata 5Ha
                                        </li>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Jogging Track
                                        </li>
                                    </ul>
                                </div>
                                <div class="property-details-benefits-list">
                                    <ul>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            ATM
                                        </li>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Kawasan 30Ha
                                        </li>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Internet
                                        </li>
                                    </ul>
                                </div>
                                <div class="property-details-benefits-list">
                                    <ul>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Supermarket Maxi
                                        </li>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Akses PDAM
                                        </li>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Pusat Kuliner dalam kawasan
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-details-btn">
                                <a href="{{ route('download-flyer') }}" class="bd-btn btn-style btn-hover-x hover-black">
                                    Download Flyer
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="services-deatails-sidebar-wrapper bd-sidebar-sticky">
                            <!-- categories start -->
                            <div class="sidebar-widget widget_categories mb-35">
                                <h3 class="sidebar-widget-title">Lokasi Terbaik</h3>
                                <div class="sidebar-widget-content">
                                    <div class="list">
                                        <ul>
                                            <li><a>Akses Tol IKN <span>10 Min</span></a></li>
                                            <li><a>Area Industri <span>10 Min</span></a></li>
                                            <li><a>SPBU <span>10 Min</span></a></li>
                                            <li><a>Tempat Wisata <span>5 Min</span></a></li>
                                            <li><a>Fasilitas Olahraga<span>10 Min</span></a></li>
                                            <li><a>Fasilitas Pendidik<span>5 Min</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget widget_categories mb-35">
                                <h3 class="sidebar-widget-title">Scan Lokasi</h3>
                                <div class="sidebar-widget-content">
                                    <div class="property-details-gallery-thumb">
                                        <img src="{{ asset('assets/images/qr/qr-cluster-garuda-mentari-village.jpg') }}"
                                            alt="image not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property details content end -->

    </main>
@endsection
