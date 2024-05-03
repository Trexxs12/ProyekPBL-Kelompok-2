@extends('layouts.template_admin')

@section('title', 'Kontak Kami')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
</head>
<body>

    <div class="mt-8 text-center">
        <h1 class="font-bold text-center">TAMBAH PRODUK</h1>
        <form class="max-w-4xl mx-auto space-y-4">
            <input type="text" id="name" aria-describedby="helper-text-explanation" class="input input-bordered p-4 w-full" placeholder="Masukkan Nama Produk">
            <div class="mt-4"></div>
            <input type="text" id="kategori" aria-describedby="helper-text-explanation" class="input input-bordered p-4 w-full" placeholder="Masukkan Kategori">
            <div class="mt-4"></div>
            <input type="text" id="stok" aria-describedby="helper-text-explanation" class="input input-bordered p-4 w-full" placeholder="Masukkan Stok">
            <div class="mt-4"></div>
            <input type="text" id="deskripsi" aria-describedby="helper-text-explanation" class="input input-bordered p-4 w-full" placeholder="Masukkan Deskripsi">
            <div class="mt-4"></div>
            <input type="text" id="harga" aria-describedby="helper-text-explanation" class="input input-bordered p-4 w-full" placeholder="Masukkan Harga">
            <div class="mt-4"></div>
            <input class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
        </form>
        <div class="mt-4"></div>
        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah Produk</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>



@endsection
