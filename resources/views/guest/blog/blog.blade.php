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
                                    <h1 class="bd-breadcrumb-title">Our Blog</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="/"><i class="icon-home"></i>Home</a></span>
                                        <span>Blog</span>
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
        <section class="bd-blog-grid-area section-space blog-bg">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xxl-8 col-xl-4 col-lg-8">
                        <div class="row gy-50">
                            @foreach ($blogs as $blog)
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="blog-item style-one is-box-shadow wow bdFadeInUp" data-wow-delay=".3s"
                                        data-wow-duration="1s">
                                        <div class="blog-thumb">
                                            <figure>
                                                <a href="{{ route('blog-detail', $blog->id) }}">
                                                    <img src="{{ Storage::url($blog->image) }}" alt="blog thumb">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <span>
                                                    <i class="fa-regular fa-calendar-days"></i>
                                                    {{ Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                                                </span>
                                            </div>
                                            <h3 class="title">
                                                <a href="{{ route('blog-detail', $blog->id) }}">
                                                    {{ Illuminate\Support\Str::limit($blog->blog_title, 55, '...') }}
                                                </a>
                                            </h3>
                                            <div class="blog-content-bottom">
                                                <div class="blog-author">
                                                    <i class="fa-regular fa-user"></i>
                                                    <span>By<a> {{ $blog->writter }}</a></span>
                                                </div>
                                                <div class="blog-btn underline">
                                                    <a href="{{ route('blog-detail', $blog->id) }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="pagination__wrapper">
                                <div class="basic-pagination">
                                    <nav>
                                        <ul>
                                            {{-- Link ke halaman sebelumnya --}}
                                            @if ($blogs->onFirstPage())

                                            @else
                                                <li>
                                                    <a href="{{ $blogs->previousPageUrl() }}">
                                                        <i class="fa-regular fa-arrow-left"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            {{-- Link ke halaman-halaman --}}
                                            @foreach ($blogs->links()->elements[0] as $page => $url)
                                                @if ($page == $blogs->currentPage())
                                                    <li>
                                                        <a class="current" href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endif
                                            @endforeach

                                            {{-- Link ke halaman berikutnya --}}
                                            @if ($blogs->hasMorePages())
                                                <li>
                                                    <a href="{{ $blogs->nextPageUrl() }}">
                                                        <i class="fa-regular fa-arrow-right"></i>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="bd-sidebar-wrapper bd-sidebar-sticky">
                            <!-- About -->
                            <div class="sidebar-widget mb-35">
                                <div class="sidebar-widget-content">
                                    <div class="sidebar-about">
                                        <div class="sidebar-about-thumb mb-25">
                                            <img src="{{ asset('assets/images/user/adam.png') }}"
                                                alt="user images not found">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Postbox area end -->
    </main>
@endsection
