@extends('layouts.template')

@section('title', 'ini adalah judul pada meta')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    
    <link rel="stylesheet" href="/styles/jere-style.css">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.4.1">
</head>
<body class="bg-gray-100">
<div class="container mx-auto mt-20 mb-8">
    <h1 class="text-3xl mb-6">Keranjang Belanja</h1>

    <div class="grid grid-cols-1 gap-6">
        <div class="bg-white rounded-lg shadow-lg p-4">
            <div class="flex items-center justify-between">
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
        </div>

        <div class="bg-white rounded-lg shadow-lg p-4">
            <div class="flex items-center justify-between">
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
        </div>
    </div>

    <div class="mt-8 text-right">
    <h2 class="text-2xl font-semibold mt-4 mb-6">Total: Rp 250.000</h2>
    <a href="/checkout" class="mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 mb-6">Checkout</a>
    </div>
</div>

</body>
<script src="/styles/tailwindcss3.4.1.js"></script>
</html>

@endsection
