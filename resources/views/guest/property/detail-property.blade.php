@extends('guest.layouts.app')
@section('content')
    <main>

        <!-- property slider area start -->
        <div class="bd-property-details-area fix pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="property-details-wrapper">
                            <div class="swiper property-details-active">
                                <div class="swiper-wrapper">
                                    @php
                                        $filePaths = is_string($property->image) ? json_decode($property->image, true) : $property->image;
                                    @endphp
                                    @foreach ($filePaths as $filePath)
                                        <div class="swiper-slide d-flex justify-content-center align-items-center"
                                            style="max-height: 570px; max-width: 1350px; overflow: hidden; ">
                                            <div class="property-details-item" style="width: 100%;">
                                                <div
                                                    class="property-details-item-thumb d-flex justify-content-center align-items-center" style="width: 100%;">
                                                    <img src="{{ Storage::url($filePath) }}" class="img-fluid"
                                                        style="object-fit: cover; width: 100%; height: 570px;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="property-details-navigation d-none d-sm-block">
                                    <button class="property-details-button-prev circle-btn is-bg-white">
                                        <i class="fa-regular fa-arrow-left-long"></i>
                                    </button>
                                    <button class="property-details-button-next circle-btn is-bg-white">
                                        <i class="fa-regular fa-arrow-right-long"></i>
                                    </button>
                                </div>
                                <!-- If we need pagination -->
                                <div class="pagination-wrapper d-block d-sm-none">
                                    <div class="bd-swiper-dot text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- property slider area end -->

        <!-- property details content start -->
        <section class="bd-property-details-area section-space-medium">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-8 col-lg-8">
                        <div class="property-details-content-inner">
                            <div class="property-details-meta">
                                <ul>
                                    <li class="property-details-category">
                                        <a class="is-bg-orange">{{ $property->property_status }}</a>
                                    </li>
                                    <li class="property-details-category">
                                        <a class="is-bg-transparent">{{ $property->property_category }}</a>
                                    </li>
                                    @if ($property->property_category != 'Land')
                                        <li class="property-details-category">
                                            <a class="is-bg-transparent">{{ $property->property_tag }}</a>
                                        </li>
                                    @endif
                                    <li class="property-details-date">
                                        <i class="fa-regular fa-calendar-days"></i>
                                        {{ \Carbon\Carbon::parse($property->created_at)->format('d M Y') }}
                                    </li>
                                </ul>
                            </div>
                            <h2 class="property-details-title">{{ $property->property_title }}</h2>
                            <span class="property-details-location">
                                <i class="fa-regular fa-location-dot"></i>
                                {{ $property->address }}
                            </span>
                            <h4 class="property-details-title-two">Description</h4>
                            <div class="property-details-descrip-text">
                                {!! $property->description !!}
                            </div>
                            <h4 class="property-details-title-two">Property Details</h4>


                            <div class="row g-3 mb-40 wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-solid fa-tags"></i></div>
                                        <div>
                                            <span class="detail-label">Status</span>
                                            <span class="detail-value">{{ $property->property_status }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-solid fa-money-bill-wave"></i></div>
                                        <div>
                                            <span class="detail-label">Price</span>
                                            <span class="detail-value">Rp {{ number_format((int) $property->property_price, 0, ',', '.') }}{{ $property->property_status == 'For Rent' || $property->property_status == 'Rented Out' ? '/Thn' : '' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-solid fa-fingerprint"></i></div>
                                        <div>
                                            <span class="detail-label">Property ID</span>
                                            <span class="detail-value">{{ $property->property_id }}</span>
                                        </div>
                                    </div>
                                </div>
                                
                                @if($property->property_category != 'Land')
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-solid fa-door-open"></i></div>
                                        <div>
                                            <span class="detail-label">Rooms</span>
                                            <span class="detail-value">{{ $property->rooms }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-solid fa-layer-group"></i></div>
                                        <div>
                                            <span class="detail-label">Floors</span>
                                            <span class="detail-value">{{ $property->floors }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-solid fa-bath"></i></div>
                                        <div>
                                            <span class="detail-label">Baths</span>
                                            <span class="detail-value">{{ $property->baths }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-solid fa-bed"></i></div>
                                        <div>
                                            <span class="detail-label">Beds</span>
                                            <span class="detail-value">{{ $property->beds }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-solid fa-maximize"></i></div>
                                        <div>
                                            <span class="detail-label">Lot Area</span>
                                            <span class="detail-value">{{ $property->lot_area }} m²</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-solid fa-house-chimney"></i></div>
                                        <div>
                                            <span class="detail-label">Home Area</span>
                                            <span class="detail-value">{{ $property->home_area }} {{ $property->home_area == '-' ? '' : 'm²' }}</span>
                                        </div>
                                    </div>
                                </div>

                                @if ($property->lot_dimensions != null && $property->lot_dimensions != '-')
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-solid fa-ruler-combined"></i></div>
                                        <div>
                                            <span class="detail-label">Dimensions</span>
                                            <span class="detail-value">{{ $property->lot_dimensions }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-solid fa-file-contract"></i></div>
                                        <div>
                                            <span class="detail-label">Certificate</span>
                                            <span class="detail-value">{{ $property->certificate }}</span>
                                        </div>
                                    </div>
                                </div>
                                
                                @if ($property->year_built != null && $property->year_built != '-')
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="detail-card">
                                        <div class="detail-icon"><i class="fa-regular fa-calendar"></i></div>
                                        <div>
                                            <span class="detail-label">Year Built</span>
                                            <span class="detail-value">{{ $property->year_built }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            @if ($property->property_category != 'Land')
                                @if ($property->living_room != null || $property->garage != null || $property->dining_area != null || $property->bedroom != null || $property->bathroom != null || $property->gym_area != null || $property->garden != null || $property->parking != null ) 
                                    <h4 class="property-details-title-two">Property Features</h4>
                                    <div class="property-details-feature wow bdFadeInUp" data-wow-delay=".3s"
                                        data-wow-duration="1s">
                                        <ul>
                                            <li>
                                                <div class="property-details-feature-list-item">
                                                    <span class="icon">
                                                        <i class="icon-modern-living"></i>
                                                    </span>
                                                    <div>
                                                        <h6>Living Room</h6>
                                                        <span class="descrip">{{ $property->living_room == null ? '-' : $property->living_room }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="property-details-feature-list-item">
                                                    <span class="icon">
                                                        <i class="icon-garage"></i>
                                                    </span>
                                                    <div>
                                                        <h6>Garage</h6>
                                                        <span class="descrip">{{ $property->garage == null ? '-' : $property->garage }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="property-details-feature-list-item">
                                                    <span class="icon">
                                                        <i class="icon-dining-area"></i>
                                                    </span>
                                                    <div>
                                                        <h6>Dining Area</h6>
                                                        <span class="descrip">{{ $property->dining_area == null ? '-' : $property->dining_area }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="property-details-feature-list-item">
                                                    <span class="icon">
                                                        <i class="icon-bedroom"></i>
                                                    </span>
                                                    <div>
                                                        <h6>Bedroom</h6>
                                                        <span class="descrip">{{ $property->bedroom == null ? '-' : $property->bedroom }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="property-details-feature-list-item">
                                                    <span class="icon">
                                                        <i class="icon-bathroom"></i>
                                                    </span>
                                                    <div>
                                                        <h6>Bathroom</h6>
                                                        <span class="descrip">{{ $property->bathroom == null ? '-' : $property->bathroom }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="property-details-feature-list-item">
                                                    <span class="icon">
                                                        <i class="icon-gym-area"></i>
                                                    </span>
                                                    <div>
                                                        <h6>Gym Area</h6>
                                                        <span class="descrip">{{ $property->gym_area == null ? '-' : $property->gym_area }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="property-details-feature-list-item">
                                                    <span class="icon">
                                                        <i class="icon-garden"></i>
                                                    </span>
                                                    <div>
                                                        <h6>Garden</h6>
                                                        <span class="descrip">{{ $property->garden == null ? '-' : $property->garden }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="property-details-feature-list-item">
                                                    <span class="icon">
                                                        <i class="icon-parking-area"></i>
                                                    </span>
                                                    <div>
                                                        <h6>Parking</h6>
                                                        <span class="descrip">{{ $property->parking == null ? '-' : $property->parking }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                @endif
                            @endif
                            <h4 class="property-details-title-two"> Benefits </h4>
                            <div class="wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s" style="margin-bottom: 40px;">
                                @php
                                    $savedBenefits = json_decode($property->benefits, true);
                                    if (!is_array($savedBenefits)) {
                                        if (!empty($property->benefits)) {
                                            // Handle legacy HTML lists
                                            preg_match_all('/<li>(.*?)<\/li>/', $property->benefits, $matches);
                                            $savedBenefits = !empty($matches[1]) ? $matches[1] : [];
                                        } else {
                                            $savedBenefits = [];
                                        }
                                    }
                                @endphp

                                @if (!empty($savedBenefits))
                                    <div class="d-flex flex-wrap gap-3">
                                        @foreach (array_filter($savedBenefits) as $benefit)
                                            <span class="badge" style="background-color: #e8f0fe; color: #1a1a1a; font-size: 15px; font-weight: 500; padding: 10px 18px; border-radius: 6px; border: 1px solid #d2e3fc;">
                                                {{ $benefit }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            @if ($property->link_location != '')
                                <h4 class="property-details-title-two"> Location</h4>
                                <div class="property-details-google-map wow bdFadeInUp" data-wow-delay=".3s"
                                    data-wow-duration="1s">
                                    @php
                                        $mapUrl = $property->link_location;
                                        if (preg_match('/src="([^"]+)"/', $property->link_location, $matches)) {
                                            $mapUrl = $matches[1];
                                        }
                                    @endphp

                                    @if(str_contains($mapUrl, 'embed') || str_contains($mapUrl, 'google.com/maps'))
                                        <iframe
                                            src="{{ $mapUrl }}"
                                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    @else
                                        <div class="d-flex align-items-center justify-content-center bg-light" style="height: 450px; width: 100%; border: 1px solid #ddd; border-radius: 8px;">
                                            <div class="text-center">
                                                <i class="fa-solid fa-map-location-dot text-muted" style="font-size: 48px; margin-bottom: 15px;"></i>
                                                <h5 class="mb-3">View Location on Map</h5>
                                                <a href="{{ $mapUrl }}" target="_blank" class="bd-btn btn-style btn-hover-x btn-black">
                                                    Open Google Maps <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="agent-sidebar-wrapper bd-sidebar-sticky">
                            <div class="agent-details-widget mb-35">
                                <h3 class="sidebar-widget-title">Tertarik dengan Properti Ini?</h3>
                                <p class="mb-20 text-muted" style="font-size: 14px;">Tinggalkan kontak Anda, tim kami akan segera menghubungi Anda untuk diskusi lebih lanjut.</p>
                                <form action="{{ route('send-message-property', $property->property_id) }}" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <input type="text" placeholder="Nama Lengkap" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <div class="input-box">
                                                    <input type="email" placeholder="Email (Opsional)" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <input type="text" placeholder="Nomor Telepon / WhatsApp" name="phone_number" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="agent-details-btn">
                                                <button class="bd-btn btn-style btn-hover-x w-100 btn-black"
                                                    type="submit"><i class="fa-solid fa-paper-plane me-2"></i> Hubungi Agen Sekarang</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property details content end -->

    </main>
@endsection
