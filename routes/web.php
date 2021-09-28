<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//Home
    Route::get('/', function () {
        return view('home', [
            "title" => "Home",
            "image2" => "asips.jpeg"
        ]);
    });

//Informasi
    Route::get('/informasi', [PostController::class,'index']);
    Route::get('posts/{slug}', [PostController::class, 'show']);

//About
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



