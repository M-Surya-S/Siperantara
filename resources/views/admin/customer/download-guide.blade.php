@extends('admin.layouts.app')

@section('content-admin')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Download Guide Enquiries</h1>
    <p class="text-gray-500 text-sm mt-1">List of customers who downloaded the property guide.</p>
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
                @if (isset($guides) && count($guides) > 0)
                    @foreach ($guides as $index => $guide)
                    <tr class="hover:bg-gray-50/50 transition-colors border-b border-gray-50 last:border-0">
                        <td class="py-4 px-6 text-sm text-gray-500 text-center">
                            {{ $index + 1 }}
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-900 font-medium">
                            {{ $guide->name ?? '-' }}
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-500">
                            {{ $guide->email ?? '-' }}
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-500">
                            {{ $guide->phone_number ?? '-' }}
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-500">
                            {{ isset($guide->created_at) ? \Carbon\Carbon::parse($guide->created_at)->format('d M Y') : '-' }}
                        </td>
                    </tr>
                    @endforeach
                @else
                <tr>
                    <td colspan="5" class="py-12 px-6 text-center text-gray-500">
                        <div class="flex flex-col items-center justify-center">
                            <i class="fa-light fa-inbox text-4xl text-gray-300 mb-3"></i>
                            <p class="text-base font-medium text-gray-900">No enquiries found</p>
                            <p class="text-sm">There are no download guide records yet.</p>
                        </div>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Pagination placeholder -->
    @if (isset($guides) && method_exists($guides, 'hasPages') && $guides->hasPages())
    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
        <p class="text-sm text-gray-500 hidden sm:block">
            Showing <span class="font-medium text-gray-900">{{ $guides->firstItem() }}</span> to <span class="font-medium text-gray-900">{{ $guides->lastItem() }}</span> of <span class="font-medium text-gray-900">{{ $guides->total() }}</span> entries
        </p>
        <div class="flex items-center gap-1">
            {{-- Pagination implementation... --}}
        </div>
    </div>
    @endif
</div>
@endsection
