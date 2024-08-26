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
                                    <h1 class="bd-breadcrumb-title">Blog Detail</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="/"><i class="icon-home"></i>Home</a></span>
                                        <span><a href="/blog">Blog</a></span>
                                        <span>Blog Detail</span>
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
        <section class="bd-blog-details-area section-space">
            <div class="container">
                <div class="row gy-50">
                    <div class="col-xxl-8 col-lg-8">
                        <div class="bd-postbox-details-main-wrapper">
                            <div class="bd-postbox-details-thumb">
                                <img src="{{ asset('assets/images/blog/details/blog-details-01.png') }}"
                                    alt="image not found">
                            </div>
                            <div class="bd-postbox-details-content">
                                <p class="bd-dropcap">Your home is not just a place to live; it's also a valuable
                                    investment.
                                    Whether you're planning to sell in the near future or simply want to enhance your living
                                    space, strategic renovations can significantly increase your home's value. In this post,
                                    we'll explore a variety of renovation ideas that can help you unlock your home's full
                                    potential and maximize its market appeal</p>
                                <p>The kitchen is often considered the heart of the home, and it's also a major selling
                                    point for potential buyers. Consider upgrading outdated appliances, replacing worn
                                    countertops with granite or quartz, and adding a fresh coat of paint to cabinets for
                                    a modern look</p>
                                <h4 class="bd-postbox-details-heading">The Ultimate Guide to Buying Your First Home Tips and
                                    Advice for New Homebuyers</h4>
                                <p>Curb appeal matters, and outdoor renovations can greatly enhance the overall value of
                                    your home. Invest in landscaping to create an inviting outdoor space, add a deck or
                                    patio for entertaining, or consider installing outdoor lighting to highlight
                                    architectural features</p>
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
                                                <p>Never ever think of giving up. Winners never quit and quitters never win.
                                                    Take all negative words out your mental dictionary and focus on
                                                    the...</p>
                                                <cite>Thomas Jefferson</cite>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="postbox__thumb postbox__video w-img p-relative">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('assets/images/blog/postbox/blog-post-02.png') }}"
                                            alt="image">
                                    </a>
                                    <a class="play-btn popup-video" href="https://www.youtube.com/watch?v=ec_fXMrD7Ow">
                                        <span>
                                            <i class="fas fa-play"></i>
                                        </span>
                                    </a>
                                </div>
                                <h4 class="bd-postbox-details-heading">The Future of Real Estate Trends and Innovations
                                    Shaping the Industry</h4>
                                <p>At Real Estate Insights Blog, we are a team of seasoned real estate professionals,
                                    financial advisors, and market analysts dedicated to empowering our
                                    readers with knowledge and tools to make informed decisions.</p>
                                <div class="post-details-list mb-20">
                                    <ul>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Home Maintenance Advice
                                        </li>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Real Estate Law and Regulations
                                        </li>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Home Design and Decor
                                        </li>
                                        <li>
                                            <span class="list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            Real Estate Success Stories
                                        </li>
                                    </ul>
                                </div>
                                <p>Rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                                    pretium. Integer cidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                                    vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae
                                    lorem.</p>
                                <div class="bd-postbox-details-share-wrapper">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-6">
                                            <div class="bd-postbox-details-tags tagcloud">
                                                <span>Share:</span>
                                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bd-postbox-details-author d-sm-flex align-items-start theme-bg-primary">
                                    <div class="bd-postbox-details-author-content">
                                        <span>Written by</span>
                                        <h5 class="bd-postbox-details-author-title">
                                            <a href="#">Theodore Handle</a>
                                        </h5>
                                        <p>20 Aug 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="bd-sidebar-wrapper bd-sidebar-sticky">
                            <!-- About -->
                            <div class="sidebar-widget mb-35">
                                <div class="sidebar-widget-content">
                                    <div class="sidebar-about">
                                        <div class="sidebar-about-thumb mb-25">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/user/user-thumb-09.png') }}"
                                                    alt="user images not found">
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
                                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- About end -->

                            <!-- latest post start -->
                            <div class="sidebar-widget mb-35">
                                <h3 class="sidebar-widget-title">Latest Posts</h3>
                                <div class="sidebar-widget-content">
                                    <div class="sidebar-blog-item-wrapper">
                                        <div class="sidebar-blog-item d-flex align-items-center">
                                            <div class="sidebar-blog-thumb">
                                                <a href="blog-details.html">
                                                    <img src="{{ asset('assets/images/blog/sidebar/blog-sm-01.png') }}"
                                                        alt="image">
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
                                                    <img src="{{ asset('assets/images/blog/sidebar/blog-sm-02.png') }}"
                                                        alt="image">
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
                                                    <img src="{{ asset('assets/images/blog/sidebar/blog-sm-03.png') }}"
                                                        alt="image">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Postbox area end -->

    </main>
@endsection
