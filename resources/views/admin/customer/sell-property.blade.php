@extends('admin.layouts.app')

@section('content-admin')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Sell Property Enquiries</h1>
    <p class="text-gray-500 text-sm mt-1">List of customers interested in selling their properties.</p>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr>
                    <th class="bg-gray-50 text-gray-600 font-medium py-4 px-6 text-sm border-b border-gray-100 w-16 text-center">No</th>
                    <th class="bg-gray-50 text-gray-600 font-medium py-4 px-6 text-sm border-b border-gray-100">Name</th>
                    <th class="bg-gray-50 text-gray-600 font-medium py-4 px-6 text-sm border-b border-gray-100">Email</th>
                    <th class="bg-gray-50 text-gray-600 font-medium py-4 px-6 text-sm border-b border-gray-100">Phone</th>
                    <th class="bg-gray-50 text-gray-600 font-medium py-4 px-6 text-sm border-b border-gray-100 w-40">Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sell_propertys as $index => $sell)
                <tr class="hover:bg-gray-50/50 transition-colors border-b border-gray-50 last:border-0">
                    <td class="py-4 px-6 text-sm text-gray-500 text-center">
                        {{ ($sell_propertys->currentPage() - 1) * $sell_propertys->perPage() + $index + 1 }}
                    </td>
                    <td class="py-4 px-6 text-sm text-gray-900 font-medium">
                        {{ $sell->name }}
                    </td>
                    <td class="py-4 px-6 text-sm text-gray-500">
                        {{ $sell->email != null ? $sell->email : '-' }}
                    </td>
                    <td class="py-4 px-6 text-sm text-gray-500">
                        {{ $sell->phone_number }}
                    </td>
                    <td class="py-4 px-6 text-sm text-gray-500">
                        {{ \Carbon\Carbon::parse($sell->created_at)->format('d M Y') }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-12 px-6 text-center text-gray-500">
                        <div class="flex flex-col items-center justify-center">
                            <i class="fa-light fa-inbox text-4xl text-gray-300 mb-3"></i>
                            <p class="text-base font-medium text-gray-900">No enquiries found</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    @if ($sell_propertys->hasPages())
    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
        <p class="text-sm text-gray-500 hidden sm:block">
            Showing <span class="font-medium text-gray-900">{{ $sell_propertys->firstItem() }}</span> to <span class="font-medium text-gray-900">{{ $sell_propertys->lastItem() }}</span> of <span class="font-medium text-gray-900">{{ $sell_propertys->total() }}</span> entries
        </p>
        <div class="flex items-center gap-1">
            {{-- Previous Page Link --}}
            @if ($sell_propertys->onFirstPage())
                <span class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 bg-gray-50 cursor-not-allowed">
                    <i class="fa-regular fa-chevron-left text-xs"></i>
                </span>
            @else
                <a href="{{ $sell_propertys->previousPageUrl() }}" class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 hover:border-gray-300 transition-colors">
                    <i class="fa-regular fa-chevron-left text-xs"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            <div class="hidden sm:flex items-center gap-1 mx-2">
                @foreach ($sell_propertys->links()->elements[0] as $page => $url)
                    @if ($page == $sell_propertys->currentPage())
                        <span class="w-9 h-9 flex items-center justify-center rounded-lg bg-blue-600 text-white font-medium text-sm shadow-sm">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="w-9 h-9 flex items-center justify-center rounded-lg border border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-200 transition-colors text-sm">{{ $page }}</a>
                    @endif
                @endforeach
            </div>

            {{-- Next Page Link --}}
            @if ($sell_propertys->hasMorePages())
                <a href="{{ $sell_propertys->nextPageUrl() }}" class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 hover:border-gray-300 transition-colors">
                    <i class="fa-regular fa-chevron-right text-xs"></i>
                </a>
            @else
                <span class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 bg-gray-50 cursor-not-allowed">
                    <i class="fa-regular fa-chevron-right text-xs"></i>
                </span>
            @endif
        </div>
    </div>
    @endif
</div>
@endsection
