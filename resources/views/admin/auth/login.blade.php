<!DOCTYPE html>
<html lang="en" class="antialiased bg-gray-50 text-gray-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Siperantara</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
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
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-pro.css') }}">
</head>
<body class="font-sans min-h-screen flex items-center justify-center bg-gray-50 relative overflow-hidden">

    <!-- Decorative Background -->
    <div class="absolute inset-0 z-0">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute top-40 left-40 w-72 h-72 bg-pink-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
    </div>

    <!-- Main Content -->
    <div class="w-full max-w-5xl mx-auto p-6 z-10">
        <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row border border-white/40">
            
            <!-- Left Side: Image / Branding -->
            <div class="w-full md:w-1/2 relative hidden md:block bg-gray-900 overflow-hidden">
                <img src="{{ asset('assets/images/sign/login-img.png') }}" alt="Siperantara Login" class="absolute inset-0 w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                <!-- Subtle dark overlay to blend edges if necessary -->
                <div class="absolute inset-0 bg-black/10"></div>
            </div>
            
            <!-- Right Side: Form -->
            <div class="w-full md:w-1/2 p-8 md:p-12 lg:p-16 flex flex-col justify-center bg-white relative">
                <div class="mb-10 text-center md:text-left">
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Hello Again!</h3>
                    <p class="text-gray-500">Sign in to your administrator account.</p>
                </div>
                
                @if (session('error'))
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-8 rounded-md">
                    <div class="flex items-center">
                        <i class="fa-solid fa-circle-exclamation text-red-500 mr-3"></i>
                        <p class="text-sm text-red-700">{{ session('error') }}</p>
                    </div>
                </div>
                @endif
                
                <form class="space-y-6" action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fa-regular fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors sm:text-sm outline-none" placeholder="admin@example.com">
                        </div>
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fa-regular fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password" name="password" required class="block w-full pl-11 pr-12 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors sm:text-sm outline-none" placeholder="••••••••">
                            <button type="button" class="toggle-password absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-blue-500 focus:outline-none transition-colors">
                                <i class="fa-regular fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded cursor-pointer">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700 cursor-pointer">
                                Remember me
                            </label>
                        </div>
                    </div>
                    
                    <div>
                        <button type="submit" class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-xl shadow-lg shadow-blue-500/30 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 hover:shadow-blue-600/40 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300">
                            Sign In
                        </button>
                    </div>
                </form>
                
                <div class="mt-8 text-center text-sm text-gray-500">
                    &copy; {{ date('Y') }} Siperantara. All rights reserved.
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Animations CSS -->
    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>

    <script>
        document.querySelector('.toggle-password').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
    
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>
