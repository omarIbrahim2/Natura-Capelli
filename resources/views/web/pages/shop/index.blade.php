@extends('web.layouts.main')

@section('title')
shop
@endsection

@section('content')

<x-header header_bg_image="assets/images/headers/freepik__the-style-is-candid-image-photography-with-natural__63513.png">

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

</x-header>

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

@endsection