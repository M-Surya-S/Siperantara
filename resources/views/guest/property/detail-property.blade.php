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
                                        $filePaths = json_decode($property->image);
                                    @endphp
                                    @foreach ($filePaths as $filePath)
                                        <div class="swiper-slide d-flex justify-content-center align-items-center"
                                            style="max-height: 570px; max-width: 1350px; overflow: hidden; ">
                                            <div class="property-details-item">
                                                <div
                                                    class="property-details-item-thumb d-flex justify-content-center align-items-center">
                                                    <img src="{{ Storage::url($filePath) }}" class="img-fluid"
                                                        alt="">
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
                                <p>{!! nl2br(e($property->description)) !!}</p>
                            </div>
                            <h4 class="property-details-title-two">Property Details</h4>
                            <div class="property-details-info-list wow bdFadeInUp" data-wow-delay=".3s"
                                data-wow-duration="1s">
                                <ul>
                                    <li><label>Property Status:</label> <span>{{ $property->property_status }}</span></li>
                                    <li><label>Price:</label> <span>Rp
                                            {{ number_format((int) $property->property_price, 0, ',', '.') }}{{ $property->property_status == 'For Rent' || $property->property_status == 'Rented Out' ? '/Tahun' : '' }}</span>
                                    </li>
                                    <li><label>Rooms:</label> <span>{{ $property->rooms }}</span></li>
                                    <li><label>Floors:</label> <span>{{ $property->floors }}</span></li>
                                    <li><label>Baths:</label> <span>{{ $property->baths }}</span></li>
                                    <li><label>Beds:</label> <span>{{ $property->beds }}</span></li>
                                </ul>
                                <ul>
                                    <li><label>Property ID:</label> <span>{{ $property->property_id }}</span></li>
                                    <li><label>Lot Area:</label> <span>{{ $property->lot_area }} m²</span></li>
                                    <li><label>Home Area: </label> <span>{{ $property->home_area }}
                                            {{ $property->home_area == '-' ? '' : 'm²' }}</span></li>
                                    <li><label>Lot dimensions:</label> <span>{{ $property->lot_dimensions }}</span></li>
                                    <li><label>Certificate:</label> <span>{{ $property->certificate }}</span></li>
                                    <li><label>Year built:</label> <span>{{ $property->year_built }}</span></li>
                                </ul>
                            </div>
                            @if ($property->property_category != 'Land')
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
                                                    <span class="descrip">{{ $property->living_room }}</span>
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
                                                    <span class="descrip">{{ $property->garage }}</span>
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
                                                    <span class="descrip">{{ $property->dining_area }}</span>
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
                                                    <span class="descrip">{{ $property->bedroom }}</span>
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
                                                    <span class="descrip">{{ $property->bathroom }}</span>
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
                                                    <span class="descrip">{{ $property->gym_area }}</span>
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
                                                    <span class="descrip">{{ $property->garden }}</span>
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
                                                    <span class="descrip">{{ $property->parking }}</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                            <h4 class="property-details-title-two"> Benefits </h4>
                            <div class="property-details-benefits wow bdFadeInUp" data-wow-delay=".3s"
                                data-wow-duration="1s">
                                @php
                                    $benefits = json_decode($property->benefits);
                                    $first_benefits = array_slice($benefits, 0, 4);
                                    $second_benefits = array_slice($benefits, 4, 4);
                                    $third_benefits = array_slice($benefits, 8, 4);
                                @endphp
                                <div class="property-details-benefits-list">
                                    <ul>
                                        @foreach ($first_benefits as $benefit)
                                            @if ($benefit != null)
                                                <li>
                                                    <span class="list-icon">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    {{ $benefit }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="property-details-benefits-list">
                                    <ul>
                                        @foreach ($second_benefits as $benefit)
                                            @if ($benefit != null)
                                                <li>
                                                    <span class="list-icon">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    {{ $benefit }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="property-details-benefits-list">
                                    <ul>
                                        @foreach ($third_benefits as $benefit)
                                            @if ($benefit != null)
                                                <li>
                                                    <span class="list-icon">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    {{ $benefit }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @if ($property->link_location != '')
                                <h4 class="property-details-title-two"> Location</h4>
                                <div class="property-details-google-map wow bdFadeInUp" data-wow-delay=".3s"
                                    data-wow-duration="1s">
                                    <iframe
                                        src="{{ $property->link_location }}"
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="agent-sidebar-wrapper bd-sidebar-sticky">
                            <div class="agent-details-widget mb-35">
                                <h3 class="sidebar-widget-title">Contact</h3>
                                <form action="{{ route('send-message-property', $property->property_id) }}" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <input type="text" placeholder="Name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <div class="input-box">
                                                    <input type="email" placeholder="Email (Optional)" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <input type="text" placeholder="Phone" name="phone_number" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="agent-details-btn">
                                                <button class="bd-btn btn-style btn-hover-x w-100 btn-black"
                                                    type="submit">Send</button>
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
