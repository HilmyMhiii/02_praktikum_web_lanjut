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
    echo ("<h1>Selamat Datang<h1>");
});

Route::get('/about', function (){
    echo("Muhammad Hilmy Iqbal <br> 2041720129 <br> TI-2D");
});

Route::get('/artikel/1', function (){
    echo("Halaman Artikel ID 1");
});

Route::get('/artikel/2', function (){
    echo("Halaman Artikel ID 2");
});
