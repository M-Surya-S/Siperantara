@extends('admin.layouts.app')

@section('content-admin')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Dashboard Overview</h1>
    <p class="text-gray-500 text-sm mt-1">Welcome back, {{ Auth::user()->name }}!</p>
</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
    
    <!-- Total Properties -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center space-x-5 transition-shadow hover:shadow-md">
        <div class="w-14 h-14 flex items-center justify-center rounded-full bg-blue-50 text-blue-600 shrink-0">
            <i class="fa-sharp fa-light fa-buildings text-2xl"></i>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500 mb-1">Total Properties</p>
            <div class="flex items-baseline space-x-2">
                <h4 class="text-2xl font-bold text-gray-900">{{ count($propertys) }}</h4>
            </div>
        </div>
    </div>

    <!-- Total Agents -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center space-x-5 transition-shadow hover:shadow-md">
        <div class="w-14 h-14 flex items-center justify-center rounded-full bg-green-50 text-green-600 shrink-0">
            <i class="fa-light fa-users text-2xl"></i>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500 mb-1">Total Agents</p>
            <div class="flex items-baseline space-x-2">
                <h4 class="text-2xl font-bold text-gray-900">#</h4>
            </div>
        </div>
    </div>

    <!-- Properties for Sale -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center space-x-5 transition-shadow hover:shadow-md">
        <div class="w-14 h-14 flex items-center justify-center rounded-full bg-amber-50 text-amber-600 shrink-0">
            <i class="fa-light fa-badge-check text-2xl"></i>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500 mb-1">For Sale</p>
            <div class="flex items-baseline space-x-2">
                <h4 class="text-2xl font-bold text-gray-900">#</h4>
            </div>
        </div>
    </div>

    <!-- Properties for Rent -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center space-x-5 transition-shadow hover:shadow-md">
        <div class="w-14 h-14 flex items-center justify-center rounded-full bg-purple-50 text-purple-600 shrink-0">
            <i class="fa-sharp fa-light fa-tag text-2xl"></i>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500 mb-1">For Rent</p>
            <div class="flex items-baseline space-x-2">
                <h4 class="text-2xl font-bold text-gray-900">#</h4>
            </div>
        </div>
    </div>
</div>

<!-- Recent Listings Table -->
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-6 py-5 border-b border-gray-100">
        <h3 class="text-lg font-semibold text-gray-900">Recent Listing</h3>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-gray-50 text-gray-500 font-medium">
                <tr>
                    <th class="px-6 py-4">Property</th>
                    <th class="px-6 py-4">Description</th>
                    <th class="px-6 py-4">Price</th>
                    <th class="px-6 py-4">Date</th>
                    <th class="px-6 py-4">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @if ($propertys->isEmpty())
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-gray-500">No properties found.</td>
                    </tr>
                @else
                    @foreach ($propertys->take(5) as $property)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                @php
                                    $filePaths = is_string($property->image) ? json_decode($property->image, true) : $property->image;
                                    $firstImage = !empty($filePaths) ? $filePaths[0] : null;
                                @endphp
                                @if($firstImage)
                                    <div class="w-32 h-20 rounded-lg bg-gray-200 overflow-hidden relative">
                                        <img src="{{ Storage::url($firstImage) }}" alt="Property" class="w-full h-full object-cover">
                                    </div>
                                @else
                                    <div class="w-32 h-20 rounded-lg bg-gray-200 flex items-center justify-center">
                                        <i class="fa-light fa-image text-gray-400"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <h4 class="text-base font-semibold text-gray-900 mb-1">{{ $property->property_title }}</h4>
                                <div class="flex items-center space-x-3 text-xs text-gray-500 mb-1">
                                    <span class="flex items-center"><i class="fa-regular fa-bed mr-1"></i> {{ $property->beds }} bed</span>
                                    <span class="flex items-center"><i class="fa-duotone fa-shower mr-1"></i> {{ $property->baths }} bath</span>
                                    <span class="flex items-center"><i class="fa-regular fa-maximize mr-1"></i> {{ $property->lot_area }} m²</span>
                                </div>
                                <p class="text-xs text-gray-500 truncate max-w-xs"><i class="fa-regular fa-location-dot mr-1"></i> {{ $property->address }}</p>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900">
                                Rp {{ number_format((int) $property->property_price, 0, ',', '.') }}
                                <span class="text-xs text-gray-500 font-normal">
                                    {{ $property->property_status == 'For Rent' || $property->property_status == 'Rented Out' ? '/Year' : '' }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-xs text-gray-500 mb-1">Added: <span class="font-medium text-gray-700">{{ \Carbon\Carbon::parse($property->created_at)->format('d M Y') }}</span></div>
                                <div class="text-xs text-gray-500">Updated: <span class="font-medium text-gray-700">{{ \Carbon\Carbon::parse($property->updated_at)->format('d M Y') }}</span></div>
                            </td>
                            <td class="px-6 py-4">
                                @if ($property->property_status == 'For Sale' or $property->property_status == 'For Rent' or $property->property_status == 'New Develop')
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                        {{ $property->property_status }}
                                    </span>
                                @elseif ($property->property_status == 'Sold Out' or $property->property_status == 'Rent Out')
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        {{ $property->property_status }}
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
