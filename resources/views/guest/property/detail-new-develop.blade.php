@extends('guest.layouts.app')
@section('content')
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
                                    <h1 class="bd-breadcrumb-title">Mentari Village</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="index.html"><i class="icon-home"></i>Home</a></span>
                                        <span>New Development</span>
                                    </div>
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
                            <h2 class="property-details-title has-max-width">Cluster Garuda</h2>
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
                            <h4 class="property-details-title-two">Property Types (LB/LT)</h4>
                            <div class="property-details-feature wow bdFadeInUp" data-wow-delay=".3s"
                                data-wow-duration="1s">
                                <ul>
                                    <li>
                                        <div class="property-details-feature-list-item">
                                            <span class="icon"><i class="icon-villa"></i></span>
                                            <div>
                                                <h6>Type</h6>
                                                <span class="descrip">30/60 sq meter</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property-details-feature-list-item">
                                            <span class="icon"><i class="icon-villa"></i></span>
                                            <div>
                                                <h6>Type</h6>
                                                <span class="descrip">30/82 sq meter</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property-details-feature-list-item">
                                            <span class="icon"><i class="icon-villa"></i></span>
                                            <div>
                                                <h6>Type</h6>
                                                <span class="descrip">30/119 sq meter</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="property-details-feature-list-item">
                                            <span class="icon"><i class="icon-villa"></i></span>
                                            <div>
                                                <h6>Type</h6>
                                                <span class="descrip">30/127 sq meter</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="property-details-title-two">Gallery</h4>
                            <div class="property-details-gallery wow bdFadeInUp" data-wow-delay=".3s"
                                data-wow-duration="1s">
                                <div class="row g-5">
                                    <div class="col-md-6">
                                        <div class="property-details-gallery-thumb">
                                            <img src="assets/images/gallery/property-details-gallery-01.png"
                                                alt="image not found">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="property-details-gallery-thumb mb-30">
                                            <img src="assets/images/gallery/property-details-gallery-02.png"
                                                alt="image not found">
                                        </div>
                                        <div class="property-details-gallery-thumb">
                                            <img src="assets/images/gallery/property-details-gallery-03.png"
                                                alt="image not found">
                                        </div>
                                    </div>
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
                                            Supermarket Maxi
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
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Pusat Kuliner dalam kawasan
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <h4 class="property-details-title-two"> Working Process </h4>
                            <div class="property-details-working-process">
                                <div class="property-details-working-process-item wow fadeIn" data-wow-delay=".3s">
                                    <div class="icon">
                                        <span><i class="icon-solution"></i></span>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Easy Solution
                                        </h3>
                                        <p class="description">Choose us for your real estate needs.</p>
                                    </div>
                                </div>
                                <div class="property-details-working-process-item wow fadeIn" data-wow-delay=".4s">
                                    <div class="icon">
                                        <span><i class="icon-flexibility"></i></span>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Full Flexibility
                                        </h3>
                                        <p class="description">Investing in multi-unit properties as duplexes.</p>
                                    </div>
                                </div>
                                <div class="property-details-working-process-item wow fadeIn" data-wow-delay=".5s">
                                    <div class="icon">
                                        <span><i class="icon-efficiency"></i></span>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Cost Effective
                                        </h3>
                                        <p class="description">Consider not only the purchase price repairs.</p>
                                    </div>
                                </div>
                                <div class="property-details-working-process-item wow fadeIn" data-wow-delay=".6s">
                                    <div class="icon">
                                        <span><i class="icon-eco-friendly"></i></span>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Eco friendly
                                        </h3>
                                        <p class="description">Features such as green spaces, energy-efficient.</p>
                                    </div>
                                </div>
                                <div class="property-details-working-process-item wow fadeIn" data-wow-delay=".7s">
                                    <div class="icon">
                                        <span><i class="icon-modern-living"></i></span>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Modern Living
                                        </h3>
                                        <p class="description">The quality of real state and materials building.</p>
                                    </div>
                                </div>
                                <div class="property-details-working-process-item wow fadeIn" data-wow-delay=".8s">
                                    <div class="icon">
                                        <span><i class="icon-location"></i></span>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Prime Location
                                        </h3>
                                        <p class="description">The core feature of any real estate property area.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="property-details-btn">
                                <a href="contact.html" class="bd-btn btn-style btn-hover-x hover-black">
                                    <span>
                                    </span>
                                    Contact us
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

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property details content end -->

    </main>
@endsection
