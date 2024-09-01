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
                                    <h1 class="bd-breadcrumb-title">Sell Your Property</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="/"><i class="icon-home"></i>Home</a></span>
                                        <span><a href="/property">Property</a></span>
                                        <span>Sell</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area end -->

        <!-- Contact form area start -->
        <section class="bd-contact-form section-space-bottom contact-form-spacing">
            <div class="container">
                <div class="row gy-24 justify-content-between">
                    <div class="col-xxl-5 col-xl-5 col-lg-6">
                        <div class="section-title-wrapper anim-wrapper animation-style-3 mb-30">
                            <h2 class="section-title title-animation mb-20">Sell Your Property at Siperantara</h2>
                            <div class="section-divider mb-25"></div>
                            <!-- Added section for checkmarks and text -->
                            <div class="checkmark-list">
                                <div class="checkmark-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Every step of the selling process</span>
                                </div>
                                <div class="checkmark-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Helpful terms to familiarize yourself with</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="contact-wrapper style-one">
                            <div class="contact-from">
                                <form action="{{ route('sell-property.store') }}" method="POST">
                                    @csrf
                                    <div class="row g-5 align-items-center justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="form-input-box has-icon icon-right">
                                                <div class="form-input">
                                                    <input name="name" type="text" placeholder="Your Name" required>
                                                    <div class=""><span><i class="fa-solid fa-user"></i></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-input-box has-icon icon-right">
                                                <div class="form-input">
                                                    <input name="email" type="email" placeholder="Your Email" required>
                                                    <div class=""><span><i class="fa-solid fa-envelope"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-input-box has-icon icon-right">
                                                <div class="form-input">
                                                    <input name="phone_number" type="text" placeholder="Your Phone"
                                                        required>
                                                    <div class=""><span><i class="fa-solid fa-phone"></i></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button class="bd-btn btn-style btn-hover-x btn-black w-100"
                                                type="submit">Submit</button>
                                        </div>
                                        <div class="col-lg-12 text-center mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="consentCheckbox"
                                                    required>
                                                <label class="form-check-label" for="consentCheckbox">
                                                    By providing Siperantara. your contact information, you acknowledge and
                                                    agree to our Privacy Policy and consent to receiving marketing
                                                    communications, including through automated calls, texts, and emails,
                                                    some of which may use artificial or prerecorded voices. This consent
                                                    isn’t necessary for purchasing any products or services and you may opt
                                                    out at any time. To opt out from texts, you can reply, ‘stop’ at any
                                                    time. To opt out from emails, you can click on the unsubscribe link in
                                                    the emails. Message and data rates may apply.
                                                </label>
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
        <!-- Contact form area end -->
    </main>
@endsection
