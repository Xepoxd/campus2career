<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Campus2Career')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1g6">
</head>
<body class="bg-gray-100">

<!-- Background Image (Fixed with Blur) -->
<div class="fixed top-0 left-0 w-full h-full -z-10">
    <img src="{{ asset('images/cui2.jpg') }}" alt="Background" class="w-full h-full object-cover filter blur-lg">
</div>

<!-- Navbar -->
<nav class="bg-blue-600 text-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-3">
            <img src="{{ asset('images/COMSATS.png') }}" alt="COMSATS Logo" class="h-12 w-auto object-contain">
            <span class="text-xl font-bold text-white">Campus2Career</span>
        </a>

        <!-- Navigation Links (Desktop) -->
        <ul class="hidden md:flex space-x-6 text-lg font-semibold">
            <li><a href="{{ url('/home') }}" class="hover:text-yellow-500">Home</a></li>
            <li><a href="{{ url('/about') }}" class="hover:text-yellow-500">About</a></li>
            <li><a href="{{ url('/events') }}" class="hover:text-yellow-500">Events</a></li>
            <li><a href="{{ url('/jobs') }}" class="hover:text-yellow-500">Jobs</a></li>
            <li><a href="{{ url('/internships') }}" class="hover:text-yellow-500">Internships</a></li>
            <li><a href="{{ url('/fyp-projects') }}" class="hover:text-yellow-500">FYP Projects</a></li>
        </ul>

        <!-- Login/Signup Buttons -->
        <div id="auth-links" class="hidden md:flex space-x-4">
            <a href="{{ route('signup') }}" class="px-4 py-2 border border-white text-white rounded-lg">GET STARTED</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col bg-white shadow-md text-centerpx-6 py-4">
        <a href="{{ url('/') }}" class="py-2 text-blue-600">Home</a>
        <a href="{{ url('/about') }}" class="py-2 text-blue-600">About</a>
        <a href="{{ url('/events') }}" class="py-2 text-blue-600">Events</a>
        <a href="{{ url('/jobs') }}" class="py-2 text-blue-600">Jobs</a>
        <a href="{{ url('/internships') }}" class="py-2 text-blue-600">Internships</a>
        <a href="{{ url('/fyp-projects') }}" class="py-2 text-blue-600">FYP Projects</a>

        <!-- Get Started Button at the Bottom -->
        <a href="{{ route('signup') }}" class="py-2 bg-yellow-500 text-white rounded-lg text-center mt-auto">Get Started</a>
    </div>
</nav>

<!-- Content Section -->
<div class="container mx-auto mt-6 px-6 pt-8">
    @yield('content')
</div>

<!-- JavaScript for Mobile Menu -->
<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    // Ensure the menu toggles between show/hide on button click
    menuBtn.addEventListener('click', () => {
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('hidden');
        }
    });
</script>

</body>
</html>
