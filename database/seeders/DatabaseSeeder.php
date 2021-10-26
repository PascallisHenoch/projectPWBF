<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Balita;
use App\Models\History_Posyandu;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Post;
use App\Models\Posyandu;
use App\Models\Role;
use App\Models\User_Role;
use App\Models\User;
use App\Models\Users;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Balita::Factory(100)->create();
        History_Posyandu::Factory(10)->create();
        Kecamatan::Factory(10)->create();
        Kelurahan::Factory(50)->create();
        Posyandu::Factory(10)->create();
        Role::Factory(50)->create();
        User_Role::Factory(50)->create();
        Users::Factory(100)->create();

        User::create([
            'name' => 'Pascallis Henoch',
            'email' => 'pascallis.henoch.herutomo-2020@vokasi.unair.ac.id',
            'password' => 'PascallisHenoch'
        ]);

        User::create([
            'name' => 'Adhiba Alya',
            'email' => 'adhiba.alya.firdaus-2020@vokasi.unair.ac.id',
            'password' => 'AdhibaAlya'
        ]);

        Post::create([
            'title' => 'Pengertian ASIPS',
            'slug' => 'pengertian-asips',
            'excerpt' => '(Aplikasi Surveilans & informasi Pencegahan Stunting) adalah aplikasi tepat guna yang 
            dapat menghubungkan antara kader posyandu dengan pihak puskesmas dan orang tua dalam pencatatan 
            status gizi balita sebagai upaya pencegahan stunting.',
            'body' => '(Aplikasi Surveilans & informasi Pencegahan Stunting) adalah aplikasi tepat guna yang 
            dapat menghubungkan antara kader posyandu dengan pihak puskesmas dan orang tua dalam pencatatan 
            status gizi balita sebagai upaya pencegahan stunting. Aplikasi ini bertujuan untuk melacak, 
            mencatat dan merekam status gizi balita secara tepat, cepat dan sesuai dengan pengukuran di 
            masing - masing posyandu. Sehingga jika ada balita yang terindikasi mengalami STUNTING maka 
            langsung terlihat pada rekap laporan yang ada pada masing – masing posyandu.'
        ]);

        Post::create([
            'title' => 'Pengertian Stunting',
            'slug' => 'pengertian-stunting',
            'excerpt' => 'Stunting adalah masalah kurang gizi kronis yang disebabkan oleh kurangnya asupan gizi dalam waktu yang cukup lama, sehingga mengakibatkan gangguan pertumbuhan pada anak yakni tinggi badan anak lebih rendah atau pendek (kerdil) dari standar usianya.',
            'body' => 'Stunting adalah masalah kurang gizi kronis yang disebabkan oleh kurangnya asupan gizi dalam waktu yang cukup lama, sehingga mengakibatkan gangguan pertumbuhan pada anak yakni tinggi badan anak lebih rendah atau pendek (kerdil) dari standar usianya.
            Kondisi tubuh anak yang pendek seringkali dikatakan sebagai faktor keturunan (genetik) dari 
            kedua orang tuanya, sehingga masyarakat banyak yang hanya menerima tanpa berbuat apa-apa untuk 
            mencegahnya. Padahal seperti kita ketahui, genetika merupakan faktor determinan kesehatan yang 
            paling kecil pengaruhnya bila dibandingkan dengan faktor perilaku, lingkungan (sosial, ekonomi, 
            budaya, politik), dan pelayanan kesehatan. Dengan kata lain, stunting merupakan masalah yang 
            sebenarnya bisa dicegah.'
        ]);

        Post::create([
            'title' => 'Faktor-faktor yang Menyebabkan Stunting',
            'slug' => 'faktor-faktor-yang-menyebabkan-stunting',
            'excerpt' => 'Mengingat stunting adalah salah satu masalah kesehatan yang cukup membahayakan, memahami faktor penyebab stunting sangat penting untuk dilakukan. Dengan begitu, Anda bisa melakukan langkah-langkah preventif untuk menghindarinya. Berikut ini beberapa faktor penyebab stunting yang perlu Anda ketahui:',
            'body' => 'Mengingat stunting adalah salah satu masalah kesehatan yang cukup membahayakan, memahami faktor penyebab stunting sangat penting untuk dilakukan. Dengan begitu, Anda bisa melakukan langkah-langkah preventif untuk menghindarinya. Berikut ini beberapa faktor penyebab stunting yang perlu Anda ketahui:
                
                </p><p>
                <h5>
                1. Kurang Gizi dalam Waktu Lama
                </h5>
                </p><p>
                Tanpa disadari, penyebab stunting pada dasarnya sudah bisa terjadi sejak anak berada di dalam kandungan. Sebab, sejak di dalam kandungan, anak bisa jadi mengalami masalah kurang gizi. Penyebabnya, adalah karena sang ibu tidak memiliki akses terhadap makanan sehat dan bergizi, sehingga menyebabkan buah hatinya turut kekurangan nutrisi. Selain itu, rendahnya asupan vitamin dan mineral yang dikonsumsi ibu juga bisa ikut memengaruhi kondisi malnutrisi janin. Kekurangan gizi sejak dalam kandungan inilah yang juga bisa menjadi penyebab terbesar kondisi stunting pada anak.
                </p><p></p><p>

                <h5>
                2. Pola Asuh Kurang Efektif
                </h5>
                </p><p>
                Pola asuh yang kurang efektif juga menjadi salah satu penyebab stunting pada anak. Pola asuh di sini berkaitan dengan perilaku dan praktik pemberian makanan kepada anak. Bila orang tua tidak memberikan asupan gizi yang baik, maka anak bisa mengalami stunting. Selain itu, faktor ibu yang masa remaja dan kehamilannya kurang nutrisi serta masa laktasi yang kurang baik juga dapat memengaruhi pertumbuhan dan otak anak.
                </p><p></p><p>

                <h5>
                3. Pola Makan
                </h5>
                </p><p>
                Rendahnya akses terhadap makanan dengan nilai gizi tinggi serta menu makanan yang tidak seimbang dapat memengaruhi pertumbuhan anak dan meningkatkan risiko stunting. Hal ini dikarenakan ibu kurang mengerti tentang konsep gizi sebelum, saat, dan setelah melahirkan.
                </p><p></p><p>

                <h5>
                4. Tidak Melakukan Perawatan Pasca Melahirkan
                </h5>
                </p><p>
                Setelah bayi lahir, sebaiknya ibu dan bayi menerima perawatan pasca melahirkan. Sangat dianjurkan juga bagi bayi untuk langsung menerima asupan ASI agar dapat memperkuat sistem imunitasnya. Perawatan pasca melahirkan dianggap perlu untuk mendeteksi gangguan yang mungkin dialami ibu dan anak pasca persalinan.
                </p><p></p><p>

                <h5>
                5. Gangguan Mental dan Hipertensi Pada Ibu
                </h5>
                </p><p>
                Saat kehamilan, seorang ibu tidak boleh mengalami tekanan mental karena akan berpengaruh pada kondisi kesehatan anak yang dikandung. Jika seorang ibu mengalami gangguan mental dan hipertensi dalam masa kehamilan, risiko anak menderita stunting juga semakin tinggi.
                </p><p></p><p>

                <h5>
                6. Sakit Infeksi yang Berulang
                </h5>
                </p><p>
                Sakit infeksi yang berulang pada anak disebabkan oleh sistem imunitas tubuh yang tidak bekerja secara maksimal. Saat imunitas tubuh anak tidak berfungsi baik, maka risiko terkena berbagai jenis gangguan kesehatan, termasuk stunting, menjadi lebih tinggi. Karena stunting adalah penyakit yang rentan menyerang anak, ada baiknya Anda selalu memastikan imunitas buah hati terjaga sehingga terhindar dari infeksi.
                </p><p></p><p>

                <h5>
                7. Faktor Sanitasi
                </h5>
                </p><p>
                Sanitasi yang buruk serta keterbatasan akses pada air bersih akan mempertinggi risiko stunting pada anak. Bila anak tumbuh di lingkungan dengan sanitasi dan kondisi air yang tidak layak, hal ini dapat memengaruhi pertumbuhannya. Rendahnya akses terhadap pelayanan kesehatan juga merupakan salah satu faktor penyebab stunting. 
                </p>
                '
        ]);
    }
}