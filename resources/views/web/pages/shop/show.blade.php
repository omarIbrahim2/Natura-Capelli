@extends('web.layouts.main')

@section('title')
product
@endsection

@section('content')

<!-- Hero Section with Background -->

<x-header header_bg_image="assets/images/freepik__the-style-is-candid-image-photography-with-natural__63514.png">

</x-header>

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
@endsection