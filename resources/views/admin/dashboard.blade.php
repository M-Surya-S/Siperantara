@extends('admin.layouts.app')

@section('content-admin')
    <div class="app-content-wrapper">
        <div class="row">
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card-wrapper">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-30">
                            <div class="card-icon">
                                <span><i class="fa-sharp fa-thin fa-buildings"></i></span>
                            </div>
                            <div class="card-title-wrap">
                                <h6 class="card-subtitle mb-5">Total Properties</h6>
                                <div class="d-flex flex-wrap align-items-end gap-10">
                                    <h4 class="card-title">313</h4>
                                    <span class="card-desc">
                                        <span class="price-increase">
                                            <i class="fa-light fa-arrow-up"></i>
                                            +2.15%</span> Than Last Month
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card-wrapper">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-30">
                            <div class="card-icon">
                                <span><i class="fa-light fa-users"></i></span>
                            </div>
                            <div class="card-title-wrap">
                                <h6 class="card-subtitle mb-5">Total Customer</h6>
                                <div class="d-flex flex-wrap align-items-end gap-10">
                                    <h4 class="card-title">313</h4>
                                    <span class="card-desc">
                                        <span class="price-decrease">
                                            <i class="fa-light fa-arrow-down"></i>
                                            +2.15%</span> Than Last Month
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card-wrapper">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-30">
                            <div class="card-icon">
                                <span><i class="fa-thin fa-badge-check"></i></span>
                            </div>
                            <div class="card-title-wrap">
                                <h6 class="card-subtitle mb-5">Properties for Sale</h6>
                                <div class="d-flex flex-wrap align-items-end gap-10">
                                    <h4 class="card-title">313</h4>
                                    <span class="card-desc">
                                        <span class="price-increase">
                                            <i class="fa-light fa-arrow-up"></i>
                                            +2.15%</span> Than Last Month
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card-wrapper">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-30">
                            <div class="card-icon">
                                <span><i class="fa-sharp fa-light fa-tag"></i></span>
                            </div>
                            <div class="card-title-wrap">
                                <h6 class="card-subtitle mb-5">Properties for Rent</h6>
                                <div class="d-flex flex-wrap align-items-end gap-10">
                                    <h4 class="card-title">313</h4>
                                    <span class="card-desc">
                                        <span class="price-increase">
                                            <i class="fa-light fa-arrow-up"></i>
                                            +2.15%</span> Than Last Month
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="card-wrapper">
                    <div class="card-header d-flex align-items-center justify-content-between mb-10">
                        <div class="card-title-wrap">
                            <h6 class="card-subtitle">Recent Listing</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="property-table-wrapper">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($propertys->isEmpty())
                                            <tr>
                                                <td colspan="6" class="text-center">No properties found.</td>
                                            </tr>
                                        @else
                                            @foreach ($propertys as $property)
                                                <tr class="table-custom">
                                                    <td style="width: 280px;">
                                                        <div class="property-thumb-wrapper">
                                                            <div class="property-thumb image-hover-effect-two position-relative">
                                                                @php
                                                                    $filePaths = json_decode($property->image);
                                                                @endphp
                                                                @foreach ($filePaths as $filePath)
                                                                    <img class="" src="{{ Storage::url($filePath) }}" alt="image">
                                                                    @break
                                                                @endforeach
                                                                <div class="property-thumb-date">
                                                                    <div class="bd-badge-sq theme-bg">
                                                                        <div class="d-block">
                                                                            <h5 class="badge-title">
                                                                                {{ \Carbon\Carbon::parse($property->created_at)->format('d') }}
                                                                            </h5>
                                                                            <span>{{ \Carbon\Carbon::parse($property->created_at)->format('M') }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="property-title-box d-flex align-items-center gap-10">
                                                            <div>
                                                                <h3 class="property-title underline">{{ $property->property_title }}</h3>
                                                                <div class="property-info-box mb-5">
                                                                    <div class="bd-meta">
                                                                        <div class="meta-item">
                                                                            <span class="icon"><i
                                                                                    class="fa-regular fa-bed-front"></i></span><span
                                                                                class="title">{{ $property->beds }} bed</span>
                                                                        </div>
                                                                        <div class="meta-item">
                                                                            <span class="icon"><i
                                                                                    class="fa-duotone fa-shower"></i></span><span
                                                                                class="title">{{ $property->baths }} bath</span>
                                                                        </div>
                                                                        <div class="meta-item">
                                                                            <span class="icon"><i
                                                                                    class="fa-regular fa-arrows-maximize"></i></span><span
                                                                                class="title">{{ $property->lot_area }} sqft</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="property-location">{{ $property->address }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="recent-activity-price-box">
                                                            <h5 class="mb-5">Rp {{ number_format((int)$property->property_price, 0, ',', '.') }}</h5>
                                                            @if ($property->property_status == 'Disewa' or $property->property_status == 'Tersewa')
                                                                <p>Monthly</p>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="recent-activity-list">
                                                            <li class="property-date mb-5">Add Date: <span
                                                                    class="property-add-date">{{ \Carbon\Carbon::parse($property->created_at)->format('d M Y') }}</span></li>
                                                            <li class="property-date">Last Update: <span
                                                                    class="property-last-date">{{ \Carbon\Carbon::parse($property->updated_at)->format('d M Y') }}</span></li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        @if ($property->property_status == 'For Sale' or $property->property_status == 'For Rent' or $property->property_status == 'New Develop')
                                                            <span class="bd-badge warning">{{ $property->property_status }}</span>
                                                        @elseif ($property->property_status == 'Sold Out' or $property->property_status == 'Rent Out')
                                                            <span class="bd-badge success">{{ $property->property_status }}</span>
                                                        @endif
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
                                                    <i class="fa-regular fa-arrow-right"></i>
                                                </a>
                                            </li>
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
