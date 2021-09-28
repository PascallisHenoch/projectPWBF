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
        "title" => "Home",
        "image2" => "asips.jpeg"
    ]);
});

Route::get('/informasi', function () {
    $informasi = [
        [
            "title" => "Pengertian ASIPS",
            "slug" => "pengertian-asips",
            "author" => "Pascallis Henoch",
            "body" => "(Aplikasi Surveilans & informasi Pencegahan Stunting) adalah aplikasi tepat guna yang 
            dapat menghubungkan antara kader posyandu dengan pihak puskesmas dan orang tua dalam pencatatan 
            status gizi balita sebagai upaya pencegahan stunting. Aplikasi ini bertujuan untuk melacak, 
            mencatat dan merekam status gizi balita secara tepat, cepat dan sesuai dengan pengukuran di 
            masing - masing posyandu. Sehingga jika ada balita yang terindikasi mengalami STUNTING maka 
            langsung terlihat pada rekap laporan yang ada pada masing – masing posyandu."
        ],
        [
            "title" => "Stunting 2",
            "slug" => "stunting-2",
            "author" => "Adhiba Alya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Eius nisi quas deleniti officiis neque eveniet placeat! 
            Excepturi dicta voluptate temporibus neque repudiandae minima? 
            Error illum debitis nemo mollitia odio tempora, 
            fugit minus harum incidunt impedit in asperiores modi iusto ratione dolorem, 
            nulla suscipit expedita aliquam rerum magni architecto recusandae dolor! 
            Quisquam reiciendis consectetur eius, corporis, 
            nostrum cumque vel optio quasi a enim quos fuga aperiam 
            totam repellat alias eum ipsa saepe numquam deserunt fugiat? 
            Quos aspernatur optio aut autem ad!"
        ]
    ];
    return view('informasi', [
        "title" => "Informasi",
        "image1" => "stunting.jpg",
        "posts" => $informasi
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
    $informasi = [
        [
            "title" => "Pengertian ASIPS",
            "slug" => "pengertian-asips",
            "author" => "Pascallis Henoch",
            "body" => "(Aplikasi Surveilans & informasi Pencegahan Stunting) adalah aplikasi tepat guna yang 
            dapat menghubungkan antara kader posyandu dengan pihak puskesmas dan orang tua dalam pencatatan 
            status gizi balita sebagai upaya pencegahan stunting. Aplikasi ini bertujuan untuk melacak, 
            mencatat dan merekam status gizi balita secara tepat, cepat dan sesuai dengan pengukuran di 
            masing - masing posyandu. Sehingga jika ada balita yang terindikasi mengalami STUNTING maka 
            langsung terlihat pada rekap laporan yang ada pada masing – masing posyandu."
        ],
        [
            "title" => "Stunting 2",
            "slug" => "stunting-2",
            "author" => "Adhiba Alya",
            "body" => "(Aplikasi Surveilans & informasi Pencegahan Stunting) adalah aplikasi tepat guna yang 
            dapat menghubungkan antara kader posyandu dengan pihak puskesmas dan orang tua dalam pencatatan 
            status gizi balita sebagai upaya pencegahan stunting. Aplikasi ini bertujuan untuk melacak, 
            mencatat dan merekam status gizi balita secara tepat, cepat dan sesuai dengan pengukuran di 
            masing - masing posyandu. Sehingga jika ada balita yang terindikasi mengalami STUNTING maka 
            langsung terlihat pada rekap laporan yang ada pada masing – masing posyandu."
        ]
    ];


    $new_post = [];
    foreach($informasi as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;

        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});