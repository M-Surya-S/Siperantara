@extends('admin.layouts.app')

@section('content-admin')
    <div class="app-content-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="card-wrapper">
                    <div class="card-header d-flex align-items-center justify-content-between mb-30">
                        <div class="card-title-wrap">
                            <h6 class="card-subtitle">Join Agent List</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="property-table-wrapper">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $number = 1;
                                    @endphp
                                    <tbody>
                                        @if ($agents->isEmpty())
                                            <tr>
                                                <td colspan="6" class="text-center">No data found.</td>
                                            </tr>
                                        @else
                                            @foreach ($agents as $index => $agent)
                                                <tr class="table-custom">
                                                    <td>
                                                        <p class="property-location text-center">
                                                            {{ ($agents->currentPage() - 1) * $agents->perPage() + $index + 1 }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="property-location">{{ $agent->name }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="property-location">{{ $agent->email }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="property-location">{{ $agent->phone_number }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="property-location">{{ Carbon\Carbon::parse($agent->created_at)->format('d M Y') }}</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination__wrapper mt-30">
                                <div class="basic-pagination">
                                    <nav>
                                        <ul>
                                            {{-- Link ke halaman sebelumnya --}}
                                            @if ($agents->onFirstPage())
                                                
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
                                                        <a class="current" href="{{ $url }}">{{ $page }}</a>
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
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
