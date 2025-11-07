@extends('web.layouts.main')

@section('title')
product
@endsection

@section('content')

<!-- Hero Section with Background -->
<section class="relative min-h-screen">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <img src="{{ asset('assets/images/freepik__the-style-is-candid-image-photography-with-natural__63514.png') }}" 
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
                    <a href="{{ route('shop') }}" class="nav-link">Shop</a>
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

</section>

<section class="py-16 md:py-24 bg-black">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-start">
            <!-- Product Image - Left Side -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="bg-gray-900 rounded-lg overflow-hidden">
                    <img src="{{ asset('assets/images/freepik__the-style-is-candid-image-photography-with-natural__63514.png') }}" 
                         alt="Product Image" 
                         class="w-full h-auto object-cover">
                </div>
            </div>

            <!-- Product Details - Right Side -->
            <div class="space-y-6">
                <!-- Product Title -->
                <div>
                    <h1 class="text-white text-3xl md:text-4xl font-bold mb-2">
                        Natural Hair Growth Serum
                    </h1>
                </div>

                <!-- Price -->
                <div class="flex items-baseline gap-3">
                    <span class="text-white text-4xl font-bold">$89.99</span>
                    {{-- <span class="text-gray-500 text-2xl line-through">$120.00</span>
                    <span class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        25% OFF
                    </span> --}}
                </div>

                <!-- Description -->
                <div class="border-t border-gray-800 pt-6">
                    <h3 class="text-white text-lg font-semibold mb-3">Description</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Transform your hair with our premium Natural Hair Growth Serum. Formulated with organic ingredients, 
                        this powerful serum promotes healthy hair growth, reduces hair fall, and nourishes your scalp. 
                        Suitable for all hair types, our serum penetrates deep into the hair follicles to deliver 
                        essential nutrients and vitamins.
                    </p>
                </div>

                <!-- Key Benefits -->
                <div class="border-t border-gray-800 pt-6">
                    <h3 class="text-white text-lg font-semibold mb-3">Key Benefits</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-orange-500 mt-1"></i>
                            <span>Promotes natural hair growth</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-orange-500 mt-1"></i>
                            <span>Reduces hair fall and breakage</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-orange-500 mt-1"></i>
                            <span>Nourishes scalp and strengthens roots</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-orange-500 mt-1"></i>
                            <span>100% natural and organic ingredients</span>
                        </li>
                    </ul>
                </div>

                <!-- Quantity and Add to Cart -->
                <div class="border-t border-gray-800 pt-6 space-y-4">
                    <div>
                        <label class="text-white text-sm font-semibold mb-2 block">Quantity</label>
                        <div class="flex items-center gap-4">
                            <!-- Quantity Input -->
                            <div class="flex items-center border border-gray-700 rounded-lg overflow-hidden bg-gray-900">
                                <button type="button" 
                                        class="px-4 py-3 text-white hover:bg-gray-800 transition-colors"
                                        onclick="decrementQuantity()">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input type="number" 
                                       id="quantity" 
                                       value="1" 
                                       min="1" 
                                       max="99"
                                       class="w-16 text-center bg-transparent text-white py-3 focus:outline-none">
                                <button type="button" 
                                        class="px-4 py-3 text-white hover:bg-gray-800 transition-colors"
                                        onclick="incrementQuantity()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>

                            <!-- Stock Status -->
                            <span class="text-green-500 text-sm">
                                <i class="fas fa-check-circle"></i> In Stock
                            </span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button type="button" 
                                class="flex-1 bg-gradient-to-r from-orange-500 to-red-500 text-white py-4 px-6 rounded-lg font-semibold hover:from-orange-600 hover:to-red-600 transition-all flex items-center justify-center gap-2">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

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