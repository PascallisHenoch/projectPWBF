<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;


//==================================================
//======================LOGIN=======================
    Route::get('/', function () {
        return view('index');
    });

    // Route::get('/registrasi', function () {
    //     return view('registrasi', [
    //         "title" => "Registrasi"
    //     ]);
    // });

    // Route::get('/login', function () {
    //     return view('login', [
    //         "title" => "Login"
    //     ]);
    // });
    
    Route::get('/login', [LoginController::class,'index']);
    Route::get('/register', [RegisterController::class,'index']);
    Route::post('/register', [RegisterController::class,'store']);

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

//Role
    Route::get('/role', [RoleController::class,'index']);
    Route::get('/role/edit/{id}', [RoleController::class,'edit']);
    Route::post('/role/update/{id}', [RoleController::class,'update']);

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

//Balita
    Route::get('/balita', [BalitaController::class,'index']);
    Route::get('/balita/create', [BalitaController::class,'create']);
    Route::post('/balita/store', [BalitaController::class,'store']);
    Route::get('/balita/edit/{id}', [BalitaController::class,'edit']);
    Route::post('/balita/update/{id}', [BalitaController::class,'update']);
    Route::get('/balita/destroy/{id}', [BalitaController::class,'destroy']);





