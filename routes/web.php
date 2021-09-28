<?php

use App\Models\Post;
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
        "title" => "Home",
        "image2" => "asips.jpeg"
    ]);
});


Route::get('/informasi', function () {
    return view('informasi', [
        "title" => "Informasi",
        "image1" => "stunting.jpg",
        "posts" => Post::all()
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama1" => "Pascallis Henoch",
        "nim1" => "152011513025",
        "paskal1" => "paskal1.jpeg",
        "nama2" => "Adhiba Alya",
        "nim2" => "152011513004",
        "dhiba1" => "dhiba1.png",
    ]);
});


//halaman single posts
Route::get('posts/{slug}', function ($slug) {
    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});