<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body class="bg-gray-50">
    <nav class="bg-white py-3 px-6 fixed w-full z-10 shadow-lg border-b border-gray-100">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo Area with Subtle Animation -->
            <div class="flex items-center group">
                <div class="text-2xl font-bold text-blue-600 transition-all duration-300 ease-in-out group-hover:scale-105">
                    TouriStay<span class="text-gray-800">2030</span>
                    <div class="h-1 w-0 bg-blue-600 transition-all duration-300 group-hover:w-full"></div>
                </div>
            </div>

            <!-- Main Navigation - Desktop -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="/touris#home" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-14 0v9a1 1 0 001 1h4a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h4a1 1 0 001-1v-9m-14 0l2-2m4-4l2-2"/>
                    </svg>
                    Home
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="/touris#services" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A11.97 11.97 0 0112 21c-6.627 0-12-5.373-12-12 0-3.711 1.686-7.036 4.33-9.246a1 1 0 011.335.086L10 5.333A1 1 0 0110 7l-1.172 1.172a7 7 0 008.485 8.485L19 15.172a1 1 0 001.667-.334l.833-2.5a1 1 0 00-.083-.667A11.971 11.971 0 0121 13.255z"/>
                    </svg>
                    Services
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="/touris#properties" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3a1 1 0 01-1 1H3a1 1 0 01-1-1v-3a1 1 0 01.4-.8l3-2.3a1 1 0 011.2 0l3 2.3a1 1 0 01.4.8zm13-3v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3a1 1 0 01.4-.8l3-2.3a1 1 0 011.2 0l3 2.3a1 1 0 01.4.8z"/>
                    </svg>
                    Properties
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="/touris#faq" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    FAQ
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="/favorites" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                    Favorites
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
            </div>

            <!-- Search and User Actions -->
            <div class="flex items-center space-x-4">
                <!-- Enhanced Search Box with Dropdown -->
                <div class="relative group">
                    <input type="text" placeholder="Search properties..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent w-64 transition-all duration-300 group-hover:shadow-md">
                    <div class="absolute left-3 top-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 group-hover:text-blue-500 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <!-- Search Quick Categories -->
                    <div class="absolute mt-1 w-full bg-white rounded-md shadow-lg hidden group-focus-within:block z-20 border border-gray-100">
                        <div class="p-2 text-xs text-gray-500">Quick Filters:</div>
                        <div class="flex flex-wrap p-2 gap-1">
                            <span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs cursor-pointer hover:bg-blue-100">Beach Properties</span>
                            <span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs cursor-pointer hover:bg-blue-100">Mountain View</span>
                            <span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs cursor-pointer hover:bg-blue-100">Family Friendly</span>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <button id="dropdown-button" class="flex items-center space-x-1 bg-white border border-gray-300 hover:border-blue-500 px-3 py-1.5 rounded-full transition duration-300 focus:outline-none">
                        <span class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xs">U</span>
                        <span class="text-sm font-medium text-gray-700">User</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="dropdown-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden z-20 border border-gray-100 py-1">
                        <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                My Profile
                            </div>
                        </a>

                        <div class="border-t border-gray-100 my-1"></div>

                        <form method="POST" action="{{ route('logout') }}" class="block w-full">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    {{ __('Log Out') }}
                                </div>
                            </button>
                        </form>

                    </div>
                </div>

            </div>

            <!-- Mobile Menu Button - Hidden on Desktop -->
            <div class="lg:hidden ml-2">
                <button class="p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Dropdown - Hidden by Default -->
        <div class="hidden lg:hidden absolute top-full left-0 right-0 bg-white shadow-lg border-t border-gray-100 z-10">
            <div class="py-2 px-4">
                <a href="#home" class="block py-2 text-gray-700 hover:text-blue-600">Home</a>
                <a href="#services" class="block py-2 text-gray-700 hover:text-blue-600">Services</a>
                <a href="#properties" class="block py-2 text-gray-700 hover:text-blue-600">Properties</a>
                <a href="#faq" class="block py-2 text-gray-700 hover:text-blue-600">FAQ</a>
                <a href="#contact" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a>
                <div class="border-t border-gray-200 my-2"></div>
                <div class="relative mt-3">
                    <input type="text" placeholder="Search properties..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <div class="absolute left-3 top-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
</nav>
<br><br><br>
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <h2 class="text-3xl font-bold mb-6 text-indigo-700 border-b pb-2 border-indigo-200">Your Favorite Properties</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($favorites as $favorite)
                <div class="border rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 bg-white relative">
                    <!-- Optional: Add an image placeholder -->
                    <div class="h-48 bg-indigo-100 flex items-center justify-center">
                        <img src="{{ $favorite->photos ? asset('storage/' . $favorite->photos[0]) : '/api/placeholder/400/300' }}"
                        alt="{{ $favorite->name }}"
                        class="w-full h-64 object-cover"
                        loading="lazy">    <br> </div>

                    <div class="p-5">
                        <br>
                        <h3 class="text-xl font-semibold text-gray-800 mb-1">{{ $favorite->name }}</h3>
                        <p class="text-gray-600 flex items-center mb-2">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            {{ $favorite->city }}, {{ $favorite->country }}
                        </p>
                        <p class="text-gray-700 font-medium mt-3 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-7.536 5.879a1 1 0 001.415 0 3 3 0 014.242 0 1 1 0 001.415-1.415 5 5 0 00-7.072 0 1 1 0 000 1.415z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-indigo-600">${{ $favorite->base_price }}</span> per night
                        </p>

                        <!-- Add action buttons -->
                        <div class="mt-4 flex justify-between">
                            <button class="bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-3 rounded-md text-sm font-medium transition-colors duration-300">
                                Book Now
                            </button>
                            <button class="text-red-500 hover:text-gray-500 transition-colors duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination section if needed -->
        <div class="mt-8 flex justify-center">
            <nav class="inline-flex rounded-md shadow">
                <a href="#" class="py-2 px-4 border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    Previous
                </a>
                <a href="#" class="py-2 px-4 border-t border-b border-r border-gray-300 bg-indigo-50 text-sm font-medium text-indigo-600">
                    1
                </a>
                <a href="#" class="py-2 px-4 border-t border-b border-r border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    2
                </a>
                <a href="#" class="py-2 px-4 border-t border-b border-r border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    3
                </a>
                <a href="#" class="py-2 px-4 border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    Next
                </a>
            </nav>
        </div>
    </div>
</body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dropdownButton = document.getElementById("dropdown-button");
        const dropdownMenu = document.getElementById("dropdown-menu");

        dropdownButton.addEventListener("click", function (event) {
            event.stopPropagation();
            dropdownMenu.classList.toggle("hidden");
        });


        document.addEventListener("click", function (event) {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });
    });


</script>
