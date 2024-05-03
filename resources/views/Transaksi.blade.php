@extends('layouts.template')

@section('title', 'ini adalah judul pada meta')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    
    <link rel="stylesheet" href="/styles/jere-style.css">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.4.1">
</head>
<body class="pb-8 bg-gray-100">

<div class="container mx-auto mt-20">
    <h1 class="text-3xl mb-6">Checkout</h1>

    <div class="bg-white rounded-lg shadow-lg p-4">
        <h2 class="text-lg font-semibold mb-4">Detail Pembelian</h2>

        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center">
                <img src="https://via.placeholder.com/150" alt="Product" class="w-20 h-20 mr-4">
                <div>
                    <h2 class="text-lg font-semibold">Nama Produk 1</h2>
                    <p class="text-gray-600">Deskripsi produk 1</p>
                </div>
            </div>
            <div>
                <span class="text-lg font-semibold">Rp 100.000</span>
            </div>
        </div>

        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center">
                <img src="https://via.placeholder.com/150" alt="Product" class="w-20 h-20 mr-4">
                <div>
                    <h2 class="text-lg font-semibold">Nama Produk 2</h2>
                    <p class="text-gray-600">Deskripsi produk 2</p>
                </div>
            </div>
            <div>
                <span class="text-lg font-semibold">Rp 150.000</span>
            </div>
        </div>

        <div class="mt-4 border-t pt-4">
            <h2 class="text-2xl font-semibold">Total: Rp 250.000</h2>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-semibold mb-4">Metode Pembayaran</h2>
        <form action="#" method="post">
            <div class="mb-4">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" class="w-full px-3 py-2 border rounded-md"></textarea>
            </div>
            <div class="mb-4">
                <label for="metode">Metode Pembayaran</label>
                <select id="metode" name="metode" class="w-full px-3 py-2 border rounded-md">
                    <option value="bank">Transfer Bank</option>
                    <option value="tunai">Pembayaran Tunai</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2">Pesan Sekarang</button>
        </form>
    </div>
</div>

</body>
<script src="/styles/tailwindcss3.4.1.js"></script>
</html>

@endsection
