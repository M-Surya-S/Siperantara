@extends('layouts.app')
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
                                <div class="swiper-slide">
                                    <div class=" property-details-item">
                                        <div class="property-details-item-thumb">
                                            <img src="assets/images/property/details/property-details-slider-thumb-01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class=" property-details-item">
                                        <div class="property-details-item-thumb">
                                            <img src="assets/images/property/details/property-details-slider-thumb-02.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class=" property-details-item">
                                        <div class="property-details-item-thumb">
                                            <img src="assets/images/property/details/property-details-slider-thumb-03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class=" property-details-item">
                                        <div class="property-details-item-thumb">
                                            <img src="assets/images/property/details/property-details-slider-thumb-04.png" alt="">
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
                                    <a class="is-bg-orange" href="#">Featured</a>
                                </li>
                                <li class="property-details-category">
                                    <a class="is-bg-transparent" href="#">For Rent</a>
                                </li>
                                <li class="property-details-date">
                                    <i class="fa-regular fa-calendar-days"></i>
                                    June 29, 2022
                                </li>
                                <li class="property-details-comments">
                                    <i class="fa-light fa-comments"></i>40 Comments
                                </li>
                            </ul>
                        </div>
                        <h2 class="property-details-title">Penthouse large property</h2>
                        <span class="property-details-location">
                    <i class="fa-regular fa-location-dot"></i>
                    27 Division St, New York
                 </span>
                        <h4 class="property-details-title-two">Description</h4>
                        <div class="property-details-descrip-text">
                            <p>This property type offers highlight key features, e.g., modern amenities, luxurious living
                                spaces, a serene neighborhood. The specific rooms or areas, kitchen, living room, master
                                bedroom boasts specific details, granite countertops, stainless steel appliances, a cozy
                                fireplace. Enjoy outdoor features, a spacious backyard, stunning views, a private pool
                                perfect for activities, e.g., entertaining guests, relaxing weekends.</p>
                            <p>Situated in the heart of Neighborhood/City, this property provides easy access to key
                                locations, top-rated schools, shopping centers, major highways</p>
                        </div>
                        <h4 class="property-details-title-two">Property Details</h4>
                        <div class="property-details-info-list wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <ul>
                                <li><label>Property ID:</label> <span>PT30</span></li>
                                <li><label>Home Area: </label> <span>150 sqft</span></li>
                                <li><label>Rooms:</label> <span>8</span></li>
                                <li><label>Baths:</label> <span>3</span></li>
                                <li><label>Year built:</label> <span>1990</span></li>
                            </ul>
                            <ul>
                                <li><label>Lot Area:</label> <span>PT30 </span></li>
                                <li><label>Lot dimensions:</label> <span>150 sqft</span></li>
                                <li><label>Beds:</label> <span>9</span></li>
                                <li><label>Price:</label> <span>5</span></li>
                                <li><label>Property Status:</label> <span>For Sale</span></li>
                            </ul>
                        </div>
                        <h4 class="property-details-title-two">Property Features</h4>
                        <div class="property-details-feature wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <ul>
                                <li>
                                    <div class="property-details-feature-list-item">
                                        <span class="icon">
                                <i class="icon-modern-living"></i>
                             </span>
                                        <div>
                                            <h6>Living Room</h6>
                                            <span class="descrip">20 x 16 sq feet</span>
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
                                            <span class="descrip">40 x 20 sq feet</span>
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
                                            <span class="descrip">25 x 20 sq feet</span>
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
                                            <span class="descrip">15 x 10 sq feet</span>
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
                                            <span class="descrip">10 x 15 sq feet</span>
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
                                            <span class="descrip">35 x 25 sq feet</span>
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
                                            <span class="descrip">40 x 30 sq feet</span>
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
                                            <span class="descrip">45 x 30 sq feet</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h4 class="property-details-title-two"> Our Property Gallery</h4>
                        <div class="property-details-gallery wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="row g-5">
                                <div class="col-md-6">
                                    <div class="property-details-gallery-thumb">
                                        <img src="assets/images/gallery/property-details-gallery-01.png" alt="image not found">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="property-details-gallery-thumb mb-30">
                                        <img src="assets/images/gallery/property-details-gallery-02.png" alt="image not found">
                                    </div>
                                    <div class="property-details-gallery-thumb">
                                        <img src="assets/images/gallery/property-details-gallery-03.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="property-details-title-two"> Benefits </h4>
                        <div class="property-details-benefits wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="property-details-benefits-list">
                                <ul>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Mosque/Prayer Room
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Square Footage
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Square Footage
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Living Spaces
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Flooring
                                    </li>
                                </ul>
                            </div>
                            <div class="property-details-benefits-list">
                                <ul>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Energy Efficiency
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Parking
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Security Features
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Landscaping
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Accessibility Features
                                    </li>
                                </ul>
                            </div>
                            <div class="property-details-benefits-list">
                                <ul>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        HVAC System
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Cylinder Gas
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Plumbing System
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        Sports Area
                                    </li>
                                    <li>
                                        <span class="list-icon">
                                <i class="fa-solid fa-check"></i>
                             </span>
                                        internet and Connectivity
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h4 class="property-details-title-two"> Location</h4>
                        <div class="property-details-google-map wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d60970.02123903755!2d-74.01588829728814!3d40.707092808586985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1712226046538!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>

                        {{-- <div class="property-details-floor-plan wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="apartments-tab">
                                        <div class="nav section-title-space">
                                            <a data-bs-toggle="tab" href="#apartment-tab-1">The House</a>
                                            <a class="active show" data-bs-toggle="tab" href="#apartment-tab-2">Deluxe
                                                Portion</a>
                                            <a data-bs-toggle="tab" href="#apartment-tab-3">Penthouse</a>
                                            <a data-bs-toggle="tab" href="#apartment-tab-4">Warehouse</a>
                                            <a data-bs-toggle="tab" href="#apartment-tab-5">Urban</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade" id="apartment-tab-1">
                                    <div class="apartments-tab-content-inner">
                                        <div class="row align-items-center g-5">
                                            <div class="col-lg-6">
                                                <div class="apartments-plan-info">
                                                    <h3 class="apartments-title">The House</h3>
                                                    <p>The suitability of a house apartment building for your needs, whether you're looking to rent or buy. If studio have any specific buildings.</p>
                                                    <div class="apartments-info-list apartments-info-list-color">
                                                        <ul>
                                                            <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                            <li><label>Bedroom</label> <span>1500 Sq. Ft</span></li>
                                                            <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                            <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                            <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="apartments-plan-thumb">
                                                    <figure><img src="assets/images/apartment/apartment-plan-thumb-01.png" alt="apartment thumb">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="apartment-tab-2">
                                    <div class="product-tab-content-inner">
                                        <div class="row align-items-center g-5">
                                            <div class="col-lg-6">
                                                <div class="apartments-plan-info">
                                                    <h3 class="apartments-title">Deluxe Portion</h3>
                                                    <p>That a deluxe real estate portion meets your expectations for luxury, comfort, and investment value
                                                        Larger living spaces.</p>
                                                    <div class="apartments-info-list apartments-info-list-color">
                                                        <ul>
                                                            <li><label>Total Area</label> <span>2600 Sq. Ft</span></li>
                                                            <li><label>Bedroom</label> <span>1300 Sq. Ft</span></li>
                                                            <li><label>Bathroom</label> <span>40 Sq. Ft</span></li>
                                                            <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                            <li><label>Lounge</label> <span>600 Sq. Ft</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="apartments-plan-thumb">
                                                    <figure><img src="assets/images/apartment/apartment-plan-thumb-02.png" alt="apartment thumb">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="apartment-tab-3">
                                    <div class="product-tab-content-inner">
                                        <div class="row align-items-center g-5">
                                            <div class="col-lg-6">
                                                <div class="apartments-plan-info">
                                                    <h3 class="apartments-title">Penthouse</h3>
                                                    <p>The better assess the value and suitability of a penthouse property for your needs ensuring it meets your expectations for luxury.</p>
                                                    <div class="apartments-info-list apartments-info-list-color">
                                                        <ul>
                                                            <li><label>Total Area</label> <span>3000 Sq. Ft</span></li>
                                                            <li><label>Bedroom</label> <span>2000 Sq. Ft</span></li>
                                                            <li><label>Bathroom</label> <span>50 Sq. Ft</span></li>
                                                            <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                            <li><label>Lounge</label> <span>750 Sq. Ft</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="apartments-plan-thumb">
                                                    <figure><img src="assets/images/apartment/apartment-plan-thumb-03.png" alt="apartment thumb">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="apartment-tab-4">
                                    <div class="product-tab-content-inner">
                                        <div class="row align-items-center g-5">
                                            <div class="col-lg-6">
                                                <div class="apartments-plan-info">
                                                    <h3 class="apartments-title">Warehouse</h3>
                                                    <p> Warehouse real estate, whether for purchase, lease, or investment, there are several important details and features to evaluate.</p>
                                                    <div class="apartments-info-list apartments-info-list-color">
                                                        <ul>
                                                            <li><label>Total Area</label> <span>3200 Sq. Ft</span></li>
                                                            <li><label>Bedroom</label> <span>2500 Sq. Ft</span></li>
                                                            <li><label>Bathroom</label> <span>55 Sq. Ft</span></li>
                                                            <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                            <li><label>Lounge</label> <span>700 Sq. Ft</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="apartments-plan-thumb">
                                                    <figure><img src="assets/images/apartment/apartment-plan-thumb-04.png" alt="apartment thumb">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="apartment-tab-5">
                                    <div class="ltn__product-tab-content-inner">
                                        <div class="row align-items-center g-5">
                                            <div class="col-lg-6">
                                                <div class="apartments-plan-info">
                                                    <h3 class="apartments-title">Urban</h3>
                                                    <p>The informed decision about urban real estate properties, ensuring they meet your needs and expectations planned or potential future.</p>
                                                    <div class="apartments-info-list apartments-info-list-color">
                                                        <ul>
                                                            <li><label>Total Area</label> <span>4000 Sq. Ft</span></li>
                                                            <li><label>Bedroom</label> <span>3000 Sq. Ft</span></li>
                                                            <li><label>Bathroom</label> <span>60 Sq. Ft</span></li>
                                                            <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                            <li><label>Lounge</label> <span>800 Sq. Ft</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="apartments-plan-thumb">
                                                    <figure><img src="assets/images/apartment/apartment-plan-thumb-05.png" alt="apartment thumb">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <h4 class="property-details-title-two"> Apartment Video</h4>
                        <div class="property-details-video">
                            <div class="bd-video-area style-one position-relative">
                                <div class="video-bg-thumb include-bg" data-background="assets/images/bg/video-bg-01.png">
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-7 col-lg-8 col-md-10">
                                            <div class="video-content text-center">
                                                <div class="video-play">
                                                    <a href="https://www.youtube.com/watch?v=go7QYaQR494" class="bd-play-btn popup-video"><i class="fa-duotone fa-play"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="property-details-title-two">Clients Reviews</h4>
                        <div class="property-details-reviews wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="bd-postbox-details-comment-inner">
                                <ul>
                                    <li>
                                        <div class="bd-postbox-details-comment-box d-sm-flex align-items-start">
                                            <div class="bd-postbox-details-comment-thumb">
                                                <img src="assets/images/user/user-thumb-04.png" alt="">
                                            </div>
                                            <div class="bd-postbox-details-comment-content">
                                                <div class="bd-postbox-details-comment-top d-flex justify-content-between align-items-start">
                                                    <div class="bd-postbox-details-comment-avater">
                                                        <h4 class="bd-postbox-details-comment-avater-title">Lance Bogrol</h4>
                                                        <span class="bd-postbox-details-avater-meta">12 April, 2023 at
                                            3.50pm</span>
                                                    </div>
                                                    <div class="bd-postbox-details-comment-reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <p>By defining and following internal and external processes, your team will
                                                    have clarity on resources to <br> attract and retain customers for your
                                      business.</p>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li>
                                                <div class="bd-postbox-details-comment-box d-sm-flex align-items-start">
                                                    <div class="bd-postbox-details-comment-thumb">
                                                        <img src="assets/images/user/user-thumb-05.png" alt="">
                                                    </div>
                                                    <div class="bd-postbox-details-comment-content">
                                                        <div class="bd-postbox-details-comment-top d-flex justify-content-between align-items-start">
                                                            <div class="bd-postbox-details-comment-avater">
                                                                <h4 class="bd-postbox-details-comment-avater-title">Dasy Lily</h4>
                                                                <span class="bd-postbox-details-avater-meta">12 April, 2023 at
                                                  3.50pm</span>
                                                            </div>
                                                            <div class="bd-postbox-details-comment-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                        <p>By defining and following internal and external processes, your team
                                                            will have clarity on resources to <br> attract and retain customers
                                            for your business.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="bd-postbox-details-comment-box d-sm-flex align-items-start">
                                            <div class="bd-postbox-details-comment-thumb">
                                                <img src="assets/images/user/user-thumb-06.png" alt="">
                                            </div>
                                            <div class="bd-postbox-details-comment-content">
                                                <div class="bd-postbox-details-comment-top d-flex justify-content-between align-items-start">
                                                    <div class="bd-postbox-details-comment-avater">
                                                        <h4 class="bd-postbox-details-comment-avater-title">Jeremy C. Irizarry</h4>
                                                        <span class="bd-postbox-details-avater-meta">12 April, 2023 at
                                            3.50pm</span>
                                                    </div>
                                                    <div class="bd-postbox-details-comment-reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <p>By defining and following internal and external processes, your team will
                                                    have clarity on resources to <br> attract and retain customers for your
                                      business.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-comment-form">
                                <div class="post-comments-title">
                                    <h4 class="mb-15">Leave a Comment</h4>
                                </div>
                                <form>
                                    <div class="row gy-20">
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <div class="input-box">
                                                    <input type="email" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <textarea cols="30" rows="10" placeholder="Type Comment here"></textarea>
                                            </div>
                                        </div>
                                        <div class="bd-postbox-details-suggetions mb-20">
                                            <div class="bd-postbox-details-remeber">
                                                <input id="remeber" type="checkbox">
                                                <label for="remeber">Save my name, email, and website in this browser for the
                                                    next time I comment.</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="submit-btn">
                                                <button class="bd-btn btn-style btn-hover-x btn-black" type="submit">Post
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="agent-sidebar-wrapper bd-sidebar-sticky">
                        <div class="agent-details-widget mb-35">
                            <h3 class="sidebar-widget-title">Contact</h3>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <div class="input-box">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <textarea cols="30" rows="10" placeholder="Write Massage"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="agent-details-btn">
                                        <button class="bd-btn btn-style btn-hover-x w-100 btn-black" type="submit">Send
                                            Email</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- featured properties start -->
                        {{-- <div class="sidebar-properties-wrapper">
                            <div class="swiper featured__properties">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="sidebar-widget mb-25">
                                            <h3 class="sidebar-widget-title">Featured Properties</h3>
                                            <div class="sidebar-slider">
                                                <div class="sidebar-thumb-wrapper">
                                                    <div class="sidebar-thumb">
                                                        <figure><img src="assets/images/agent/sidebar/agent-sidebar-01.png" alt="agent-sidebar thumb not found"></figure>
                                                    </div>
                                                    <div class="sidebar-content-inner">
                                                        <div class="content">
                                                            <span class="price">$16000/mo</span>
                                                            <h3 class="title"><a href="#">Renovated Apartment</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="badge-wrap agent-badge">
                                                        <a href="#" class="bd-badge">Featured</a>
                                                        <a href="#" class="bd-badge">For Rent</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="sidebar-widget mb-25">
                                            <h3 class="sidebar-widget-title">Featured Properties</h3>
                                            <div class="sidebar-slider">
                                                <div class="sidebar-thumb-wrapper">
                                                    <div class="sidebar-thumb">
                                                        <figure><img src="assets/images/agent/sidebar/agent-sidebar-01.png" alt="agent-sidebar thumb not found"></figure>
                                                    </div>
                                                    <div class="sidebar-content-inner">
                                                        <div class="content">
                                                            <span class="price">$16000/mo</span>
                                                            <h3 class="title"><a href="#">Renovated Apartment</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="badge-wrap agent-badge">
                                                        <a href="#" class="bd-badge">Featured</a>
                                                        <a href="#" class="bd-badge">For Rent</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="sidebar-widget mb-25">
                                            <h3 class="sidebar-widget-title">Featured Properties</h3>
                                            <div class="sidebar-slider">
                                                <div class="sidebar-thumb-wrapper">
                                                    <div class="sidebar-thumb">
                                                        <figure><img src="assets/images/agent/sidebar/agent-sidebar-01.png" alt="agent-sidebar thumb not found"></figure>
                                                    </div>
                                                    <div class="sidebar-content-inner">
                                                        <div class="content">
                                                            <span class="price">$16000/mo</span>
                                                            <h3 class="title"><a href="#">Renovated Apartment</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="badge-wrap agent-badge">
                                                        <a href="#" class="bd-badge">Featured</a>
                                                        <a href="#" class="bd-badge">For Rent</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="agent-nav-pag mb-20">
                                    <!-- If we need navigation buttons -->
                                    <div class="common-navigation">
                                        <button class="properties-slider-button-prev"><i
                                   class="fa-regular fa-arrow-left"></i></button>
                                        <button class="properties-slider-button-next"><i
                                   class="fa-regular fa-arrow-right"></i></button>
                                    </div>
                                    <!-- If we need pagination -->
                                    <div class="properties-pagination">
                                        <div class="bd-swiper-dot text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- featured properties end -->
                        <!-- latest post start -->
                        {{--  --}}
                        <!-- latest post end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- property details content end -->

</main>
@endsection
