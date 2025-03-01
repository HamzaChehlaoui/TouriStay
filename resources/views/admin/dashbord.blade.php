<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TouriStay2030 - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .property-card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 4px 8px;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
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

            <!-- Admin Navigation - Desktop -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="#dashboard" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-14 0v9a1 1 0 001 1h4a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h4a1 1 0 001-1v-9m-14 0l2-2m4-4l2-2"/>
                    </svg>
                    Dashboard
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="#properties" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3a1 1 0 01-1 1H3a1 1 0 01-1-1v-3a1 1 0 01.4-.8l3-2.3a1 1 0 011.2 0l3 2.3a1 1 0 01.4.8zm13-3v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3a1 1 0 01.4-.8l3-2.3a1 1 0 011.2 0l3 2.3a1 1 0 01.4.8z"/>
                    </svg>
                    Properties
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="#reports" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Reports
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="#users" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    Users
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
                <a href="#settings" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 transform -translate-x-1/2 transition-all duration-300 group-hover:w-2/3"></span>
                </a>
            </div>

            <!-- User Profile -->
            <div class="relative">
                <button id="dropdown-button" class="flex items-center space-x-1 bg-white border border-gray-300 hover:border-blue-500 px-3 py-1.5 rounded-full transition duration-300 focus:outline-none">
                    <span class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xs">A</span>
                    <span class="text-sm font-medium text-gray-700">Admin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div id="dropdown-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden z-20 border border-gray-100 py-1">
                    <a href="/admin/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
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
                                Log Out
                            </div>
                        </button>
                    </form>
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
    </nav>

    <!-- Main Content Area -->
    <div class="pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Dashboard Header Section -->
            <section id="dashboard" class="py-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Admin Dashboard</h1>
                        <p class="text-gray-600">Manage properties, users, and reports across the platform</p>
                    </div>
                    <div class="mt-4 md:mt-0 flex space-x-3">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                            <span class="w-2 h-2 bg-green-600 rounded-full mr-1"></span>
                            System Online
                        </span>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                            Last updated: 10 min ago
                        </span>
                    </div>
                </div>

                <!-- Stats Cards Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Total Listings Card -->
                    <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 hover:shadow-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">number of registrations</p>
                                <p class="text-3xl font-bold text-gray-900">{{$nomberUser}}</p>
                            </div>
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span class="text-green-500 text-sm font-medium flex items-center mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                                8.2%
                            </span>
                            <span class="text-gray-500 text-sm">vs last month</span>
                        </div>
                    </div>

                    <!-- Active Listings Card -->
                    <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 hover:shadow-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Active Listings</p>
                                <p class="text-3xl font-bold text-gray-900">{{$nomberActiveAds}}</p>
                            </div>
                            <div class="p-3 rounded-full bg-green-100 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span class="text-green-500 text-sm font-medium flex items-center mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                                3.7%
                            </span>
                            <span class="text-gray-500 text-sm">vs last month</span>
                        </div>
                    </div>

                    <!-- Rentals This Month Card -->
                    <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 hover:shadow-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Nomber Location</p>
                                <p class="text-3xl font-bold text-gray-900">{{$nomberLocations}}</p>
                            </div>
                            <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span class="text-green-500 text-sm font-medium flex items-center mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                                12.4%
                            </span>
                            <span class="text-gray-500 text-sm">vs last month</span>
                        </div>
                    </div>


                </div>

                <!-- Chart Section -->
                <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Listings Over Time Chart -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-lg font-semibold text-gray-900">Listings Over Time</h2>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">Monthly</button>
                                <button class="px-3 py-1 text-sm bg-gray-100 text-gray-600 rounded-full">Yearly</button>
                            </div>
                        </div>
                        <div class="chart-container">
                            <img src="https://thumbs.dreamstime.com/b/abstract-growing-forex-chart-hologram-map-blurry-toned-city-wallpaper-stock-market-financial-growth-trade-concept-343597584.jpg" alt="Listings Over Time Chart" class="w-full h-full object-cover rounded">
                        </div>
                    </div>

                    <!-- Rental Performance Chart -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-lg font-semibold text-gray-900">Rental Performance</h2>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">Weekly</button>
                                <button class="px-3 py-1 text-sm bg-gray-100 text-gray-600 rounded-full">Monthly</button>
                            </div>
                        </div>
                        <div class="chart-container">
                            <img src="https://cdn.prod.website-files.com/659db366e66b3dfd13714554/66f70410244397285979f67b_shutterstock_2483673337.jpg" alt="Rental Performance Chart" class="w-full h-full object-cover rounded">
                        </div>
                    </div>
                </div>
            </section>
                {{-- romplasia --}}
            <section id="properties" class="py-8 mt-4">
                <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-4 md:gap-8">
                    @foreach($properties as $property)
                        <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition property-card">
                            <div class="relative">
                                <img src="{{ $property->photos ? asset('storage/' . $property->photos[0]) : '/api/placeholder/400/300' }}"
                                    alt="{{ $property->name }}"
                                    class="w-full h-64 object-cover"
                                    loading="lazy">
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
                                    <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span class="truncate">{{ $property->address }}, {{ $property->city }}, {{ $property->country }}</span>
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
                                <<form action="{{ route('properties.destroy', $property->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:text-red-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- User Reports Section -->
            <section id="reports" class="py-8 mt-4">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Recent Reports Card -->
                    <div class="lg:col-span-2 bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-100">
                            <h2 class="text-lg font-bold text-gray-900">Recent Reports</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <!-- Report Item 1 -->
                                <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h3 class="text-md font-medium text-gray-900">Inaccurate Location Information</h3>
                                            <p class="text-sm text-gray-500 mt-1">PRO-54219 - Downtown Loft</p>
                                        </div>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">High Priority</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2">The property location is listed as being in downtown, but it's actually in a suburb 5 miles away from downtown.</p>
                                    <div class="flex justify-between items-center mt-3">
                                        <div class="text-xs text-gray-500">Reported by: Alex Wong · 2 days ago</div>
                                        <div class="flex space-x-2">
                                            <button class="px-3 py-1 text-xs bg-blue-100 text-blue-600 rounded-full hover:bg-blue-200 transition-colors">
                                                Review
                                            </button>
                                            <button class="px-3 py-1 text-xs bg-red-100 text-red-600 rounded-full hover:bg-red-200 transition-colors">
                                                Suspend
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Report Item 2 -->
                                <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h3 class="text-md font-medium text-gray-900">Misleading Photos</h3>
                                            <p class="text-sm text-gray-500 mt-1">PRO-37624 - Lakeside Cabin</p>
                                        </div>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">Medium Priority</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2">The photos appear to be from a different property. The actual cabin is much smaller and in worse condition than shown.</p>
                                    <div class="flex justify-between items-center mt-3">
                                        <div class="text-xs text-gray-500">Reported by: Jamie Lee · 3 days ago</div>
                                        <div class="flex space-x-2">
                                            <button class="px-3 py-1 text-xs bg-blue-100 text-blue-600 rounded-full hover:bg-blue-200 transition-colors">
                                                Review
                                            </button>
                                            <button class="px-3 py-1 text-xs bg-red-100 text-red-600 rounded-full hover:bg-red-200 transition-colors">
                                                Suspend
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Report Item 3 -->
                                <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h3 class="text-md font-medium text-gray-900">Safety Concerns</h3>
                                            <p class="text-sm text-gray-500 mt-1">PRO-29145 - Urban Studio</p>
                                        </div>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">High Priority</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2">Smoke detectors not working and exposed electrical wiring in the bathroom. Host was notified but hasn't fixed the issues.</p>
                                    <div class="flex justify-between items-center mt-3">
                                        <div class="text-xs text-gray-500">Reported by: Tanya Richards · 1 day ago</div>
                                        <div class="flex space-x-2">
                                            <button class="px-3 py-1 text-xs bg-blue-100 text-blue-600 rounded-full hover:bg-blue-200 transition-colors">
                                                Review
                                            </button>
                                            <button class="px-3 py-1 text-xs bg-red-100 text-red-600 rounded-full hover:bg-red-200 transition-colors">
                                                Suspend
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 text-center">
                                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    View All Reports →
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Report Stats Card -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-100">
                            <h2 class="text-lg font-bold text-gray-900">Report Statistics</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-5">
                                <!-- Category Breakdown -->
                                <div>
                                    <h3 class="text-sm font-medium text-gray-700 mb-2">Reports by Category</h3>
                                    <div class="space-y-2">
                                        <div>
                                            <div class="flex justify-between text-xs text-gray-700 mb-1">
                                                <span>Inaccurate Information</span>
                                                <span>38%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-blue-600 h-2 rounded-full" style="width: 38%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-xs text-gray-700 mb-1">
                                                <span>Safety Issues</span>
                                                <span>27%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-red-600 h-2 rounded-full" style="width: 27%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-xs text-gray-700 mb-1">
                                                <span>Misleading Photos</span>
                                                <span>21%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-yellow-600 h-2 rounded-full" style="width: 21%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-xs text-gray-700 mb-1">
                                                <span>Host Behavior</span>
                                                <span>14%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-green-600 h-2 rounded-full" style="width: 14%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!-- Report Stats Card -->
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="text-lg font-bold text-gray-900">Report Statistics</h2>
    </div>
    <div class="p-6">
        <div class="space-y-5">
            <!-- Category Breakdown -->
            <div>
                <h3 class="text-sm font-medium text-gray-700 mb-2">Reports by Category</h3>
                <div class="space-y-2">
                    <div>
                        <div class="flex justify-between text-xs text-gray-700 mb-1">
                            <span>Inaccurate Information</span>
                            <span>38%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 38%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs text-gray-700 mb-1">
                            <span>Safety Issues</span>
                            <span>27%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-red-600 h-2 rounded-full" style="width: 27%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs text-gray-700 mb-1">
                            <span>Misleading Photos</span>
                            <span>21%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-600 h-2 rounded-full" style="width: 21%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs text-gray-700 mb-1">
                            <span>Host Behavior</span>
                            <span>14%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 14%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Monthly Trend -->
            <div>
                <h3 class="text-sm font-medium text-gray-700 mb-2">Monthly Report Trend</h3>
                <div class="h-32 flex items-end space-x-2">
                    <div class="flex flex-col items-center">
                        <div class="bg-indigo-500 w-8 rounded-t" style="height: 40%"></div>
                        <span class="text-xs mt-1 text-gray-500">Jan</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-indigo-500 w-8 rounded-t" style="height: 60%"></div>
                        <span class="text-xs mt-1 text-gray-500">Feb</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-indigo-500 w-8 rounded-t" style="height: 75%"></div>
                        <span class="text-xs mt-1 text-gray-500">Mar</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-indigo-500 w-8 rounded-t" style="height: 50%"></div>
                        <span class="text-xs mt-1 text-gray-500">Apr</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-indigo-500 w-8 rounded-t" style="height: 65%"></div>
                        <span class="text-xs mt-1 text-gray-500">May</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-indigo-500 w-8 rounded-t" style="height: 90%"></div>
                        <span class="text-xs mt-1 text-gray-500">Jun</span>
                    </div>
                </div>
            </div>

            <!-- Resolution Stats -->
            <div>
                <h3 class="text-sm font-medium text-gray-700 mb-2">Resolution Statistics</h3>
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div class="bg-gray-50 p-3 rounded">
                        <p class="text-2xl font-bold text-green-600">72%</p>
                        <p class="text-xs text-gray-500">Resolved</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <p class="text-2xl font-bold text-yellow-600">18%</p>
                        <p class="text-xs text-gray-500">In Progress</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <p class="text-2xl font-bold text-red-600">10%</p>
                        <p class="text-xs text-gray-500">Pending</p>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div>
                <h3 class="text-sm font-medium text-gray-700 mb-2">Recent Activity</h3>
                <div class="space-y-2">
                    <div class="flex items-center p-2 bg-gray-50 rounded">
                        <div class="w-2 h-2 rounded-full bg-green-500 mr-2"></div>
                        <p class="text-xs">Safety issue #1293 resolved - 2h ago</p>
                    </div>
                    <div class="flex items-center p-2 bg-gray-50 rounded">
                        <div class="w-2 h-2 rounded-full bg-yellow-500 mr-2"></div>
                        <p class="text-xs">Misleading photo report #4587 updated - 5h ago</p>
                    </div>
                    <div class="flex items-center p-2 bg-gray-50 rounded">
                        <div class="w-2 h-2 rounded-full bg-blue-500 mr-2"></div>
                        <p class="text-xs">New report submitted for review - 6h ago</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between pt-2">
                <button class="px-4 py-2 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700">
                    View All Reports
                </button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 text-sm rounded hover:bg-gray-300">
                    Export Data
                </button>
            </div>
        </div>
    </div>
</div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
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
