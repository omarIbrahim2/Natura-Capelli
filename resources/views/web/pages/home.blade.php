@extends('web.layouts.main')

@section('title')
home
@endsection

@section('content')

<!-- Hero Section with Background -->
<x-header header_bg_image="assets/images/headers/seascape-texture-waves-water-generative-ai.jpg">

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
</x-header>

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

   <section class="py-16 md:py-24 bg-black" x-data="productCarousel()">
        <div class="container mx-auto px-4">
            <h2 class="text-center font-bold text-white text-4xl mb-2">Featured Products</h2>
            <p class="text-gray-400 text-center mb-12">Discover our Products</p>

            <div class="relative max-w-7xl mx-auto">
                <!-- Left Arrow -->
                <button  @click="scroll(-1)" x-show="!isAtStart" x-transition class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white hover:bg-gray-100 shadow-lg p-4 rounded-full transition-all duration-300 hover:scale-110">
                    <i class="fas fa-arrow-left text-xl text-gray-800"></i>
                </button>

                <!-- Right Arrow -->
                <button  @click="scroll(1)" x-show="!isAtEnd" x-transition class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white hover:bg-gray-100 shadow-lg p-4 rounded-full transition-all duration-300 hover:scale-110">
                    <i class="fas fa-arrow-right text-xl text-gray-800"></i>
                </button>

                <!-- Carousel Container -->
                <div class="overflow-hidden px-12">
                    <div  x-ref="carousel" @scroll="updateArrows()" class="carousel-container flex gap-6 overflow-x-auto py-4">
                        
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
@endsection

