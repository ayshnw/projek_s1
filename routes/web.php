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
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/ubah_password', function () {
    return view('ubah_password');
});





