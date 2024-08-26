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

        <!-- Property area start -->
        {{-- <section class="bd-property-inner-area section-space">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="property-sidebar-wrapper bd-sidebar-sticky">

                            <div class="property-widget">
                                <h3 class="property-widget-title">Filter</h3>
                                <div class="property-widget-content">
                                    <form action="{{ route('property.search') }}" method="GET">
                                        <div class="banner-booking-select">
                                            <div class="booking-select mb-10">
                                                <select name="bedrooms">
                                                    <option value="">Bedrooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="booking-select mb-10">
                                                <select name="bathrooms">
                                                    <option value="">Bathrooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="booking-select mb-30">
                                                <select name="floors">
                                                    <option value="">Floors</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="banner-submit">
                                                <button class="bd-btn btn-style btn-hover-x btn-black w-100" type="submit">
                                                    <span>
                                                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.58 13.92L0.5 17M1.389 8.581C1.389 12.768 4.772 16.162 8.944 16.162C13.117 16.162 16.5 12.768 16.5 8.582C16.5 4.393 13.117 1 8.945 1C4.772 1 1.389 4.394 1.389 8.581Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="bd-property-main-wrapper">
                            <div class="bd-property-top mb-45">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="bd-property-top-left d-flex align-items-center ">
                                            <div class="bd-property-top-tab bd-tab">
                                                <ul class="nav nav-tabs" id="productTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="grid-tab" data-bs-toggle="tab"
                                                            data-bs-target="#grid-tab-pane" type="button" role="tab"
                                                            aria-controls="grid-tab-pane" aria-selected="true">
                                                            <svg width="18" height="18" viewBox="0 0 18 18"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M16.3327 6.01341V2.98675C16.3327 2.04675 15.906 1.66675 14.846 1.66675H12.1527C11.0927 1.66675 10.666 2.04675 10.666 2.98675V6.00675C10.666 6.95341 11.0927 7.32675 12.1527 7.32675H14.846C15.906 7.33341 16.3327 6.95341 16.3327 6.01341Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M16.3327 15.18V12.4867C16.3327 11.4267 15.906 11 14.846 11H12.1527C11.0927 11 10.666 11.4267 10.666 12.4867V15.18C10.666 16.24 11.0927 16.6667 12.1527 16.6667H14.846C15.906 16.6667 16.3327 16.24 16.3327 15.18Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M7.33268 6.01341V2.98675C7.33268 2.04675 6.90602 1.66675 5.84602 1.66675H3.15268C2.09268 1.66675 1.66602 2.04675 1.66602 2.98675V6.00675C1.66602 6.95341 2.09268 7.32675 3.15268 7.32675H5.84602C6.90602 7.33341 7.33268 6.95341 7.33268 6.01341Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M7.33268 15.18V12.4867C7.33268 11.4267 6.90602 11 5.84602 11H3.15268C2.09268 11 1.66602 11.4267 1.66602 12.4867V15.18C1.66602 16.24 2.09268 16.6667 3.15268 16.6667H5.84602C6.90602 16.6667 7.33268 16.24 7.33268 15.18Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bd-property-top-result">
                                                <p>Showing 1–10 of 16 results</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div
                                            class="bd-property-top-right d-sm-flex align-items-center justify-content-xl-end">
                                            <div class="bd-property-top-select">
                                                <select>
                                                    <option>Default Sorting</option>
                                                    <option>Low to High</option>
                                                    <option>High to Low</option>
                                                    <option>New Added</option>
                                                    <option>On Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bd-property-items-wrapper bd-property-item-primary">
                                <div class="tab-content" id="productTabContent">
                                    <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel"
                                        aria-labelledby="grid-tab" tabindex="0">
                                        <div class="row g-5">
                                            @foreach ($propertys as $property)
                                                <div class="col-xl-6 col-md-6">
                                                    <div class="featured-item style-one wow bdFadeInUp"
                                                        data-wow-delay=".3s" data-wow-duration="1s">
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
                                                                            @break
                                                                        @endforeach
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="price">
                                                                <span>
                                                                    Rp {{ number_format((int) $property->property_price, 0, ',', '.') }}
                                                                    {{ $property->property_status == 'For Rent' || $property->property_status == 'Rented Out' ? '/Mo' : '' }}
                                                                </span>
                                                            </div>
                                                            <h3 class="title"><a href="{{ route('property.detail', $property->property_id) }}">{{ $property->property_title }}</a>
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
                                                                        <span class="icon"><i class="fa-duotone fa-shower"></i></span><span
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
                            <div class="pagination__wrapper mt-50">
                                <div class="basic-pagination">
                                    <nav>
                                        <ul>
                                            @if ($propertys->onFirstPage())
                                                <li>
                                                    <span>
                                                        <i class="fa-regular fa-arrow-left"></i>
                                                    </span>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ $propertys->previousPageUrl() }}">
                                                        <i class="fa-regular fa-arrow-left"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            @foreach ($propertys->links()->elements[0] as $page => $url)
                                                @if ($page == $propertys->currentPage())
                                                    <li>
                                                        <a class="current"
                                                            href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endif
                                            @endforeach

                                            @if ($propertys->hasMorePages())
                                                <li>
                                                    <a href="{{ $propertys->nextPageUrl() }}">
                                                        <i class="fa-regular fa-arrow-right"></i>
                                                    </a>
                                                </li>
                                            @else
                                                <li>
                                                    <span>
                                                        <i class="fa-regular fa-arrow-right"></i>
                                                    </span>
                                                </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section> --}}
        <!-- Property area end -->

    </main>
@endsection
