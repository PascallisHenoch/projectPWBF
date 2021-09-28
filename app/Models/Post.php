<?php

namespace App\Models;


class Post 
{

    private static $informasi = [
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

    public static function all()
    {
        return collect(self::$informasi);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
