@extends('layouts.template')

@section('title', 'ini adalah judul pada meta')
@section('content')
<body  class="bg-gray-100" >
<div id="default-carousel" class="relative w-full mx-auto" data-carousel="slide">
    <div class="relative h-56 md:h-96 overflow-hidden rounded-lg">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset ('images/apple1.jpg') }}" 
                class="w-full h-full object-cover " 
                alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset ('images/apple2.jpg') }}" 
                class="w-full h-full object-cover " 
                alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset ('images/apple3.jpg') }}" 
                class="w-full h-full object-cover " 
                alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset ('images/apple4.jpg') }}" 
                class="w-full h-full object-cover " 
                alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset ('images/apple5.jpg') }}" 
                class="w-full h-full object-cover " 
                alt="...">
        </div>
    </div>
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" 
            aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" 
            aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" 
            aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" 
            aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" 
            aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Previous Button -->
    <button type="button" class="absolute inset-y-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5 5 9" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute inset-y-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9l4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<div class="container mx-auto my-4 flex flex-col items-center"> 
    <div class="flex items-center"> 
    <svg class="w-[64px] h-[64px] text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.537 12.625a4.421 4.421 0 0 0 2.684 4.047 10.96 10.96 0 0 1-1.384 2.845c-.834 1.218-1.7 2.432-3.062 2.457-1.34.025-1.77-.794-3.3-.794-1.531 0-2.01.769-3.275.82-1.316.049-2.317-1.318-3.158-2.532-1.72-2.484-3.032-7.017-1.27-10.077A4.9 4.9 0 0 1 8.91 6.884c1.292-.025 2.51.869 3.3.869.789 0 2.27-1.075 3.828-.917a4.67 4.67 0 0 1 3.66 1.984 4.524 4.524 0 0 0-2.16 3.805m-2.52-7.432A4.4 4.4 0 0 0 16.06 2a4.482 4.482 0 0 0-2.945 1.516 4.185 4.185 0 0 0-1.061 3.093 3.708 3.708 0 0 0 2.967-1.416Z"/>
    </svg>
    </div>
  <h1 class="text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-6xl dark:text-white">Selamat Datang Di Gadget Store</h1>
</div>

<div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
    <button type="button" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">Semua Kategori</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Handphone</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Airbuds</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Macbook</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Casing</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Mouse</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Charger Cable</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Apple Watch</button>
</div>

<section id="product1" class="container mx-auto py-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6"> <!-- 3 kolom dengan jarak antar elemen -->
        
        <!-- Produk 1 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-xl flex flex-col items-center"> <!-- Perkuat bayangan -->
            <img class="w-3/4" src="{{ asset('images/iphone15p.png') }}" alt="iPhone 15 Pro"> <!-- Ukuran gambar -->
            <div class="p-4 text-center flex-1"> <!-- Ukuran teks dan alignment -->
                <h3 class="text-lg font-semibold text-gray-800">iPhone 15 Pro</h3>
                <p class="text-sm text-gray-600">Stok: <span>10</span></p>
                <p class="text-lg text-orange-500 font-bold">Rp. 100.000</p>
                <form method="post" action="">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition duration-300">
                        <i class="bx bx-cart-alt"></i>Beli
                    </button>
                </form>
            </div>
        </div>

        <!-- Produk 2 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-xl flex flex-col items-center"> <!-- Perkuat bayangan -->
            <img class="w-3/4" src="{{ asset('images/iphone15.png') }}" alt="iPhone 15">
            <div class="p-4 text-center flex-1">
                <h3 class="text-lg font-semibold text-gray-800">iPhone 15</h3>
                <p class="text-sm text-gray-600">Stok: <span>10</span></p>
                <p class="text-lg text-orange-500 font-bold">Rp. 100.000</p>
                <form method="post" action="">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition duration-300">
                        <i class="bx bx-cart-alt"></i>Beli
                    </button>
                </form>
            </div>
        </div>

        <!-- Produk 3 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-xl flex flex-col items-center"> <!-- Perkuat bayangan -->
            <img class="w-3/4" src="{{ asset('images/iphonese.png') }}" alt="iPhone SE">
            <div class="p-4 text-center flex-1">
                <h3 class="text-lg font-semibold text-gray-800">iPhone SE</h3>
                <p class="text-sm text-gray-600">Stok: <span>10</span></p>
                <p class="text-lg text-orange-500 font-bold">Rp. 100.000</p>
                <form method="post" action="">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition duration-300">
                        <i class="bx bx-cart-alt"></i>Beli
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
</body>

@endsection