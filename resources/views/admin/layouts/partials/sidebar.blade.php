<!-- Sidebar -->
<div :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-30 w-64 bg-white border-r border-gray-200 text-gray-700 transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-auto flex flex-col h-screen">
    
    <!-- Logo -->
    <div class="flex items-center justify-center h-16 border-b border-gray-100 shrink-0">
        <a href="{{ url('/dashboard') }}" class="flex items-center space-x-2">
            <img src="{{ asset('assets/images/logo/logo_siperantara.png') }}" alt="Siperantara Logo" class="h-8 max-w-full">
        </a>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1 scrollbar-hide">
        
        <a href="{{ url('/dashboard') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ Request::is('dashboard') ? 'bg-blue-50 text-blue-600 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} transition-colors">
            <i class="fa-sharp fa-light fa-table-columns w-5 text-center"></i>
            <span class="text-sm">Dashboard</span>
        </a>

        <div class="pt-4 pb-2">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Properties</p>
        </div>
        <a href="{{ url('/dashboard/my-property') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ Request::is('dashboard/my-property*') ? 'bg-blue-50 text-blue-600 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} transition-colors">
            <i class="fa-sharp fa-light fa-house-building w-5 text-center"></i>
            <span class="text-sm">My Property</span>
        </a>


        <div class="pt-4 pb-2">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Agents</p>
        </div>
        <a href="{{ url('/dashboard/my-agent') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ Request::is('dashboard/my-agent*') ? 'bg-blue-50 text-blue-600 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} transition-colors">
            <i class="fa-sharp fa-light fa-user-tie w-5 text-center"></i>
            <span class="text-sm">My Agent</span>
        </a>


        <div class="pt-4 pb-2">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Blog</p>
        </div>
        <a href="{{ url('/dashboard/my-blog') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ Request::is('dashboard/my-blog*') ? 'bg-blue-50 text-blue-600 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} transition-colors">
            <i class="fa-sharp fa-light fa-newspaper w-5 text-center"></i>
            <span class="text-sm">My Blog</span>
        </a>


        <div class="pt-4 pb-2">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Customer</p>
        </div>
        <div x-data="{ open: false }">
            <button @click="open = !open" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition-colors focus:outline-none">
                <div class="flex items-center space-x-3">
                    <i class="fa-sharp fa-light fa-users w-5 text-center"></i>
                    <span class="text-sm">Inquiries</span>
                </div>
                <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
            </button>
            <div x-show="open" x-collapse class="mt-1 space-y-1 pl-11 pr-3" style="display: none;">
                <a href="{{ url('/dashboard/sell-property') }}" class="block px-3 py-2 rounded-lg text-sm text-gray-500 hover:text-gray-900 hover:bg-gray-50 transition-colors {{ Request::is('dashboard/sell-property') ? 'text-blue-600 font-semibold' : '' }}">Sell Property</a>
                <a href="{{ url('/dashboard/buy-or-rent') }}" class="block px-3 py-2 rounded-lg text-sm text-gray-500 hover:text-gray-900 hover:bg-gray-50 transition-colors {{ Request::is('dashboard/buy-or-rent') ? 'text-blue-600 font-semibold' : '' }}">Buy or Rent</a>
                <a href="{{ url('/dashboard/join-agent') }}" class="block px-3 py-2 rounded-lg text-sm text-gray-500 hover:text-gray-900 hover:bg-gray-50 transition-colors {{ Request::is('dashboard/join-agent') ? 'text-blue-600 font-semibold' : '' }}">Join Agent</a>
            </div>
        </div>

    </nav>
</div>

<!-- Mobile Overlay -->
<div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 z-20 bg-gray-900 bg-opacity-50 transition-opacity lg:hidden" style="display: none;"></div>
