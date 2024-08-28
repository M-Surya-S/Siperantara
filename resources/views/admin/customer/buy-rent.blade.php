@extends('admin.layouts.app')

@section('content-admin')
    <div class="app-content-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="card-wrapper">
                    <div class="card-header d-flex align-items-center justify-content-between mb-30">
                        <div class="card-title-wrap">
                            <h6 class="card-subtitle">Interest Buy or Rent Customer List</h6>
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
                                        @foreach ($buy_rent as $index => $customer)
                                            <tr class="table-custom">
                                                <td>
                                                    <p class="property-location text-center">
                                                        {{ ($buy_rent->currentPage() - 1) * $buy_rent->perPage() + $index + 1 }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="property-location">{{ $customer->name }}</p>
                                                </td>
                                                <td>
                                                    <p class="property-location">{{ $customer->email != null ? $customer->email : '-' }}</p>
                                                </td>
                                                <td>
                                                    <p class="property-location">{{ $customer->phone_number }}</p>
                                                </td>
                                                <td>
                                                    <p class="property-location">{{ Carbon\Carbon::parse($customer->created_at)->format('d M Y') }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination__wrapper mt-30">
                                <div class="basic-pagination">
                                    <nav>
                                        <ul>
                                            {{-- Link ke halaman sebelumnya --}}
                                            @if ($buy_rent->onFirstPage())
                                                
                                            @else
                                                <li>
                                                    <a href="{{ $buy_rent->previousPageUrl() }}">
                                                        <i class="fa-regular fa-arrow-left"></i>
                                                    </a>
                                                </li>
                                            @endif
                            
                                            {{-- Link ke halaman-halaman --}}
                                            @foreach ($buy_rent->links()->elements[0] as $page => $url)
                                                @if ($page == $buy_rent->currentPage())
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
                                            @if ($buy_rent->hasMorePages())
                                                <li>
                                                    <a href="{{ $buy_rent->nextPageUrl() }}">
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
