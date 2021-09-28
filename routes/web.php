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
    return view('1home');
});

Route::get('/information', function () {
    return view('2information');
});

Route::get('/about', function () {
    return view('3about', [
        "nama1" => "Pascallis Henoch",
        "nim1" => "152011513025",
        "nama2" => "Adhiba Alya",
        "nim2" => "152011513004",
        "image1" => "stunting.jpg"
    ]);
});