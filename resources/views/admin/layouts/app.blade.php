<!DOCTYPE html>
<html lang="en" class="antialiased bg-gray-50 text-gray-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title == 'Dashboard' ? '' : ($title . ' | ') }}Dashboard Siperantara</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#64748b',
                    }
                }
            }
        }
    </script>
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- FontAwesome & Plugins (Keep needed CSS) -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/dropzone.min.css') }}">
    
    @stack('styles')
</head>
<body class="font-sans flex h-screen overflow-hidden bg-gray-50" x-data="{ sidebarOpen: false }">

    <!-- Sidebar -->
    @include('admin.layouts.partials.sidebar')

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col h-screen overflow-hidden">
        
        <!-- Header -->
        <header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-6 shrink-0 shadow-sm z-10">
            <div class="flex items-center">
                <!-- Mobile menu button (Alpine) -->
                <button class="lg:hidden text-gray-500 hover:text-gray-700 focus:outline-none" @click="sidebarOpen = !sidebarOpen">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
            
            <div class="flex items-center space-x-4 relative" x-data="{ userMenuOpen: false }">
                <!-- Profile dropdown -->
                <button @click="userMenuOpen = !userMenuOpen" @click.away="userMenuOpen = false" class="flex items-center space-x-3 focus:outline-none">
                    <img class="h-9 w-9 rounded-full object-cover border border-gray-200" src="{{ asset('assets/images/agent/agent-01.png') }}" alt="Admin avatar">
                    <span class="hidden md:block text-sm font-medium text-gray-700">{{ Auth::user()->name }}</span>
                    <i class="fa-solid fa-chevron-down text-xs text-gray-400"></i>
                </button>
                
                <!-- Dropdown menu -->
                <div x-show="userMenuOpen" x-transition class="absolute right-0 top-12 w-48 bg-white rounded-lg shadow-lg py-1 border border-gray-100 z-50" style="display: none;">
                    <a href="{{ url('/') }}" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fa-solid fa-house mr-2 text-blue-500"></i> Kunjungi Website
                    </a>
                    <div class="border-t border-gray-100 my-1"></div>
                    <form action="{{ route('logout') }}" method="POST" class="block w-full">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-50 transition-colors">
                            <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <!-- Main Content (Scrollable) -->
        <main class="flex-1 overflow-y-auto p-6 bg-gray-50">
            @yield('content-admin')
        </main>
    </div>

    <!-- Core Scripts -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
    
    @stack('scripts')
</body>
</html>