<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/home_produk', function () {
    return view('home_produk');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});
Route::get('/tentang_kami', function () {
    return view('tentang_kami');
});

