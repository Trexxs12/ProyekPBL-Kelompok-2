<?php

Use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\DetailController;
Use App\Http\Controllers\LoginController;
Use App\Http\Controllers\RegistController;
Use App\Http\Controllers\ShopController;
Use App\Http\Controllers\ContohController;
Use App\Http\Controllers\AboutController;
Use App\Http\Controllers\ContactController;
Use App\Http\Controllers\TransaksiController;
Use App\Http\Controllers\KeranjangController;
Use App\Http\Controllers\AdminpemController;
Use App\Http\Controllers\AdminproController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'Login']);

Route::get('/register',[RegistController::class, 'Regist']);

Route::get('/dashboard',[DashboardController::class, 'Dashboard']);

Route::get('/shop',[ShopController::class, 'Shop']);

Route::get('/detail',[DetailController::class, 'Detail']);

Route::get('/about',[AboutController::class, 'About']);

Route::get('/contact',[ContactController::class, 'Contact']);

Route::get('/transaksi',[TransaksiController::class, 'Transaksi']);

Route::get('/keranjang',[KeranjangController::class, 'Keranjang']);

Route::get('/produk',[AdminproController::class, 'AdminProduk']);

Route::get('/pembelian',[AdminpemController::class, 'AdminPembelian']);

Route::get('/contoh',[ContohController::class, 'contohView']);


