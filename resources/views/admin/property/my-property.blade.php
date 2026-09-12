@extends('admin.layouts.app')

@section('content-admin')
<div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">My Properties</h1>
        <p class="text-gray-500 text-sm mt-1">Manage your property listings.</p>
    </div>
    <div class="flex items-center gap-3">
        <form action="{{ route('my-property.search') }}" method="GET" class="flex relative w-full sm:w-auto">
            <input type="text" name="search" placeholder="Search Property..." value="{{ request('search') }}" 
                   class="w-full sm:w-64 pl-4 pr-10 py-2.5 bg-white border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
            <button type="submit" class="absolute right-0 top-0 h-full px-3 text-gray-400 hover:text-blue-600 transition-colors">
                <i class="fa-regular fa-search"></i>
            </button>
        </form>
        <a href="{{ url('/dashboard/my-property/add') }}" class="shrink-0 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg text-sm font-medium transition-colors shadow-sm flex items-center gap-2">
            <i class="fa-regular fa-plus"></i>
            <span class="hidden sm:inline">Add Property</span>
        </a>
    </div>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-gray-50 text-gray-500 font-medium border-b border-gray-100">
                <tr>
                    <th class="px-6 py-4">Property</th>
                    <th class="px-6 py-4">Description</th>
                    <th class="px-6 py-4">Price</th>
                    <th class="px-6 py-4">Date</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @if ($propertys->isEmpty())
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center text-gray-500">
                            <div class="flex flex-col items-center justify-center">
                                <i class="fa-light fa-house-slash text-4xl mb-3 text-gray-300"></i>
                                <p>No properties found.</p>
                            </div>
                        </td>
                    </tr>
                @else
                    @foreach ($propertys as $property)
                        <tr class="hover:bg-gray-50 transition-colors group">
                            <td class="px-6 py-4">
                                @php
                                    $filePaths = is_string($property->image) ? json_decode($property->image, true) : $property->image;
                                    $firstImage = !empty($filePaths) ? $filePaths[0] : null;
                                @endphp
                                @if($firstImage)
                                    <div class="w-32 h-20 rounded-lg bg-gray-200 overflow-hidden relative shadow-sm">
                                        <img src="{{ Storage::url($firstImage) }}" alt="Property" class="w-full h-full object-cover">
                                    </div>
                                @else
                                    <div class="w-32 h-20 rounded-lg bg-gray-100 flex items-center justify-center border border-gray-200">
                                        <i class="fa-light fa-image text-gray-400"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <h4 class="text-base font-semibold text-gray-900 mb-1 hover:text-blue-600 transition-colors"><a href="{{ route('property.detail', $property->property_id) }}">{{ $property->property_title }}</a></h4>
                                <div class="flex items-center space-x-3 text-xs text-gray-500 mb-1.5">
                                    <span class="flex items-center"><i class="fa-regular fa-bed mr-1 text-gray-400"></i> {{ $property->beds }} bed</span>
                                    <span class="flex items-center"><i class="fa-duotone fa-shower mr-1 text-gray-400"></i> {{ $property->baths }} bath</span>
                                    <span class="flex items-center"><i class="fa-regular fa-maximize mr-1 text-gray-400"></i> {{ $property->lot_area }} m²</span>
                                </div>
                                <p class="text-xs text-gray-500 truncate max-w-xs flex items-center"><i class="fa-regular fa-location-dot mr-1.5 text-gray-400"></i> {{ $property->address }}</p>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-900">
                                    Rp {{ number_format((int) $property->property_price, 0, ',', '.') }}
                                </div>
                                @if ($property->property_status == 'For Rent' || $property->property_status == 'Rented Out')
                                    <div class="text-xs text-gray-500 mt-0.5">Yearly</div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-xs text-gray-500 mb-1">Added: <span class="font-medium text-gray-700">{{ \Carbon\Carbon::parse($property->created_at)->format('d M Y') }}</span></div>
                                <div class="text-xs text-gray-500">Updated: <span class="font-medium text-gray-700">{{ \Carbon\Carbon::parse($property->updated_at)->format('d M Y') }}</span></div>
                            </td>
                            <td class="px-6 py-4">
                                @if ($property->property_status == 'For Sale' or $property->property_status == 'For Rent' or $property->property_status == 'New Develop')
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800 border border-amber-200">
                                        {{ $property->property_status }}
                                    </span>
                                @elseif ($property->property_status == 'Sold Out' or $property->property_status == 'Rented Out')
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-200">
                                        {{ $property->property_status }}
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200">
                                        {{ $property->property_status }}
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2 opacity-100 transition-opacity">
                                    <a href="{{ route('property.detail', $property->property_id) }}" class="w-8 h-8 rounded-lg flex items-center justify-center bg-blue-50 text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition-colors tooltip shadow-sm" title="View">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                    <a href="{{ route('edit-property.edit', $property->property_id) }}" class="w-8 h-8 rounded-lg flex items-center justify-center bg-amber-50 text-amber-600 hover:bg-amber-100 hover:text-amber-700 transition-colors tooltip shadow-sm" title="Edit">
                                        <i class="fa-regular fa-pen"></i>
                                    </a>
                                    <form action="{{ route('delete-property.destroy', $property->property_id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this property?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-8 h-8 rounded-lg flex items-center justify-center bg-red-50 text-red-600 hover:bg-red-100 hover:text-red-700 transition-colors tooltip shadow-sm" title="Delete">
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
    
    <!-- Pagination -->
    @if ($propertys->hasPages())
    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-center">
        <nav class="flex items-center gap-1">
            {{-- Previous Page Link --}}
            @if ($propertys->onFirstPage())
                <span class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-300 cursor-not-allowed">
                    <i class="fa-regular fa-chevron-left text-xs"></i>
                </span>
            @else
                <a href="{{ $propertys->previousPageUrl() }}" class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 hover:text-blue-600 transition-colors">
                    <i class="fa-regular fa-chevron-left text-xs"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($propertys->links()->elements[0] as $page => $url)
                @if ($page == $propertys->currentPage())
                    <span class="w-8 h-8 flex items-center justify-center rounded-lg bg-blue-600 text-white font-medium text-sm">
                        {{ $page }}
                    </span>
                @else
                    <a href="{{ $url }}" class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 hover:text-blue-600 font-medium text-sm transition-colors">
                        {{ $page }}
                    </a>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($propertys->hasMorePages())
                <a href="{{ $propertys->nextPageUrl() }}" class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 hover:text-blue-600 transition-colors">
                    <i class="fa-regular fa-chevron-right text-xs"></i>
                </a>
            @else
                <span class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-300 cursor-not-allowed">
                    <i class="fa-regular fa-chevron-right text-xs"></i>
                </span>
            @endif
        </nav>
    </div>
    @endif
</div>
@endsection
