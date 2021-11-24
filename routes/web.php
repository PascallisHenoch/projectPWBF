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
use App\Http\Controllers\History_PosyanduController;

//==================================================
//======================HOME=======================
    Route::get('/login', [LoginController::class,'index'])->name('login');
    Route::post('/login', [LoginController::class,'authenticate']);
    Route::post('/logout', [LoginController::class,'logout']);
    Route::get('/register', [RegisterController::class,'index']);
    Route::post('/register', [RegisterController::class,'store']);

//==================================================
//======================LOGIN=======================
    Route::get('/', function () {
        return view('index');
    });

//==================================================
//======================DASHBOARD========================
Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "image2" => "LOGO ASIPS.png"
    ]);
})->middleware('auth');

//==================================================
//======================CRUD========================

//Role
    Route::get('/role', [RoleController::class,'index'])->middleware('auth');
    Route::get('/role/edit/{id}', [RoleController::class,'edit']);
    Route::post('/role/update/{id}', [RoleController::class,'update']);

//Kecamatan
    Route::get('/kecamatan', [KecamatanController::class,'index'])->middleware('auth');
    Route::get('/kecamatan/create', [KecamatanController::class,'create']);
    Route::post('/kecamatan/store', [KecamatanController::class,'store']);
    Route::get('/kecamatan/edit/{id}', [KecamatanController::class,'edit']);
    Route::post('/kecamatan/update/{id}', [KecamatanController::class,'update']);
    Route::get('/kecamatan/destroy/{id}', [KecamatanController::class,'destroy']);

//Kelurahan
    Route::get('/kelurahan', [KelurahanController::class,'index'])->middleware('auth');
    Route::get('/kelurahan/create', [KelurahanController::class,'create']);
    Route::post('/kelurahan/store', [KelurahanController::class,'store']);
    Route::get('/kelurahan/edit/{id}', [KelurahanController::class,'edit']);
    Route::post('/kelurahan/update/{id}', [KelurahanController::class,'update']);
    Route::get('/kelurahan/destroy/{id}', [KelurahanController::class,'destroy']);

//Posyandu
    Route::get('/posyandu', [PosyanduController::class,'index'])->middleware('auth');
    Route::get('/posyandu/create', [PosyanduController::class,'create']);
    Route::post('/posyandu/store', [PosyanduController::class,'store']);
    Route::get('/posyandu/edit/{id}', [PosyanduController::class,'edit']);
    Route::post('/posyandu/update/{id}', [PosyanduController::class,'update']);
    Route::get('/posyandu/destroy/{id}', [PosyanduController::class,'destroy']);

//Balita
    Route::get('/balita', [BalitaController::class,'index'])->middleware('auth');
    Route::get('/balita/create', [BalitaController::class,'create']);
    Route::post('/balita/store', [BalitaController::class,'store']);
    Route::get('/balita/edit/{id}', [BalitaController::class,'edit']);
    Route::post('/balita/update/{id}', [BalitaController::class,'update']);
    Route::get('/balita/destroy/{id}', [BalitaController::class,'destroy']);

//History Posyandu
    Route::get('/history_posyandu', [History_PosyanduController::class,'index'])->middleware('auth');
    Route::get('/history_posyandu/create', [History_PosyanduController::class,'create']);
    Route::post('/history_posyandu/store', [History_PosyanduController::class,'store']);
    Route::get('/history_posyandu/show/{id}', [History_PosyanduController::class,'show']);
    Route::get('/history_posyandu/edit/{id}', [History_PosyanduController::class,'edit']);
    Route::post('/history_posyandu/update/{id}', [History_PosyanduController::class,'update']);
    Route::get('/history_posyandu/destroy/{id}', [History_PosyanduController::class,'destroy']);






// //==================================================
// //===================INFORMASI======================
// Route::get('/informasi', [PostController::class,'index']);
// Route::get('posts/{post:slug}', [PostController::class, 'show']);


// //==================================================
// //=====================ABOUT========================
// Route::get('/about', function () {
// return view('about', [
//     "title" => "About",
//     "nama1" => "Pascallis Henoch",
//     "nim1" => "152011513025",
//     "paskal1" => "paskal1.jpeg",
//     "nama2" => "Adhiba Alya",
//     "nim2" => "152011513004",
//     "dhiba1" => "dhiba1.png",
// ]);
// });

