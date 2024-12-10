<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVI-Homes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-900">
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 lg:px-8 py-4 flex items-center justify-between">
            <!-- Logo -->
            <div class="text-yellow-500 font-bold text-xl">
                <a href="#" class="flex items-center space-x-2">
                    <span class="text-blue-black">EviHomes</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center space-x-6 text-blue-black font-medium">
                <a href="#" class="hover:text-yellow-500 transition">Home</a>
                <a href="#about" class="hover:text-yellow-500 transition">About</a>
                <a href="#contact" class="hover:text-yellow-500 transition">Contact Us</a>
                <a href="#help" class="hover:text-yellow-500 transition">Help</a>
            </nav>

            <!-- Right Side Buttons -->
            <div class="flex items-center space-x-4">
                <!-- Language Switcher -->
                <button
                    class="hidden lg:block bg-gray-200 text-blue-black px-4 py-2 rounded hover:bg-yellow-500 hover:text-white transition">
                    EN
                </button>
                <!-- Login / Sign-Up -->
                <a href="#login" class="text-blue-black hover:text-yellow-500 font-medium">Login</a>
                <a href="#signup" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
                    Sign-Up
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button id="menuToggle" class="block md:hidden text-blue-black focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <nav id="mobileMenu" class="hidden md:hidden bg-white shadow-md text-blue-black">
            <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Home</a>
            <a href="#about" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">About</a>
            <a href="#contact" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Contact Us</a>
            <a href="#help" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Help</a>
            <a href="#login" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Login</a>
            <a href="#signup" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Sign-Up</a>
        </nav>
    </header>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>