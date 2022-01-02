<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\History_PosyanduController;


//==========LANDING PAGE==========
    Route::get('/', function () {
        return view('index');
    });


//==========LOGIN==========
    Route::get('/login', [LoginController::class,'index'])->name('login');
    Route::post('/login', [LoginController::class,'authenticate']);
    

//==========LOGOUT==========
    Route::group(["middleware" => ["auth"]], function () {
    Route::post('/logout', [LoginController::class, "logout"]);
    });


//==========ADMIN==========
// Route di bawah hanya bisa diakses oleh admin
    Route::group(["middleware" => ["auth","admin"]], function () {

        Route::get('/dashboard', function () {
            return view('dashboard_adminkader', [
                "title" => "Home",
                "image2" => "LOGO ASIPS.png"]);
        });

        //Role
        Route::get('/role', [RoleController::class,'index']);
        Route::get('/user/create', [RoleController::class,'create']);
        Route::get('role/delete/{id}',[RoleController::class,'destroy']);
        Route::post('/user/store', [RoleController::class,'store']);
        Route::get('/role/edit/{id}', [RoleController::class,'edit']);
        Route::post('/user/update/{id}', [RoleController::class,'update']);

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
    });


//==========KADER==========
// Route di bawah hanya bisa diakses oleh kader
    Route::group(["middleware" => ["auth","kader"]], function () {

        Route::get('/kader',function(){
            return view('dashboard_adminkader',[
                "title" => "Home",
                "image2" => "LOGO ASIPS.png"]);
        });

        //Role
        Route::get('/role', [RoleController::class,'index']);
        Route::get('/user/create', [RoleController::class,'create']);
        Route::get('role/delete/{id}',[RoleController::class,'destroy']);
        Route::post('/user/store', [RoleController::class,'store']);
        Route::get('/role/edit/{id}', [RoleController::class,'edit']);
        Route::post('/user/update/{id}', [RoleController::class,'update']);

        //Balita
        Route::get('/balita', [BalitaController::class,'index']);
        Route::get('/balita/create', [BalitaController::class,'create']);
        Route::post('/balita/store', [BalitaController::class,'store']);
        Route::get('/balita/edit/{id}', [BalitaController::class,'edit']);
        Route::post('/balita/update/{id}', [BalitaController::class,'update']);
        Route::get('/balita/destroy/{id}', [BalitaController::class,'destroy']);
    });


//==========ORTU==========
// Route di bawah hanya bisa diakses oleh ortu
    Route::group(["middleware" => ["auth","ortu"]], function () {

        Route::get('/ortu', function () {
            return view('dashboard_ortu');});
    });
    

//==========ADMIN KADER==========
// Route di bawah ini bisa diakses oleh admin dan kader
    Route::group(["middleware" => ["auth","admin"."kader"]], function () {
        //History Posyandu
        Route::get('/history_posyandu', [History_PosyanduController::class,'index']);
        Route::get('/history_posyandu/create', [History_PosyanduController::class,'create']);
        Route::post('/history_posyandu/store', [History_PosyanduController::class,'store']);
        Route::get('/history_posyandu/show/{id}', [History_PosyanduController::class,'show']);
        Route::get('/history_posyandu/edit/{id}', [History_PosyanduController::class,'edit']);
        Route::post('/history_posyandu/update/{id}', [History_PosyanduController::class,'update']);
        Route::get('/history_posyandu/destroy/{id}', [History_PosyanduController::class,'destroy']);
    });
    















