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
                                <img src="{{ Storage::url($blog->image) }}"
                                    alt="image not found">
                            </div>
                            <div class="bd-postbox-details-content">
                                <h4 class="bd-postbox-details-heading">{{ $blog->blog_title }}</h4>
                                <p class="bd-dropcap">{!! nl2br(e($blog->blog_content)) !!}</p>
                                <div class="bd-postbox-details-share-wrapper">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-6">
                                            <div class="bd-postbox-details-tags tagcloud">
                                                <span>Share:</span>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text={{ urlencode($blog->blog_title) }}" target="_blank">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                                <a href="https://wa.me/?text={{ urlencode(Request::url()) }}" target="_blank">
                                                    <i class="fa-brands fa-whatsapp"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="bd-postbox-details-author d-sm-flex align-items-start theme-bg-primary">
                                    <div class="bd-postbox-details-author-content">
                                        <span>Written by</span>
                                        <h5 class="bd-postbox-details-author-title">
                                            {{ $blog->writter }}
                                        </h5>
                                        <p>{{ Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</p>
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
                                                <a>A.Adam.S</a>
                                            </h3>
                                            <span class="sidebar-about-designation">Marketing Executive</span>
                                            <p>Experienced and Certified Real Estate Agent that help and accompany you through the journey of buying-selling-renting a property.</p>
                                            <div class="bd-social">
                                                <ul>
                                                    <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
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
                                        @foreach ($blog_recent as $blog)
                                            <div class="sidebar-blog-item d-flex align-items-center">
                                                <div class="sidebar-blog-thumb">
                                                    <a href="{{ route('blog-detail', $blog->id) }}">
                                                        <img src="{{ Storage::url($blog->image) }}"
                                                            alt="image">
                                                    </a>
                                                </div>
                                                <div class="sidebar-blog-content">
                                                    <div class="sidebar-blog-meta">
                                                        <span>{{ Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</span>
                                                    </div>
                                                    <h3 class="sidebar-blog-title">
                                                        <a href="{{ route('blog-detail', $blog->id) }}">{{ Illuminate\Support\Str::limit($blog->blog_title, 40, '...') }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        @endforeach
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
