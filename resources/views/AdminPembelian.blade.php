@extends('layouts.template_admin')

@section('title', 'Kontak Kami')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <div>

    <div class="container mx-auto py-16 flex justify-center">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg w-full sm:w-2/3 lg:w-1/2 xl:w-1/3">
            <div class="px-8 py-10">
                <h3 class="text-3xl font-medium leading-8 text-gray-900 text-center">PEMBELIAN</h3>
                <p class="mt-4 text-lg text-gray-500 text-center">Detail pengguna yang terdaftar dalam sistem.</p>
            </div>
            <div class="border-t border-gray-200">
                <!-- Konten akan dimasukkan di sini -->
                <div class="px-8 py-6">
                    <p class="text-lg font-medium text-gray-900 dark:text-white">Ditempatkan : 15-DEC-2023</p>
                    <p class="text-lg font-medium text-gray-900 dark:text-white mt-4">Nama : teddy</p>
                    <p class="text-lg font-medium text-gray-900 dark:text-white mt-4">No. Telpn : 081254678</p>
                    <p class="text-lg font-medium text-gray-900 dark:text-white mt-4">Email : boot@gmail.com</p>
                    <p class="text-lg font-medium text-gray-900 dark:text-white mt-4">Alamat : Kepulauan Riau, Batam</p>
                    <p class="text-lg font-medium text-gray-900 dark:text-white mt-4">Total Produk : Iphon 15 Pro Max</p>
                    <p class="text-lg font-medium text-gray-900 dark:text-white mt-4">Total Harga : Rp. 25.000.000</p>
                    <p class="text-lg font-medium text-gray-900 dark:text-white mt-4">Methode Pembayaran : Cash On Delivery</p>
                    <p class="text-lg font-medium text-gray-900 dark:text-white mt-4">Ekspedisi : J&T Ekspres</p>
                </div>
                <div class="flex justify-center pt-6">
                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg px-8 py-4 me-4 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Perbarui</button>
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-lg px-8 py-4 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>

@endsection
