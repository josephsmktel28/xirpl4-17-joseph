<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Joseph Satrio Budi Prasetyo",
        "email" => "joseph.satrio705@gmail,com",
        "gambar" => "Joseph.jpg"
    ]);
}); 
    Route::get('/', function () {
    return view('gallery', [
        "title" => "Galery"
    ]);
});
