@extends('layouts.template')

@section('title', 'ini adalah judul pada meta')
@section('content')

<body class="bg-gray-100">
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
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6"> <!-- Grid dengan 3 kolom dan jarak antar elemen -->
        
        <!-- Produk 1 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-lg flex flex-col items-center"> <!-- Bayangan di seluruh kotak -->
            <img class="w-3/4" src="{{ asset('images/iphone15p.png') }}" alt="iPhone 15 Pro"> <!-- Ukuran gambar -->
            <div class="p-4 text-center flex-1"> <!-- Penekanan pada teks -->
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
        <div class="bg-white rounded-lg overflow-hidden shadow-lg flex flex-col items-center">
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
        <div class="bg-white rounded-lg overflow-hidden shadow-lg flex flex-col items-center"> <!-- Bayangan seragam -->
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

        <!-- Produk 4 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-lg flex flex-col items-center">
            <img class="w-3/4" src="{{ asset('images/iphone13.png') }}" alt="iPhone 13">
            <div class="p-4 text-center flex-1">
                <h3 class="text-lg font-semibold text-gray-800">iPhone 13</h3>
                <p class="text-sm text-gray-600">Stok: <span>10</span></p>
                <p class="text-lg text-orange-500 font-bold">Rp. 100.000</p>
                <form method="post" action="">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition duration-300">
                        <i class="bx bx-cart-alt"></i>Beli
                    </button>
                </form>
            </div>
        </div>

        <!-- Produk 5 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-lg flex flex-col items-center"> <!-- Bayangan seragam -->
            <img class="w-3/4" src="{{ asset('images/applese.png') }}" alt="Apple SE">
            <div class="p-4 text-center flex-1">
                <h3 class="text-lg font-semibold text-gray-800">Apple SE</h3>
                <p class="text-sm text-gray-600">Stok: <span>10</span></p>
                <p class="text-lg text-orange-500 font-bold">Rp. 100.000</p>
                <form method="post" action="">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition duration-300">
                        <i class="bx bx-cart-alt"></i>Beli
                    </button>
                </form>
            </div>
        </div>

        <!-- Produk 6 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-lg flex flex-col items-center"> <!-- Bayangan seragam -->
            <img class="w-3/4" src="{{ asset('images/appleul.png') }}" alt="Apple Ultra">
            <div class="p-4 text-center flex-1">
                <h3 class="text-lg font-semibold text-gray-800">Apple Ultra</h3>
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
