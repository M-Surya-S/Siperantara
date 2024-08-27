@extends('admin.layouts.app')

@section('content-admin')
    <div class="app-content-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="card-wrapper">
                    <div class="card-header d-flex align-items-center justify-content-between mb-30">
                        <div class="card-title-wrap">
                            <h6 class="card-subtitle">My Property List</h6>
                        </div>
                        <div class="card-title-wrap">
                            <div class="card-title-wrap">
                                <form action="{{ route('my-property.search') }}" method="GET" style="display: flex; align-items: center;">
                                    <input type="text" name="search" placeholder="Search Property" class="form-control" value="{{ request('search') }}" 
                                        style="flex: 1; margin-right: 10px; padding: 1.5rem; height: calc(1.5em + 0.75rem + 2px);">
                                    <button type="submit" class="btn btn-primary" style="height: calc(1.5em + 0.75rem + 2px); padding: 0 10px;">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            
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
                                            <th>Action</th>
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
                                                            <div
                                                                class="property-thumb image-hover-effect-two position-relative">
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
                                                                <h5 class="property-title underline">{{ $property->property_title }}</h5>
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
                                                                                class="title">{{ $property->lot_area }} m²</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="property-location">{{ $property->address }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="recent-activity-price-box">
                                                            <p class="mb-5">Rp {{ number_format((int)$property->property_price, 0, ',', '.') }}</p>
                                                            @if ($property->property_status == 'For Rent' or $property->property_status == 'Rented Out')
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
                                                        @if ($property->property_status == 'For Sale' or $property->property_status == 'For Rent')
                                                            <span class="bd-badge warning">{{ $property->property_status }}</span>
                                                        @elseif ($property->property_status == 'Sold Out' or $property->property_status == 'Rented Out')
                                                            <span class="bd-badge success">{{ $property->property_status }}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                                            <a href="{{ route('property.detail', $property->property_id) }}" class="action-button download">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a href="{{ route('edit-property.edit', $property->property_id) }}" class="action-button edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <form
                                                                action="{{ route('delete-property.destroy', $property->property_id) }}"
                                                                method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="action-button delete">
                                                                    <i class="fa-regular fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
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
                                            @if ($propertys->onFirstPage())
                                                
                                            @else
                                                <li>
                                                    <a href="{{ $propertys->previousPageUrl() }}">
                                                        <i class="fa-regular fa-arrow-left"></i>
                                                    </a>
                                                </li>
                                            @endif
                            
                                            {{-- Link ke halaman-halaman --}}
                                            @foreach ($propertys->links()->elements[0] as $page => $url)
                                                @if ($page == $propertys->currentPage())
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
                                            @if ($propertys->hasMorePages())
                                                <li>
                                                    <a href="{{ $propertys->nextPageUrl() }}">
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
