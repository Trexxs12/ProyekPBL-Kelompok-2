@extends('layouts.template')

@section('title', 'ini adalah judul pada meta')
@section('content')

<body class= "bg-gray-100 font-sans ">
    <div class="container mx-auto py-5">
        <div class="grid grid-cols-1 md:grid-cols-2 ">
            <div>
                <img src="{{ asset ('images/iphone 15 pro.png') }}"  alt="" class="max-w-sm w-full ml-6">
            </div>
            <div>
                <h1 class="text-3xl font-bold mb-2">IPhone 15 Pro</h1>
                <h2 class="text-xl text-gray-700 mb-4">Handphone</h2>
                <p class="text-harga text-blue-500 text-xl">Rp. 19.249.000,00</p>
                <p class="text-lg mt-4">Stok : <strong>20</strong></p>
                <p class="text-lg mt-4"><strong>Deskripsi</strong></p>
                <p class="text-lg mt-4" style="text-align: justify">Layar Super Retina XDR <br>
                Layar OLED menyeluruh 6,7 inci (diagonal) <br>
                Resolusi 2796 x 1290 piksel pada 460 ppi <br>
                Layar iPhone 15 Pro Max memiliki sudut melengkung yang mengikuti desain lekukan yang indah, dan semua sudut ini berada di dalam bidang persegi standar. Jika diukur sebagai bentuk persegi standar, layarnya berukuran 6,69 inci secara diagonal (area bidang layar berukuran lebih kecil).
                </p>
                <form method="post" action="" class="mt-8">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="Nama Produk">
                    <input type="hidden" name="product_categories" value="Kategori Produk">
                    <input type="hidden" name="product_stok" value="10">
                    <input type="hidden" name="product_desc" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nisi vitae ex dapibus sodales. Suspendisse potenti.">
                    <input type="hidden" name="product_price" value="100000">
                    <input type="hidden" name="product_image" value="uploaded_img">
                    <select name="product_size" class="border border-gray-300 rounded-md p-2 mt-4">
                        <option>Pilih Warna</option>
                        <option>Pink</option>
                        <option>Abu-Abu</option>
                        <option>Merah</option>
                        <option>Biru</option>
                    </select>
                    <input type="number" name="product_quantity" value="1" min="1" class="border border-gray-300 rounded-md p-2 mt-4">
                    <button type="submit" name="add_to_cart" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md mt-4">Tambah ke Keranjang</button>
                </form>
            </div>
        </div>
    </div>
</body>

@endsection
