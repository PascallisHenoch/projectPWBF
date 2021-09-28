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
            "title" => "Pengertian Stunting",
            "slug" => "pengertian stunting",
            "author" => "Adhiba Alya",
            "body" => " Stunting adalah masalah kurang gizi kronis yang disebabkan oleh kurangnya asupan gizi dalam waktu yang cukup lama, sehingga mengakibatkan gangguan pertumbuhan pada anak yakni tinggi badan anak lebih rendah atau pendek (kerdil) dari standar usianya.
            Kondisi tubuh anak yang pendek seringkali dikatakan sebagai faktor keturunan (genetik) dari 
            kedua orang tuanya, sehingga masyarakat banyak yang hanya menerima tanpa berbuat apa-apa untuk 
            mencegahnya. Padahal seperti kita ketahui, genetika merupakan faktor determinan kesehatan yang 
            paling kecil pengaruhnya bila dibandingkan dengan faktor perilaku, lingkungan (sosial, ekonomi, 
            budaya, politik), dan pelayanan kesehatan. Dengan kata lain, stunting merupakan masalah yang 
            sebenarnya bisa dicegah."
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
