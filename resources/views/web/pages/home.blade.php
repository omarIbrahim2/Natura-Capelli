@extends('web.layouts.main')

@section('title')
home
@endsection

@section('content')

<!-- Hero Section with Background -->
<section class="relative min-h-screen">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <img src="{{ asset('assets/images/headers/seascape-texture-waves-water-generative-ai.jpg') }}" 
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

    <!-- Hero Content -->
 <div class="relative z-40 container mx-auto px-4 flex items-center justify-center" style="height: calc(100vh - 5rem);">
    <div class="text-center space-y-8">
        <h1 class="text-white text-6xl md:text-7xl lg:text-8xl font-bold tracking-wider uppercase mx-4">
            NATURA CAPELLI
        </h1>

        <h2 class="text-white text-xl md:text-2xl mx-4 font-medium">
            Hydrate & Nourish your Hair
        </h2>

        <div class="pt-4">
            <a href="#" class="custom-btn">
                We Support Your Choice
            </a>
        </div>
    </div>
</div>
</section>

<!-- about us -->
<section class="py-16 md:py-24 bg-black">
    <div class="container mx-auto px-4">
        <h2 class="heading">WHO ARE WE</h2>
        <p class="sub-heading">Discover Natura Capelli</p>
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
            
            <!-- Image -->
            <div>
                <img src="{{ asset('assets/images/hair.jpg') }}" alt="hair image" class="w-full h-auto rounded-lg shadow-lg">
            </div>

            <!-- Content -->
            <div class="space-y-6">
                
                <div class="space-y-4 text-[#c3c3c3] leading-relaxed">
                    <p>
                        Fridal is a privately owned Egyptian company established in 1957 with its headquarters located in 6th of October city.
                    </p>
                    
                    <p>
                        The company started by growing Aromatic plants in the fifties in response to the increasing demand of essential oils. Accordingly, Fridal became one of the biggest producers and exporters of essential oils, absolutes, concretes as well as Herbs & Spices.
                    </p>
                    
                    <p>
                        Fridal found itself fully involved in the perfumery world which led to a deeper interest in growing floral plants for concretes and absolutes. This was when Fridal increased its activities by producing perfumes, flavors & fragrances in the early eighties. Throughout the following ten years Fridal expanded its range of products in all its divisions. It also became one of the major producers and exporters of herbs & spices especially to the United States of America.
                    </p>
                    
                    <p>
                        Today, Fridal is a major supplier of a wide range of products and offers an outstanding worldwide service to its customers. It has also started its expansions within the FMCG market through household and personal care products.
                    </p>
                </div>

                <div class="pt-4">
            <a href="#" class="custom-btn">
                See More
            </a>
        </div>
            </div>
            
        </div>
    </div>
</section>

<!-- products -->

   <section class="py-16 md:py-24 bg-black">
        <div class="container mx-auto px-4">
            <h2 class="text-center font-bold text-white text-4xl mb-2">Featured Products</h2>
            <p class="text-gray-400 text-center mb-12">Discover our Products</p>

            <div class="relative max-w-7xl mx-auto">
                <!-- Left Arrow -->
                <button onclick="scrollCarousel(-1)" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white hover:bg-gray-100 shadow-lg p-4 rounded-full transition-all duration-300 hover:scale-110">
                    <i class="fas fa-arrow-left text-xl text-gray-800"></i>
                </button>

                <!-- Right Arrow -->
                <button onclick="scrollCarousel(1)" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white hover:bg-gray-100 shadow-lg p-4 rounded-full transition-all duration-300 hover:scale-110">
                    <i class="fas fa-arrow-right text-xl text-gray-800"></i>
                </button>

                <!-- Carousel Container -->
                <div class="overflow-hidden px-12">
                    <div id="carousel" class="carousel-container flex gap-6 overflow-x-auto py-4">
                        
                        <!-- Product Card 1 -->
                        <div class="product-card">
                            <div class="relative group">
                                <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1522338242992-e1a54906a8da?w=400" alt="Hair Product">
                                
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                
                                <!-- Action Buttons -->
                                <div class="absolute top-4 right-4 flex flex-col gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>

                                <!-- Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">New</span>
                                </div>
                            </div>

                            <div class="p-5">
                                <a href="#" class="text-white font-semibold text-lg hover:text-orange-100 transition-colors block mb-2">Premium Hair Oil</a>
                                <div class="flex items-center justify-between">
                                    <span class="text-orange-100 font-bold text-xl">$200</span>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 2 -->
                        <div class="product-card">
                            <div class="relative group">
                                <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?w=400" alt="Hair Product">
                                
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                
                                <div class="absolute top-4 right-4 flex flex-col gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>

                                <div class="absolute top-4 left-4">
                                    <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">Sale</span>
                                </div>
                            </div>

                            <div class="p-5">
                                <a href="#" class="text-white font-semibold text-lg hover:text-orange-100 transition-colors block mb-2">Hair Repair Serum</a>
                                <div class="flex items-center justify-between">
                                    <span class="text-orange-100 font-bold text-xl">$150</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 3 -->
                        <div class="product-card">
                            <div class="relative group">
                                <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=400" alt="Hair Product">
                                
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                
                                <div class="absolute top-4 right-4 flex flex-col gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>

                                <div class="absolute top-4 left-4">
                                    <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">Popular</span>
                                </div>
                            </div>

                            <div class="p-5">
                                <a href="#" class="text-white font-semibold text-lg hover:text-orange-100 transition-colors block mb-2">Hair Growth Tonic</a>
                                <div class="flex items-center justify-between">
                                    <span class="text-orange-100 font-bold text-xl">$180</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 4 -->
                        <div class="product-card">
                            <div class="relative group">
                                <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1526947425960-945c6e72858f?w=400" alt="Hair Product">
                                
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                
                                <div class="absolute top-4 right-4 flex flex-col gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="p-5">
                                <a href="#" class="text-white font-semibold text-lg hover:text-orange-100 transition-colors block mb-2">Hair Conditioner</a>
                                <div class="flex items-center justify-between">
                                    <span class="text-orange-100 font-bold text-xl">$120</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 5 -->
                        <div class="product-card">
                            <div class="relative group">
                                <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e?w=400" alt="Hair Product">
                                
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                
                                <div class="absolute top-4 right-4 flex flex-col gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>

                                <div class="absolute top-4 left-4">
                                    <span class="bg-purple-500 text-white text-xs font-bold px-3 py-1 rounded-full">Limited</span>
                                </div>
                            </div>

                            <div class="p-5">
                                <a href="#" class="text-white font-semibold text-lg hover:text-orange-100 transition-colors block mb-2">Hair Styling Gel</a>
                                <div class="flex items-center justify-between">
                                    <span class="text-orange-100 font-bold text-xl">$90</span>
                                </div>
                            </div>
                        </div>



                        <div class="product-card">
                            <div class="relative group">
                                <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e?w=400" alt="Hair Product">
                                
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                
                                <div class="absolute top-4 right-4 flex flex-col gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>

                                <div class="absolute top-4 left-4">
                                    <span class="bg-purple-500 text-white text-xs font-bold px-3 py-1 rounded-full">Limited</span>
                                </div>
                            </div>

                            <div class="p-5">
                                <a href="#" class="text-white font-semibold text-lg hover:text-orange-100 transition-colors block mb-2">Hair Styling Gel</a>
                                <div class="flex items-center justify-between">
                                    <span class="text-orange-100 font-bold text-xl">$90</span>
                                </div>
                            </div>
                        </div>

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

@push('scripts_bottom')

<script>
        const carousel = document.getElementById('carousel');
        const leftArrow = document.querySelector('button[onclick="scrollCarousel(-1)"]');
        const rightArrow = document.querySelector('button[onclick="scrollCarousel(1)"]');

        function scrollCarousel(direction) {
            const scrollAmount = 320; // card width + gap
            carousel.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
            
            // Update arrow visibility after scroll
            setTimeout(updateArrows, 300);
        }

        function updateArrows() {
            const isAtStart = carousel.scrollLeft <= 0;
            const isAtEnd = carousel.scrollLeft >= carousel.scrollWidth - carousel.clientWidth - 10;
            
            // Hide/show left arrow
            if (isAtStart) {
                leftArrow.style.opacity = '0';
                leftArrow.style.pointerEvents = 'none';
            } else {
                leftArrow.style.opacity = '1';
                leftArrow.style.pointerEvents = 'auto';
            }
            
            // Hide/show right arrow
            if (isAtEnd) {
                rightArrow.style.opacity = '0';
                rightArrow.style.pointerEvents = 'none';
            } else {
                rightArrow.style.opacity = '1';
                rightArrow.style.pointerEvents = 'auto';
            }
        }

        // Check arrow visibility on scroll
        carousel.addEventListener('scroll', updateArrows);

        // Initial check on page load
        window.addEventListener('load', updateArrows);
        
        // Update on window resize
        window.addEventListener('resize', updateArrows);
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = mobileMenuButton.querySelector('svg');

    mobileMenuButton.addEventListener('click', function() {
        // Toggle menu visibility
        mobileMenu.classList.toggle('hidden');
        
        // Toggle icon between hamburger and X
        if (mobileMenu.classList.contains('hidden')) {
            // Show hamburger icon
            menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
        } else {
            // Show X icon
            menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
        }
    });

    // Close menu when clicking on a link
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            // Reset to hamburger icon
            menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInsideMenu = mobileMenu.contains(event.target);
        const isClickOnButton = mobileMenuButton.contains(event.target);
        
        if (!isClickInsideMenu && !isClickOnButton && !mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
            // Reset to hamburger icon
            menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
        }
    });
});
    </script>
    
@endpush()
