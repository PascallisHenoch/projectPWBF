<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PosyanduController;


//==================================================
//======================LOGIN=======================
    Route::get('/', function () {
        return view('login', [
            "title" => "Login"
        ]);
    });
    Route::post('/login', [AuthController::class,'login']);


//==================================================
//======================HOME========================
    Route::get('/home', function () {
        return view('home', [
            "title" => "Home",
            "image2" => "LOGO ASIPS.png"
        ]);
    });


//==================================================
//===================INFORMASI======================
Route::get('/informasi', [PostController::class,'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);


//==================================================
//=====================ABOUT========================
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


//==================================================
//======================CRUD========================

//Kecamatan
    Route::get('/kecamatan', [KecamatanController::class,'index']);
    Route::get('/kecamatan/create', [KecamatanController::class,'create']);
    Route::post('/kecamatan/store', [KecamatanController::class,'store']);
    Route::get('/kecamatan/edit/{id}', [KecamatanController::class,'edit']);
    Route::post('/kecamatan/update/{id}', [KecamatanController::class,'update']);
    Route::get('/kecamatan/destroy/{id}', [KecamatanController::class,'destroy']);

//Kelurahan
    Route::get('/kelurahan', [KelurahanController::class,'index']);
    Route::get('/kelurahan/create', [KelurahanController::class,'create']);
    Route::post('/kelurahan/store', [KelurahanController::class,'store']);
    Route::get('/kelurahan/edit/{id}', [KelurahanController::class,'edit']);
    Route::post('/kelurahan/update/{id}', [KelurahanController::class,'update']);
    Route::get('/kelurahan/destroy/{id}', [KelurahanController::class,'destroy']);

//Posyandu
    Route::get('/posyandu', [PosyanduController::class,'index']);
    Route::get('/posyandu/create', [PosyanduController::class,'create']);
    Route::post('/posyandu/store', [PosyanduController::class,'store']);
    Route::get('/posyandu/edit/{id}', [PosyanduController::class,'edit']);
    Route::post('/posyandu/update/{id}', [PosyanduController::class,'update']);
    Route::get('/posyandu/destroy/{id}', [PosyanduController::class,'destroy']);





