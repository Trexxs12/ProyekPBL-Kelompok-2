@extends('layouts.template')

@section('title', 'ini adalah judul pada meta')
@section('content')
<div>
<body class="bg-gray-100">
    <div class="container mx-auto py-5">
        <div class="grid grid-cols-1 md:grid-cols-2 ">
            <div>
                <img src="{{ asset ('images/tentang15.png') }}"  alt="" class="max-w-sm w-full ml-6">
            </div>
            <div>
            <h1 class="text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-6xl dark:text-white">Tentang Kami</h1>
            <p class="text-lg lg:text-2xl mt-4" style="text-align: justify">Selamat datang di halaman kami! Kami menjual berbagai produk Apple, termasuk iPhone, iPad, Mac, Apple Watch, dan aksesori terkait. Selain penjualan, Apple Store juga menyediakan layanan perbaikan, dukungan pelanggan, dan program tukar tambah untuk produk tertentu, memberikan pengalaman belanja yang komprehensif bagi para pengguna Apple.</p> 
            <p class="text-lg lg:text-6xl mt-4"><strong>Visi Kami</strong>
            <p class="text-lg lg:text-2xl mt-4" style="text-align: justify">Visi kami adalah menjadi pemimpin di industri kami, dengan inovasi dan layanan pelanggan sebagai inti dari segala yang kami lakukan.</p> 
            </p>
            <p class="text-lg lg:text-6xl mt-4"><strong>Misi Kami</strong>
            <p class="text-lg lg:text-2xl mt-4" style="text-align: justify">Misi kami adalah menyediakan produk dan layanan berkualitas tinggi yang memenuhi kebutuhan pelanggan kami.</p> 
            </p>   
            </div>
        </div>
</body>
</div>

@endsection
