@extends('web.layouts.main')

@section('title')
shop
@endsection

@section('content')
<section class="relative min-h-screen">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <img src="{{ asset('assets/images/headers/freepik__the-style-is-candid-image-photography-with-natural__63513.png') }}" 
             alt="Header Background" 
             class="w-full h-full object-cover">
    </div>

    <!-- Navigation -->
    <nav class="relative z-50 ">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">

                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="inline-block">
                        <img class="w-12 h-12 rounded-full object-cover" src="{{ asset('assets/images/logos/logo.jpg') }}" alt="logo">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="#Shop" class="nav-link">Shop</a>
                    <a href="#Routine" class="nav-link">Routine</a>
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden  md:flex items-center space-x-10">
                    <!-- Cart Icon with Badge -->
                    <a href="#" class="icon">
                        <i class="fas fa-shopping-bag text-2xl"></i>
                        <!-- Dynamic Cart Count -->
                        <span class="absolute -top-2 -right-2 bg-gradient-to-r from-orange-500 to-red-500 text-white text-xs w-5 h-5 rounded-full flex items-center justify-center font-bold shadow-lg">
                            {{ session('cart_count', 0) }}
                        </span>
                    </a>

                    <!-- Language Selector -->
                    <div class="relative">
                        <select class="bg-white/5 backdrop-blur-md text-white border border-white/20 rounded-lg px-4 py-2 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-orange-100 cursor-pointer appearance-none hover:bg-white/10 transition-all">
                            <option value="en" class="bg-gray-900 text-white">English</option>
                            <option value="ar" class="bg-gray-900 text-white">العربية</option>
                        </select>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center space-x-4">

                    <a href="#" class="icon">
                        <i class="fas fa-shopping-bag text-2xl"></i>
                        <!-- Dynamic Cart Count -->
                        <span class="absolute -top-2 -right-2 bg-gradient-to-r from-orange-500 to-red-500 text-white text-xs w-5 h-5 rounded-full flex items-center justify-center font-bold shadow-lg">
                            {{ session('cart_count', 0) }}
                        </span>
                    </a>

                <!-- Language Selector - Mobile -->
              <div class="relative">
                        <select class="bg-white/5 backdrop-blur-md text-white border border-white/20 rounded-lg px-4 py-2 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-orange-100 cursor-pointer appearance-none hover:bg-white/10 transition-all">
                            <option value="en" class="bg-gray-900 text-white">English</option>
                            <option value="ar" class="bg-gray-900 text-white">العربية</option>
                        </select>
             </div>


                    <button id="mobile-menu-button" class="text-white hover:text-orange-100 focus:outline-none cursor-pointer">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-footer backdrop-blur-md">
            <div class="px-4 pt-2 pb-4 space-y-2 bg-footer">
                <a href="#home" class="block nav-link">Home</a>
                <a href="#about" class="block nav-link">About</a>
                <a href="#Shop" class="block nav-link">Shop</a>
                <a href="#Routine" class="block nav-link">Routine</a>
                <a href="#contact" class="block nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Content -->
 <div class="relative z-40 container mx-auto px-4 flex items-center justify-center" style="height: calc(100vh - 5rem);">
    <div class="text-center space-y-8">
        <h1 class="text-white text-6xl md:text-7xl lg:text-8xl font-bold tracking-wider uppercase mx-4">
            NATURA CAPELLI
        </h1>

        <h2 class="text-white text-xl md:text-2xl mx-4 font-medium">
            Collection & Best Collection
        </h2>

        <div class="pt-4">
            <a href="#" class="custom-btn">
                We Support Your Choice
            </a>
        </div>
    </div>
</div>
</section>

<section class="py-16 md:py-24 bg-black">
    <div class="container mx-auto px-4">
        <h2 class="text-center font-bold text-white text-4xl mb-2">Featured Products</h2>
        <p class="text-gray-400 text-center mb-12">Discover our Products</p>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Sidebar Filter -->
            <aside class="lg:w-64 flex-shrink-0">
                <div class="bg-gray-900 rounded-lg p-6 sticky top-4">
                    <h3 class="text-white font-bold text-xl mb-6">Filters</h3>
                    
                    <!-- Price Range Filter -->
                    <div class="mb-8">
                        <h4 class="text-white font-semibold mb-4 flex items-center justify-between">
                            <span>Price Range</span>
                            <button type="button" class="text-orange-500 text-sm hover:text-orange-400">Reset</button>
                        </h4>
                        
                        <!-- Price Range Slider -->
                        <div class="mb-4">
                            <input type="range" min="0" max="500" value="500" class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer accent-orange-500">
                            <div class="flex justify-between text-gray-400 text-sm mt-2">
                                <span>$0</span>
                                <span>$500</span>
                            </div>
                        </div>

                        <!-- Price Checkboxes -->
                        <div class="space-y-3">
                            <label class="flex items-center text-gray-300 hover:text-white cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-600 bg-gray-700 text-orange-500 focus:ring-orange-500 focus:ring-offset-gray-900">
                                <span class="ml-3">Under $50</span>
                            </label>
                            <label class="flex items-center text-gray-300 hover:text-white cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-600 bg-gray-700 text-orange-500 focus:ring-orange-500 focus:ring-offset-gray-900">
                                <span class="ml-3">$50 - $100</span>
                            </label>
                            <label class="flex items-center text-gray-300 hover:text-white cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-600 bg-gray-700 text-orange-500 focus:ring-orange-500 focus:ring-offset-gray-900">
                                <span class="ml-3">$100 - $200</span>
                            </label>
                            <label class="flex items-center text-gray-300 hover:text-white cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-600 bg-gray-700 text-orange-500 focus:ring-orange-500 focus:ring-offset-gray-900">
                                <span class="ml-3">$200 - $500</span>
                            </label>
                        </div>
                    </div>

                    <!-- Category Filter -->
                    <div class="mb-8">
                        <h4 class="text-white font-semibold mb-4">Category</h4>
                        <div class="space-y-3">
                            <label class="flex items-center text-gray-300 hover:text-white cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-600 bg-gray-700 text-orange-500 focus:ring-orange-500 focus:ring-offset-gray-900">
                                <span class="ml-3">Shampoo</span>
                            </label>
                            <label class="flex items-center text-gray-300 hover:text-white cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-600 bg-gray-700 text-orange-500 focus:ring-orange-500 focus:ring-offset-gray-900">
                                <span class="ml-3">Conditioner</span>
                            </label>
                            <label class="flex items-center text-gray-300 hover:text-white cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-600 bg-gray-700 text-orange-500 focus:ring-orange-500 focus:ring-offset-gray-900">
                                <span class="ml-3">Hair Mask</span>
                            </label>
                            <label class="flex items-center text-gray-300 hover:text-white cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-600 bg-gray-700 text-orange-500 focus:ring-orange-500 focus:ring-offset-gray-900">
                                <span class="ml-3">Hair Oil</span>
                            </label>
                        </div>
                    </div>

                    <!-- Apply Filter Button -->
                    <button class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-red-600 transition-all">
                        Apply Filters
                    </button>
                </div>
            </aside>

            <!-- Products Grid -->
            <div class="flex-1">
                <!-- Sort and View Options -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                    <p class="text-gray-400">Showing 1-9 of 24 products</p>
                    <div class="flex items-center gap-4">
                        <select class="bg-gray-900 text-white border border-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <option>Sort by: Featured</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest</option>
                        </select>
                    </div>
                </div>

                <!-- Products Grid - 3 Columns -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <x-product></x-product>
                    <x-product></x-product>
                    <x-product></x-product>
                    <x-product></x-product>
                    <x-product></x-product>
                    <x-product></x-product>
                    <x-product></x-product>
                    <x-product></x-product>
                    <x-product></x-product>
                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center gap-2">
                        <button class="px-4 py-2 bg-gray-900 text-gray-400 rounded-lg hover:bg-gray-800">Previous</button>
                        <button class="px-4 py-2 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-lg">1</button>
                        <button class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800">2</button>
                        <button class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800">3</button>
                        <button class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800">Next</button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<footer class="bg-footer">
    <!-- Main Footer Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-8 justify-between items-center pb-6 border-b border-gray-700">
            <!-- Logo -->
            <img class="w-16 h-16 rounded-full object-cover shadow-lg" src="{{ asset('assets/images/logos/logo.jpg') }}" alt="logo">

            <!-- Middle Section - Navigation -->
            <div class="flex flex-col gap-3 items-center">
                <h3 class="text-white font-bold text-xl tracking-wide">Natura Capelli</h3>
                <div class="flex gap-6">
                    <a href="#" class="footer-link">Home</a>
                    <a href="#" class="footer-link">About</a>
                    <a href="#" class="footer-link">Products</a>
                    <a href="#" class="footer-link">Contact</a>
                </div>
            </div>

            <!-- Social Media Icons -->
            <div class="flex gap-4 items-center">
                <!-- Facebook -->
                <a href="https://www.facebook.com/" class="icon" target="_blank">
                    <i class="fab fa-facebook text-lg"></i>
                </a>
                
                <!-- Instagram -->
                <a href="https://www.instagram.com/" class="icon" target="_blank">
                    <i class="fab fa-instagram text-lg"></i>
                </a>
                
                <!-- Phone -->
                <a href="https://wa.me/+201148992811" target="_blank" class="icon">
                    <i class="fab fa-whatsapp text-lg"></i>
                </a>
            </div>
        </div>

        <!-- Bottom Section - Copyright & Credits -->
        <div class="pt-6 flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
            <p class="text-gray-500">
                Copyright © <span id="currentYear">2026</span> Natura Capelli. All rights reserved.
            </p>
            <p class="text-gray-500">
                Developed by <a href="#" class="text-white font-semibold hover:text-gray-300 transition">Natura Capelli</a>
            </p>
        </div>
    </div>
</footer>
@endsection