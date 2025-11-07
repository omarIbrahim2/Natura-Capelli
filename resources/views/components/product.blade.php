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
            <a href="{{ route('show') }}" class="bg-white hover:bg-orange-500 p-3 rounded-full text-gray-800 hover:text-white shadow-lg transition-all duration-300 hover:scale-110">
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
