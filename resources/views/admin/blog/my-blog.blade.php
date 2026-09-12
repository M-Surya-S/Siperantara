@extends('admin.layouts.app')

@section('content-admin')
<div class="mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Blog List</h1>
        <p class="text-gray-500 text-sm mt-1">Manage your blog articles and publications.</p>
    </div>
    
    <div class="flex items-center gap-3">
        <!-- Search -->
        <form action="{{ route('my-blog.search') }}" method="GET" class="relative">
            <input type="text" name="search" placeholder="Search blog..." value="{{ request('search') }}" 
                   class="w-full sm:w-64 pl-10 pr-4 py-2.5 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm outline-none transition-colors">
            <i class="fa-regular fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400"></i>
        </form>
        <a href="{{ url('/dashboard/my-blog/add') }}" class="px-4 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-sm transition-colors flex items-center gap-2 text-sm whitespace-nowrap">
            <i class="fa-regular fa-plus"></i>
            Add Blog
        </a>
    </div>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr>
                    <th class="bg-gray-50 text-gray-600 font-medium py-4 px-6 text-sm border-b border-gray-100 w-32">Thumbnail</th>
                    <th class="bg-gray-50 text-gray-600 font-medium py-4 px-6 text-sm border-b border-gray-100">Blog Details</th>
                    <th class="bg-gray-50 text-gray-600 font-medium py-4 px-6 text-sm border-b border-gray-100 w-48">Date Added</th>
                    <th class="bg-gray-50 text-gray-600 font-medium py-4 px-6 text-sm border-b border-gray-100 w-32 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogs as $blog)
                <tr class="hover:bg-gray-50/50 transition-colors group border-b border-gray-50 last:border-0">
                    <td class="py-4 px-6 align-middle">
                        <div class="w-24 h-16 rounded-lg bg-gray-200 border border-gray-200 overflow-hidden shadow-sm">
                            <img src="{{ Storage::url($blog->image) }}" alt="blog image" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <h3 class="text-gray-900 font-semibold text-base mb-1">{{ $blog->blog_title }}</h3>
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <i class="fa-regular fa-pen-nib text-gray-400 w-4"></i>
                            By <span class="font-medium">{{ $blog->writter }}</span>
                        </div>
                    </td>
                    <td class="py-4 px-6 align-middle text-sm text-gray-500">
                        <div class="flex flex-col gap-1">
                            <span class="text-gray-900 font-medium">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</span>
                            <span class="text-xs">Updated: {{ \Carbon\Carbon::parse($blog->updated_at)->format('d M Y') }}</span>
                        </div>
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <div class="flex items-center justify-center gap-2 opacity-100 transition-opacity duration-200">
                            <!-- Edit -->
                            <a href="{{ route('edit-blog.edit', $blog->id) }}" class="w-8 h-8 flex items-center justify-center rounded-lg bg-amber-50 text-amber-600 hover:bg-amber-100 hover:text-amber-700 transition-colors shadow-sm" title="Edit">
                                <i class="fa-regular fa-pen text-sm"></i>
                            </a>
                            <!-- Delete -->
                            <form action="{{ route('delete-blog.destroy', $blog->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this blog post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-600 hover:bg-red-100 hover:text-red-700 transition-colors shadow-sm" title="Delete">
                                    <i class="fa-regular fa-trash text-sm"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="py-12 px-6 text-center text-gray-500">
                        <div class="flex flex-col items-center justify-center">
                            <i class="fa-light fa-newspaper text-4xl text-gray-300 mb-3"></i>
                            <p class="text-base font-medium text-gray-900">No blog posts found</p>
                            <p class="text-sm">Try adjusting your search or create a new blog post.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    @if ($blogs->hasPages())
    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
        <p class="text-sm text-gray-500 hidden sm:block">
            Showing <span class="font-medium text-gray-900">{{ $blogs->firstItem() }}</span> to <span class="font-medium text-gray-900">{{ $blogs->lastItem() }}</span> of <span class="font-medium text-gray-900">{{ $blogs->total() }}</span> entries
        </p>
        <div class="flex items-center gap-1">
            {{-- Previous Page Link --}}
            @if ($blogs->onFirstPage())
                <span class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 bg-gray-50 cursor-not-allowed">
                    <i class="fa-regular fa-chevron-left text-xs"></i>
                </span>
            @else
                <a href="{{ $blogs->previousPageUrl() }}" class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 hover:border-gray-300 transition-colors">
                    <i class="fa-regular fa-chevron-left text-xs"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            <div class="hidden sm:flex items-center gap-1 mx-2">
                @foreach ($blogs->links()->elements[0] as $page => $url)
                    @if ($page == $blogs->currentPage())
                        <span class="w-9 h-9 flex items-center justify-center rounded-lg bg-blue-600 text-white font-medium text-sm shadow-sm">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="w-9 h-9 flex items-center justify-center rounded-lg border border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-200 transition-colors text-sm">{{ $page }}</a>
                    @endif
                @endforeach
            </div>

            {{-- Next Page Link --}}
            @if ($blogs->hasMorePages())
                <a href="{{ $blogs->nextPageUrl() }}" class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 hover:border-gray-300 transition-colors">
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
