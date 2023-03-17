<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});

Route::get('barang', function () {
    return view('barang', [
        "title" => "barang"
    ]);
});

Route::get('kategori', function () {
    return view('kategori', [
        "title" => "kategori"
    ]);
});
