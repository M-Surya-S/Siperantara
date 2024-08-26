@extends('guest.layouts.app')
@section('content')
    <main>
        <!-- Breadcrumb area start -->
        <section class="bd-breadcrumb-area p-relative fix">
            <!-- breadcrumb background image -->
            <div class="bd-breadcrumb-bg" data-background="{{ asset('assets/images/breadcrumb/breadcrumb-thumb-01.png') }}"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Seller Guide</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="/"><i class="icon-home"></i>Home</a></span>
                                        <span><a href="/guide">Guide</a></span>
                                        <span>Seller Guide</span>
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
                            <h2 class="section-title title-animation">The Selling Process</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 justify-content-between justify-content-md-center">
                    <div class="col-lg-10">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="content">
                                <h3 class="title">Know Why You’re Selling</h3>
                                <p class="description">The first place to start for any seller is to ask yourself why you are selling your home.
                                    Are you moving? Is your family growing and you need more space? Are you looking to capitalize on an advantageous market? </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="content">
                                <h3 class="title">Look For An Agent</h3>
                                <p class="description">Not every seller uses an agent to sell their home. However, many sellers rely on an agent's expertise and professional network to help them manage the entire process.
                                     Of course, all agents bring different levels of experience and commitment.
                                     If you decide that you want to work with an agent, it is important that you feel comfortable with whom you choose and that expectations. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="content">
                                <h3 class="title">Prepare Your Home For the Market</h3>
                                <p class="description">Getting your home ready to list is often the most demanding step in the selling process
                                     and is one of the most important factors in determining how successful your sale will be.
                                      Doing it well can increase the value of the home and bring in larger offers.
                                      Doing it poorly can turn off potential buyers and lead to low-ball offers. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="content">
                                <h3 class="title">Market Your Home</h3>
                                <p class="description">You’ve cleaned, painted, and staged, and you’re just about ready to list. But first,
                                    you’ll need to have pictures taken of your home. While you might be a good smartphone photographer or even have your own DSLR, hiring
                                    a professional is almost always the best option. Align with your agent on which features of your home are the biggest selling points.
                                    Is it the natural light? The views? Certain architectural elements? Remember, pictures are a buyer’s first impression,
                                    so it’s important they be as inviting as possible. Many agents have photographers they can recommend to you. .</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="content">
                                <h3 class="title">Receive Offers</h3>
                                <p class="description">Receiving your first offer is incredibly exciting. However,
                                    it's important to stay level-headed and know that one offer doesn’t necessarily mean that future offers are
                                    going to be higher or lower. Every buyer is different. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Centered footer button -->
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="footer-btn-wrap">
                            <a class="bd-btn btn-style btn-hover-x hover-white" href="/guide/seller/download"><i
                                    class="fa-regular fa-arrow-right-long"></i>Download Our Guide</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
