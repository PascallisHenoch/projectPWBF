<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KecamatanController;

//Home
    Route::get('/', function () {
        return view('login', [
            "title" => "Login"
        ]);
    });
    Route::post('/login', [AuthController::class,'login']);

    Route::get('/home', function () {
        return view('home', [
            "title" => "Home",
            "image2" => "LOGO ASIPS.png"
        ]);
    });

//Kecamatan
    Route::get('/kecamatan', [KecamatanController::class,'index']);
    Route::get('/kecamatan/create', [KecamatanController::class,'create']);
    Route::post('/kecamatan/store', [KecamatanController::class,'store']);
    Route::get('/kecamatan/edit/{id}', [KecamatanController::class,'edit']);
    Route::post('/kecamatan/update/{id}', [KecamatanController::class,'update']);
    Route::get('/kecamatan/destroy/{id}', [KecamatanController::class,'destroy']);

//Informasi
    Route::get('/informasi', [PostController::class,'index']);
    Route::get('posts/{post:slug}', [PostController::class, 'show']);

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



