@extends('layouts.app')
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
                                <h1 class="bd-breadcrumb-title">Buyer's Guide</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><a href="/"><i class="icon-home"></i>Home</a></span>
                                    <span>Guide</span>
                                    <span>Buyer's Guide</span>
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
                        <h2 class="section-title title-animation">The Buying Process</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-between justify-content-md-center">
                <div class="col-lg-10">
                    <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="content">
                            <h3 class="title"><a href="/buyers-guide">Pre-Search</a></h3>
                            <p class="description">The most important thing you should know is how much you can comfortably spend on your home. If you're financing your purchase, you'll want to get pre-approved by a lender. If you're paying all cash, you'll need to be able to show proof of your assets. And remember, even if you're financing, you'll likely need to have enough cash available to make a down payment. Depending on the type of financing you get, that amount can be 5%, 10%, or even 20% of your total loan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="content">
                            <h3 class="title"><a href="#">Search</a></h3>
                            <p class="description">Aside from knowing the specifics of the home you want (i.e. how many bedrooms, bathrooms, etc.), you should create a list of the top two or three neighborhoods you want to live in.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                        <div class="content">
                            <h3 class="title"><a href="#">Contract & Board</a></h3>
                            <p class="description">During a sales transaction, an attorney representing a seller will draw up a contract for the buyer’s attorney. The buyer—with the help of their agent and attorney—will then be allowed to perform due diligence on the property to ensure it doesn't have any hidden baggage. Due diligence includes home inspections, appraisals, title searches, land surveys, disclosures, and more.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="content">
                            <h3 class="title"><a href="#">Mortgage & Approval</a></h3>
                            <p class="description">If you’re already pre-approved, this part is so much easier! Mortgage applications cannot be processed without an executed contract. You can apply for a mortgage at the bank that pre-approved you or you can shop around to see if you can get a better. Mortgage applications typically require your employment information, assets and debts, income, credit history, and details about the home you want to purchase.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="content">
                            <h3 class="title"><a href="#">Closing & Move-In</a></h3>
                            <p class="description">After mortgage approval, managing agents generally set a closing date and buyer and seller attorneys coordinate with the appropriate banks on available dates and times. After closing, you’ve officially purchased your new home. Your search has finally come to an end and it's time to celebrate!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Centered footer button -->
            <div class="row">
                <div class="col-12 text-center">
                    <div class="footer-btn-wrap">
                        <a class="bd-btn btn-style btn-hover-x hover-white" href="/buyers-guide-download"><i class="fa-regular fa-arrow-right-long"></i>Download Our Guide</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
