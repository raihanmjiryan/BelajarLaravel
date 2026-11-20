<?php

use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/sapa', [SapaController::class, 'index']);

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::view('/contact', 'pages.contact');

Route::get('/latihan', function () {
    $matakuliah = [
        ['Multimedia', '20', 'Angkatan 24'],
        ['MBTI', '40', 'Angkatan 95'],
        ['Elektro', '41', 'Angkatan 20'],
        ['Kedokteran', '44', 'Angkatan 45']
    ];

    return view('pages.latihan', ['matakuliah' => $matakuliah]);
});

// Rute Product
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
Route::post('/product', [ProductController::class, 'store']);