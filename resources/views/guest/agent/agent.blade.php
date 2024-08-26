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
                                    <h1 class="bd-breadcrumb-title">Agent</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="/"><i class="icon-home"></i>Home</a></span>
                                        <span>Agent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area end -->

        <!-- Agent area Start -->
        <section class="bd-agent-area section-space">
            <div class="container">
                <div class="agent-tab-item">
                    <div class="row">
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel"
                                aria-labelledby="grid-tab" tabindex="0">
                                <div class="row gy-30">
                                    @foreach ($agents as $agent)
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".3s"
                                                data-wow-duration="1s">
                                                <div class="thumb-wrapper">
                                                    <div class="thumb">
                                                        <figure>
                                                            <img src="{{ Storage::url($agent->image) }}"
                                                                alt="agent thumb not found">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="top">
                                                        <div class="review">
                                                            <h3 class="title">{{ $agent->name }}</h3>
                                                        </div>
                                                        <span class="info underline">
                                                            Property Agent at Siperantara
                                                        </span>
                                                    </div>
                                                    <div class="contact-list-wrapper">
                                                        <ul>
                                                            <li class="contact-list-item">
                                                                <span class="icon">
                                                                    <i class="fa-regular fa-location-dot"></i>
                                                                </span>
                                                                <span class="title">
                                                                    <p style="display: inline-block; word-wrap: break-word; max-width: 300px;">
                                                                        {{ $agent->address }}
                                                                    </p>
                                                                </span>
                                                            </li>

                                                            <li class="contact-list-item">
                                                                <span class="icon"><i
                                                                        class="fa-regular fa-envelope"></i></span>
                                                                <span class="title">
                                                                    <p>{{ $agent->email }}</p>
                                                                </span>
                                                            </li>
                                                            @php
                                                                if (!function_exists('formatPhoneNumber')) {
                                                                    function formatPhoneNumber(
                                                                        $phoneNumber,
                                                                        $countryCode = '+62',
                                                                    ) {
                                                                        if (substr($phoneNumber, 0, 1) == '0') {
                                                                            $phoneNumber = substr($phoneNumber, 1);
                                                                        }

                                                                        return $countryCode .
                                                                            ' ' .
                                                                            substr($phoneNumber, 0, 3) .
                                                                            '-' .
                                                                            substr($phoneNumber, 3, 4) .
                                                                            '-' .
                                                                            substr($phoneNumber, 7);
                                                                    }
                                                                }
                                                            @endphp

                                                            <li class="contact-list-item">
                                                                <span class="icon"><i
                                                                        class="fa-regular fa-phone-volume"></i></span>
                                                                <span class="title">
                                                                    <p>{{ formatPhoneNumber($agent->phone_number) }}</p>
                                                                </span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="bottom">
                                                        <div class="agent-social-wrapper">
                                                            <div class="bd-social">
                                                                <ul>
                                                                    @if ($agent->instagram_link != null)
                                                                        <li>
                                                                            <a href="{{ $agent->instagram_link }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                                                        </li>
                                                                    @endif
                                                                    @if ($agent->linkedin_link != null)
                                                                        <li>
                                                                            <a href="{{ $agent->linkedin_link }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                                                        </li>
                                                                    @endif
                                                                    @if ($agent->facebook_link != null)
                                                                        <li>
                                                                            <a href="{{ $agent->facebook_link }}" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                                                                        </li>
                                                                    @endif
                                                                    @if ($agent->twitter_link != null)
                                                                        <li>
                                                                            <a href="{{ $agent->twitter_link }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                                                        </li>
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination__wrapper mt-50">
                        <div class="basic-pagination">
                            <nav>
                                <ul>
                                    {{-- Link ke halaman sebelumnya --}}
                                    @if ($agents->onFirstPage())
                                        <li>
                                            <span>
                                                <i class="fa-regular fa-arrow-left"></i>
                                            </span>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ $agents->previousPageUrl() }}">
                                                <i class="fa-regular fa-arrow-left"></i>
                                            </a>
                                        </li>
                                    @endif

                                    {{-- Link ke halaman-halaman --}}
                                    @foreach ($agents->links()->elements[0] as $page => $url)
                                        @if ($page == $agents->currentPage())
                                            <li>
                                                <a class="current"
                                                    href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endif
                                    @endforeach

                                    {{-- Link ke halaman berikutnya --}}
                                    @if ($agents->hasMorePages())
                                        <li>
                                            <a href="{{ $agents->nextPageUrl() }}">
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <span>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </span>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Agent area end -->

    </main>
@endsection
