@extends("layouts.app")
@section("content")
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
                                <h1 class="bd-breadcrumb-title">Our Blog</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><a href="index.html"><i class="icon-home"></i>Home</a></span>
                                    <span>Our Blog</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area end -->

    <!-- Postbox area start -->
    <section class="bd-blog-area section-space">
        <div class="container">
            <div class="row gy-50">
                <div class="col-xxl-8 col-lg-8">
                    <div class="postbox__wrapper">
                        <article class="postbox__item format-image mb-50 transition-3">
                            <div class="postbox__thumb w-img">
                                <a href="/blog-details">
                                    <img src="assets/images/blog/postbox/blog-post-01.png" alt="image">
                                </a>
                            </div>
                            <div class="postbox__content">
                                <div class="post-details-meta mb-20">
                                    <div class="post-details-meta-inner">
                                        <div class="post-details-meta-user">
                                            <img src="assets/images/user/user-thumb-07.png" alt="author">
                                            <span>by
                                   <a href="#">Ellena M.Rice</a>
                                </span>
                                        </div>
                                        <span class="date"><i class="icon-cleander-check"></i> Mar 18, 2028</span>
                                        <span class="comments"><i class="icon-comment"></i> 02 Comments</span>
                                    </div>
                                </div>
                                <h3 class="postbox__title">
                                    <a href="/blog-details">The Future of Real Estate Emerging Trends and Technologies</a>
                                </h3>
                                <div class="postbox__text">
                                    <p>Create a stunning real estate blog with rellow Real Estate Before diving into the world
                                        of rental property investment, it's essential to conduct thorough market research,
                                        understand local regulations, and assess your financial readiness. Real estate
                                        investing requires careful consideration and a long-term perspective Whether you are a
                                        real estate agent, broker, or enthusiast provides a professional platform to share your
                                        insights.
                                    </p>
                                </div>
                                <div class="postbox__read-more">
                                    <a class="bd-half-outline-btn" href="/blog-details"><span class="text">read more</span></a>
                                </div>
                            </div>
                        </article>
                        <article class="postbox__item format-video mb-50 transition-3">
                            <div class="postbox__thumb postbox__video w-img p-relative">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/postbox/blog-post-02.png" alt="image">
                                </a>
                                <a class="play-btn popup-video" href="https://www.youtube.com/watch?v=ec_fXMrD7Ow"><span><i
                                class="fas fa-play"></i></span></a>
                            </div>
                            <div class="postbox__content">
                                <div class="post-details-meta mb-20">
                                    <div class="post-details-meta-inner">
                                        <div class="post-details-meta-user">
                                            <img src="assets/images/user/user-thumb-04.png" alt="author">
                                            <span>by
                                   <a href="#">Ellena M.Rice</a>
                                </span>
                                        </div>
                                        <span class="date"><i class="icon-cleander-check"></i> Mar 18, 2028</span>
                                        <span class="comments"><i class="icon-comment"></i> 02 Comments</span>
                                    </div>
                                </div>
                                <h3 class="postbox__title">
                                    <a href="blog-details.html">Sustainable Living Eco-Friendly Features to Look for in Your
                                        Next Home</a>
                                </h3>
                                <div class="postbox__text">
                                    <p>
                                        The real estate Whether you're a first-time homebuyer, an experienced investor, or a
                                        real estate professional, our blog is designed to provide valuable information, expert
                                        advice, and the latest trends in the industry. Create a stunning real estate blog with
                                        rellow Real Estate Before diving into the world of rental property investment, it's
                                        essential to conduct thorough market research, understand local regulations.
                                    </p>
                                </div>
                                <div class="postbox__read-more">
                                    <a class="bd-half-outline-btn" href="blog-details.html"><span class="text">read more</span></a>
                                </div>
                            </div>
                        </article>
                        <div class="postbox__item format-quote mb-50 transition-3">
                            <div class="postbox__quote postbox__quote-style-3">
                                <div class="blog__grid-quote mb-30">
                                    <div class="blog__grid-quote-icon">
                                        <span>
                                <svg width="24" height="20" viewBox="0 0 24 20" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                   <path
                                      d="M18.1161 0C19.2516 0 20.1806 0.232258 20.9032 0.696775C21.6258 1.16129 22.2194 1.75484 22.6839 2.47742C23.2516 3.30323 23.6129 4.20646 23.7677 5.1871C23.9226 6.16775 24 6.96775 24 7.5871C24 10.1161 23.3548 12.4129 22.0645 14.4774C20.7742 16.5419 18.7613 18.2194 16.0258 19.5097L15.329 18.1161C16.929 17.4452 18.2968 16.3871 19.4323 14.9419C20.6194 13.4968 21.2129 12.0258 21.2129 10.529C21.2129 9.90968 21.1355 9.36774 20.9806 8.90323C20.1548 9.5742 19.2 9.90968 18.1161 9.90968C16.7742 9.90968 15.6129 9.47097 14.6323 8.59355C13.6516 7.71613 13.1613 6.50323 13.1613 4.95484C13.1613 3.50968 13.6516 2.32258 14.6323 1.39355C15.6129 0.464517 16.7742 0 18.1161 0ZM4.95484 0C6.09032 0 7.01936 0.232258 7.74194 0.696775C8.46452 1.16129 9.05807 1.75484 9.52258 2.47742C10.0903 3.30323 10.4516 4.20646 10.6065 5.1871C10.7613 6.16775 10.8387 6.96775 10.8387 7.5871C10.8387 10.1161 10.1935 12.4129 8.90323 14.4774C7.6129 16.5419 5.6 18.2194 2.86452 19.5097L2.16774 18.1161C3.76774 17.4452 5.13548 16.3871 6.27097 14.9419C7.45806 13.4968 8.05161 12.0258 8.05161 10.529C8.05161 9.90968 7.97419 9.36774 7.81936 8.90323C6.99355 9.5742 6.03871 9.90968 4.95484 9.90968C3.6129 9.90968 2.45161 9.47097 1.47097 8.59355C0.490323 7.71613 0 6.50323 0 4.95484C0 3.50968 0.490323 2.32258 1.47097 1.39355C2.45161 0.464517 3.6129 0 4.95484 0Z"
                                      fill="currentColor" />
                                </svg>
                             </span>
                                    </div>
                                    <div class="blog__grid-quote-content">
                                        <span>Social distancing</span>
                                        <p>You have to be burning with an idea, or a problem, or a wrong that you want to
                                            right. If you’re not passion enough from the start,never stick it out.
                                        </p>
                                        <cite>Steve Jobs</cite>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <article class="postbox__item format-image mb-50 transition-3">
                            <div class="postbox__thumb postbox__slider swiper w-img p-relative">
                                <div class="swiper-wrapper">
                                    <div class="postbox__slider-item swiper-slide">
                                        <img src="assets/images/blog/postbox/slider/blog-post-slider-01.png" alt="image">
                                    </div>
                                    <div class="postbox__slider-item swiper-slide">
                                        <img src="assets/images/blog/postbox/slider/blog-post-slider-02.png" alt="image">
                                    </div>
                                    <div class="postbox__slider-item swiper-slide">
                                        <img src="assets/images/blog/postbox/slider/blog-post-slider-03.png" alt="image">
                                    </div>
                                </div>
                                <div class="postbox__nav">
                                    <button class="postbox-slider-button-next"><i
                                class="fa-regular fa-angle-right"></i></button>
                                    <button class="postbox-slider-button-prev"><i
                                class="fa-regular fa-angle-left"></i></button>
                                </div>
                            </div>
                            <div class="postbox__content">
                                <div class="post-details-meta mb-20">
                                    <div class="post-details-meta-inner">
                                        <div class="post-details-meta-user">
                                            <img src="assets/images/user/user-thumb-05.png" alt="author">
                                            <span>by
                                   <a href="#">Ellena M.Rice</a>
                                </span>
                                        </div>
                                        <span class="date"><i class="icon-cleander-check"></i> Mar 18, 2028</span>
                                        <span class="comments"><i class="icon-comment"></i> 02 Comments</span>
                                    </div>
                                </div>
                                <h3 class="postbox__title">
                                    <a href="blog-details.html">The Dos and Don'ts of Selling Your Home in a Competitive
                                        Market</a>
                                </h3>
                                <div class="postbox__text">
                                    <p>At Real Estate Insights Blog, we are a team of seasoned real estate professionals,
                                        financial advisors, and market analysts dedicated to empowering our readers with
                                        knowledge and tools to make informed decisions. Our mission is to demystify the
                                        complexities of real estate and offer practical, actionable advice for all your real
                                        estate needs stay updated with the latest real estate market trends.
                                    </p>
                                </div>
                                <div class="postbox__read-more">
                                    <a class="bd-half-outline-btn" href="blog-details.html"><span class="text">read more</span></a>
                                </div>
                            </div>
                        </article>
                        <div class="pagination__wrapper">
                            <div class="basic-pagination">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa-regular fa-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a class="current" href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-regular fa-arrow-right-long"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="bd-sidebar-wrapper bd-sidebar-sticky">

                        <!-- about -->
                        <div class="sidebar-widget mb-30">
                            <div class="sidebar-widget-content">
                                <div class="sidebar-about">
                                    <div class="sidebar-about-thumb mb-25">
                                        <a href="#">
                                            <img src="assets/images/user/user-thumb-09.png" alt="user images not found">
                                        </a>
                                    </div>
                                    <div class="sidebar-about-content">
                                        <h3 class="sidebar-about-title">
                                            <a href="#">Ravi O'Leigh</a>
                                        </h3>
                                        <span class="sidebar-about-designation">Property Manager</span>
                                        <p>Lorem ligula eget dolor. Aenean massa. Cum sociis que penatibus magnis dis
                                            parturient</p>
                                        <div class="bd-social">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- about end -->
                        <!-- latest post start -->
                        <div class="sidebar-widget mb-30">
                            <h3 class="sidebar-widget-title">Latest Posts</h3>
                            <div class="sidebar-widget-content">
                                <div class="sidebar-blog-item-wrapper">
                                    <div class="sidebar-blog-item d-flex align-items-center">
                                        <div class="sidebar-blog-thumb">
                                            <a href="blog-details.html">
                                                <img src="assets/images/blog/sidebar/blog-sm-01.png" alt="image">
                                            </a>
                                        </div>
                                        <div class="sidebar-blog-content">
                                            <div class="sidebar-blog-meta">
                                                <span>12 April, 2023</span>
                                            </div>
                                            <h3 class="sidebar-blog-title">
                                                <a href="blog-details.html">From Fixer Uppers to Dream Homes Tips</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="sidebar-blog-item d-flex align-items-center">
                                        <div class="sidebar-blog-thumb">
                                            <a href="blog-details.html">
                                                <img src="assets/images/blog/sidebar/blog-sm-02.png" alt="image">
                                            </a>
                                        </div>
                                        <div class="sidebar-blog-content">
                                            <div class="sidebar-blog-meta">
                                                <span>8 July, 2023</span>
                                            </div>
                                            <h3 class="sidebar-blog-title">
                                                <a href="blog-details.html">Navigating Rental Market Dynamics Tips</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="sidebar-blog-item d-flex align-items-center">
                                        <div class="sidebar-blog-thumb">
                                            <a href="blog-details.html">
                                                <img src="assets/images/blog/sidebar/blog-sm-03.png" alt="image">
                                            </a>
                                        </div>
                                        <div class="sidebar-blog-content">
                                            <div class="sidebar-blog-meta">
                                                <span>12 April, 2023</span>
                                            </div>
                                            <h3 class="sidebar-blog-title">
                                                <a href="blog-details.html">Strategies for Building Wealth Property</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- latest post end -->
                        <!-- categories start -->

                        <!-- categories end -->
                        <!-- tag cloud start -->

                        <!-- tag cloud end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Postbox area end -->

</main>
@endsection
