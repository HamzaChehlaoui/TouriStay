<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamHouse - Real Estate Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .hero-gradient {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.4));
        }

        .property-card:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .accordion-open .accordion-content {
            max-height: 200px;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
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
                <a href="#home" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-14 0v9a1 1 0 001 1h4a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h4a1 1 0 001-1v-9m-14 0l2-2m4-4l2-2"/>
                    </svg>
                    Home
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="#services" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A11.97 11.97 0 0112 21c-6.627 0-12-5.373-12-12 0-3.711 1.686-7.036 4.33-9.246a1 1 0 011.335.086L10 5.333A1 1 0 0110 7l-1.172 1.172a7 7 0 008.485 8.485L19 15.172a1 1 0 001.667-.334l.833-2.5a1 1 0 00-.083-.667A11.971 11.971 0 0121 13.255z"/>
                    </svg>
                    Services
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="#properties" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3a1 1 0 01-1 1H3a1 1 0 01-1-1v-3a1 1 0 01.4-.8l3-2.3a1 1 0 011.2 0l3 2.3a1 1 0 01.4.8zm13-3v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3a1 1 0 01.4-.8l3-2.3a1 1 0 011.2 0l3 2.3a1 1 0 01.4.8z"/>
                    </svg>
                    Properties
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="#faq" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    FAQ
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Contact
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

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center pt-16">
        <div class="absolute inset-0 hero-gradient z-0"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://www.arhomes.com/wp-content/uploads/2022/08/Grayton-Model_FrontDusk01-copy.webp');"></div>
        <div class="relative z-10 w-full">
            <div class="max-w-7xl mx-auto px-6 py-20 md:py-32">
                <div class="max-w-3xl">
                    <span class="bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-medium mb-6 inline-block">Discover Your Dream Home</span>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 text-white leading-tight">Find The Perfect Place <br>To Call Home</h1>
                    <p class="text-xl mb-8 text-gray-100 max-w-2xl">We connect you with premium properties tailored to your lifestyle and preferences, ensuring a seamless journey to your dream home.</p>


                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-3xl font-bold text-blue-600">3,500+</p>
                    <p class="text-gray-600">Properties Listed</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-blue-600">2,800+</p>
                    <p class="text-gray-600">Happy Clients</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-blue-600">150+</p>
                    <p class="text-gray-600">Expert Agents</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-blue-600">12+</p>
                    <p class="text-gray-600">Years of Experience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm font-medium">Our Services</span>
                <h2 class="text-3xl font-bold mt-4">Expert Guidance For Your Real Estate Journey</h2>
                <p class="text-gray-600 mt-4">We offer comprehensive real estate services tailored to your unique needs, ensuring a smooth and satisfying experience.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition property-card">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Buy Properties</h3>
                    <p class="text-gray-600 mb-6">Discover the perfect property that reflects your unique style and needs. Our expert agents will guide you through every step of the buying process.</p>
                    <a href="#" class="text-blue-600 font-medium flex items-center">Learn More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition property-card">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Sell Properties</h3>
                    <p class="text-gray-600 mb-6">Maximize your property's value with our strategic marketing and pricing expertise. Our team ensures you get the best possible return on your investment.</p>
                    <a href="#" class="text-blue-600 font-medium flex items-center">Learn More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition property-card">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Rent Properties</h3>
                    <p class="text-gray-600 mb-6">Find the perfect rental or maximize your rental property's potential. We handle everything from tenant screening to property management.</p>
                    <a href="#" class="text-blue-600 font-medium flex items-center">Learn More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm font-medium">How It Works</span>
                <h2 class="text-3xl font-bold mt-4">Finding Your Dream Home Made Simple</h2>
                <p class="text-gray-600 mt-4">Our streamlined process ensures a smooth and efficient journey to your new home.</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white font-bold text-xl">1</div>
                    <h3 class="text-xl font-semibold mb-3">Search Properties</h3>
                    <p class="text-gray-600">Browse our extensive collection of premium properties.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white font-bold text-xl">2</div>
                    <h3 class="text-xl font-semibold mb-3">Connect with Agent</h3>
                    <p class="text-gray-600">Get expert guidance from our experienced real estate agents.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white font-bold text-xl">3</div>
                    <h3 class="text-xl font-semibold mb-3">Property Tour</h3>
                    <p class="text-gray-600">Schedule visits to your shortlisted properties.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white font-bold text-xl">4</div>
                    <h3 class="text-xl font-semibold mb-3">Close the Deal</h3>
                    <p class="text-gray-600">Finalize your purchase with our streamlined process.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties -->
    <section id="properties" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm font-medium">Featured Properties</span>
                <h2 class="text-3xl font-bold mt-4">Discover Your Perfect Home</h2>
                <p class="text-gray-600 mt-4">Browse our selection of premium properties chosen to match diverse preferences and budgets.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($properties as $property)
<div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition property-card">
    <div class="relative">
        <img src="{{ $property->photos ? asset('storage/' . $property->photos[0]) : '/api/placeholder/400/300' }}"
             alt="{{ $property->name }}"
             class="w-full h-64 object-cover">
        <span class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
            {{ ucfirst($property->type) }}
        </span>
    </div>
    <div class="p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold">{{ $property->name }}</h3>
            <span class="text-blue-600 font-bold">${{ number_format($property->base_price, 2) }}</span>
        </div>
        <p class="text-gray-600 mb-4">{{ Str::limit($property->description, 80) }}</p>
        <div class="flex items-center text-gray-500 mb-4">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span>{{ $property->address }}, {{ $property->city }}, {{ $property->country }}</span>
        </div>
        <div class="flex justify-between border-t pt-4">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                </svg>
                <span>{{ $property->bedrooms }} Beds</span>
            </div>
            <div class="flex items-center">
                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                </svg>
                <span>{{ $property->bathrooms }} Baths</span>
            </div>
            <div class="flex items-center">
                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5"></path>
                </svg>
                <span>{{ $property->max_guests }} Guests</span>
            </div>
        </div>
    </div>
</div>
@endforeach

            </div>


            <!-- Pagination -->
            <div class="flex justify-center mt-8">
                <nav class="inline-flex rounded-md shadow-sm" aria-label="Pagination">
                    <a href="#" class="relative inline-flex items-center px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-50 text-sm font-medium text-blue-600 hover:bg-blue-100">1</a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                    <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">...</span>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">8</a>
                    <a href="#" class="relative inline-flex items-center px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm font-medium">Testimonials</span>
                <h2 class="text-3xl font-bold mt-4">What Our Clients Say</h2>
                <p class="text-gray-600 mt-4">Hear from our satisfied clients about their experience working with us.</p>
            </div>

            <div class="grid md:grid-cols-3">
<!-- Testimonials Section (completion) -->
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Working with DreamHouse was an absolute pleasure. Our agent was knowledgeable, responsive, and truly understood our needs. We found our dream home in record time!"</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/48/48" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <p class="text-gray-500 text-sm">Beverly Hills, CA</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"We sold our property through DreamHouse and couldn't be happier with the results. Their marketing strategy and professional photography helped us get top dollar for our home."</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/48/48" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Michael Thompson</h4>
                            <p class="text-gray-500 text-sm">Portland, OR</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"As first-time homebuyers, we had a lot of questions. Our DreamHouse agent took the time to explain everything and made the process stress-free. Highly recommend!"</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/48/48" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Jennifer & David Lee</h4>
                            <p class="text-gray-500 text-sm">Chicago, IL</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm font-medium">FAQ</span>
                <h2 class="text-3xl font-bold mt-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 mt-4">Find answers to common questions about our services and the real estate process.</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="mb-6 border-b pb-6">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h3 class="text-xl font-semibold">What makes DreamHouse different from other agencies?</h3>
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content mt-4">
                        <p class="text-gray-600">DreamHouse offers a personalized approach to real estate, combining industry expertise with innovative technology. Our agents are carefully selected and trained to provide exceptional service, and we offer comprehensive support throughout your entire real estate journey. We also pride ourselves on our transparent communication and ethical practices.</p>
                    </div>
                </div>

                <div class="mb-6 border-b pb-6">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h3 class="text-xl font-semibold">How long does the buying process typically take?</h3>
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content mt-4">
                        <p class="text-gray-600">The buying process timeline varies depending on several factors including property type, financing, and market conditions. Generally, from initial search to closing, the process takes between 30-90 days. Our agents work efficiently to ensure a smooth and timely transaction while keeping your best interests at heart.</p>
                    </div>
                </div>

                <div class="mb-6 border-b pb-6">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h3 class="text-xl font-semibold">What should I do to prepare my home for selling?</h3>
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content mt-4">
                        <p class="text-gray-600">To maximize your home's appeal, we recommend decluttering, deep cleaning, making minor repairs, enhancing curb appeal, and staging key rooms. Our agents provide a personalized pre-listing consultation to identify specific improvements that could increase your property's value. We also offer professional photography and virtual staging services to showcase your home in the best light.</p>
                    </div>
                </div>

                <div class="mb-6 border-b pb-6">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h3 class="text-xl font-semibold">Do I need a real estate agent to buy a home?</h3>
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content mt-4">
                        <p class="text-gray-600">While it's possible to buy a home without an agent, working with a professional real estate agent provides numerous advantages. Agents have market expertise, negotiation skills, access to more listings (including off-market properties), and can guide you through the complex paperwork and legal requirements. Best of all, as a buyer, agent services are typically paid by the seller, so you receive expert guidance at no direct cost to you.</p>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h3 class="text-xl font-semibold">What are the closing costs when buying a home?</h3>
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content mt-4">
                        <p class="text-gray-600">Closing costs typically range from 2-5% of the purchase price and may include loan origination fees, appraisal fees, title insurance, property taxes, homeowner's insurance, attorney fees, and recording fees. We provide a detailed estimate of closing costs early in the process so you can budget accordingly and avoid surprises at closing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm font-medium">Contact Us</span>
                    <h2 class="text-3xl font-bold mt-4 mb-6">Get in Touch With Our Expert Team</h2>
                    <p class="text-gray-600 mb-8">Have questions or ready to start your real estate journey? Our team is here to help you every step of the way.</p>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Phone</h3>
                                <p class="text-gray-600">+1 (800) 123-4567</p>
                                <p class="text-gray-600">Mon-Fri 9AM-6PM</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Email</h3>
                                <p class="text-gray-600">info@dreamhouse.com</p>
                                <p class="text-gray-600">support@dreamhouse.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Office</h3>
                                <p class="text-gray-600">1234 Real Estate Blvd</p>
                                <p class="text-gray-600">Los Angeles, CA 90001</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                </div>
            </div>
        </div>
    </section>
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
