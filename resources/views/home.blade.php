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
    <nav class="bg-white py-4 px-6 fixed w-full z-10 shadow-sm">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <div class="text-2xl font-bold text-blue-600">Dream<span class="text-gray-800">House</span></div>
            </div>
            <div class="hidden lg:flex space-x-8">
                <a href="#home" class="text-gray-700 hover:text-blue-600 transition font-medium">Home</a>
                <a href="#services" class="text-gray-700 hover:text-blue-600 transition font-medium">Services</a>
                <a href="#properties" class="text-gray-700 hover:text-blue-600 transition font-medium">Properties</a>
                <a href="#faq" class="text-gray-700 hover:text-blue-600 transition font-medium">FAQ</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 transition font-medium">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
                <button class="hidden md:block bg-gray-100 text-gray-700 px-5 py-2 rounded-full hover:bg-gray-200 transition font-medium">Sign In</button>
                <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition font-medium shadow-md">Get Started</button>
                <button class="lg:hidden text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
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

                    <div class="bg-white p-6 rounded-xl shadow-lg max-w-3xl mt-8">
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="col-span-4 md:col-span-1">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Property Type</label>
                                <select class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option>All Types</option>
                                    <option>House</option>
                                    <option>Apartment</option>
                                    <option>Condo</option>
                                </select>
                            </div>
                            <div class="col-span-4 md:col-span-1">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Location</label>
                                <select class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option>Any Location</option>
                                    <option>New York</option>
                                    <option>Los Angeles</option>
                                    <option>Chicago</option>
                                </select>
                            </div>
                            <div class="col-span-4 md:col-span-1">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Price Range</label>
                                <select class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option>Any Price</option>
                                    <option>$100k - $300k</option>
                                    <option>$300k - $500k</option>
                                    <option>$500k - $1M</option>
                                </select>
                            </div>
                            <div class="col-span-4 md:col-span-1 flex items-end">
                                <button class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition font-medium shadow-md">Search</button>
                            </div>
                        </div>
                    </div>
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
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition property-card">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Modern Family Villa" class="w-full h-64 object-cover">
                        <span class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">For Sale</span>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-semibold">Modern Family Villa</h3>
                            <span class="text-blue-600 font-bold">$650,000</span>
                        </div>
                        <p class="text-gray-600 mb-4">Luxurious 4-bedroom villa with modern amenities</p>
                        <div class="flex items-center text-gray-500 mb-4">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>123 Maple Street, Beverly Hills</span>
                        </div>
                        <div class="flex justify-between border-t pt-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                                </svg>
                                <span>4 Beds</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                </svg>
                                <span>3 Baths</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5"></path>
                                </svg>
                                <span>2,800 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition property-card">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Waterfront Condominium" class="w-full h-64 object-cover">
                        <span class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">For Sale</span>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-semibold">Waterfront Condominium</h3>
                            <span class="text-blue-600 font-bold">$845,000</span>
                        </div>
                        <p class="text-gray-600 mb-4">Stunning 3-bedroom condo with ocean views</p>
                        <div class="flex items-center text-gray-500 mb-4">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>456 Ocean Drive, Malibu</span>
                        </div>
                        <div class="flex justify-between border-t pt-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                                </svg>
                                <span>3 Beds</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                </svg>
                                <span>2 Baths</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5"></path>
                                </svg>
                                <span>2,100 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition property-card">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Renovated Ready" class="w-full h-64 object-cover">
                        <span class="absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">For Rent</span>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-semibold">Renovated Townhouse</h3>
                            <span class="text-blue-600 font-bold">$450,000</span>
                        </div>
                        <p class="text-gray-600 mb-4">Beautifully renovated 2-bedroom townhouse</p>
                        <div class="flex items-center text-gray-500 mb-4">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>789 Oak Avenue, Portland</span>
                        </div>
                        <div class="flex justify-between border-t pt-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                                </svg>
                                <span>2 Beds</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                </svg>
                                <span>1.5 Baths</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5"></path>
                                </svg>
                                <span>1,500 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition font-medium shadow-md">View All Properties</a>
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

            <div class="grid md:grid-cols-3
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
                    <div class="bg-gray-50 rounded-xl p-8 shadow-md">
                        <h3 class="text-2xl font-semibold mb-6">Send Us a Message</h3>
                        <form>
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2">First Name</label>
