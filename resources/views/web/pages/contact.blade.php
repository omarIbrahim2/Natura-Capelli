@extends('web.layouts.main')

@section('title')
Contact
@endsection

@section('content')

<section class="relative min-h-screen">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <img src="{{ asset('assets/images/headers/header-contact.jpg') }}" alt="Header Background" class="w-full h-full object-cover">
    </div>

    <!-- Navigation -->
    <nav class="relative z-50 ">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">

                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#" class="inline-block">
                        <img class="w-12 h-12 rounded-full object-cover" src="{{ asset('assets/images/logos/logo.jpg') }}" alt="logo">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="#Shop" class="nav-link">Shop</a>
                    <a href="#Routine" class="nav-link">Routine</a>
                    <a href="#contact" class="nav-link">Contact</a>
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
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">
                
                <!-- Phone Card -->
                <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg shadow-lg hover:shadow-2xl border-2 border-gray-300 hover:border-orange-500 transition-all duration-300 transform hover:-translate-y-2 p-8">
                    <div class="flex items-start space-x-4">
                        <div class="bg-gray-900 text-white p-4 rounded-lg flex-shrink-0">
                            <i class="fas fa-phone text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Phone</h3>
                            <p class="text-gray-700 text-lg">0000 - 123 - 456789</p>
                        </div>
                    </div>
                </div>

                <!-- Email Card -->
                <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg shadow-lg hover:shadow-2xl border-2 border-gray-300 hover:border-orange-500 transition-all duration-300 transform hover:-translate-y-2 p-8">
                    <div class="flex items-start space-x-4">
                        <div class="bg-gray-900 text-white p-4 rounded-lg flex-shrink-0">
                            <i class="fas fa-envelope text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Email</h3>
                            <p class="text-gray-700 text-lg">heidiadel32@gmail.com</p>
                        </div>
                    </div>
                </div>

                

         </div>

         <div class="mx-auto my-5 ">
            <div class="bg-footer  shadow-lg hover:shadow-2xl  border-gray-300 hover:border-orange-500 transition-all duration-300 p-8 md:p-10">
                <h2 class="heading">Send us a Message</h2>
                
                <form action="" method="POST">
                    @csrf
                    
                    <!-- Name Field -->
                    <div class="mb-6">
                        <label for="name" class="block text-white font-semibold mb-2">Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300 bg-white text-gray-900"
                            placeholder="Your Name">
                    </div>

                    <!-- Email Field -->
                    <div class="mb-6">
                        <label for="email" class="block text-white font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300 bg-white text-gray-900"
                            placeholder="your.email@example.com">
                    </div>

                    <!-- Message Field -->
                    <div class="mb-6">
                        <label for="message" class="block text-white font-semibold mb-2">Message</label>
                        <textarea id="message" name="message" rows="6" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300 bg-white text-gray-900 resize-none"
                            placeholder="Write your message here..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="custom-btn cursor-pointer">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Send Message
                        </button>
                    </div>
                </form>
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
                    <a href="{{ route('home') }}" class="footer-link">Home</a>
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
