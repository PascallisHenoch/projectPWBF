<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "admin1",
            "email" => "admin1@gmail.com",
            "role"=>"admin",
            "ktp"=>"/img/ktp1.jpg",
            "password" => Hash::make("admin123"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table('users')->insert([
            "name" => "kader1",
            "email" => "kader1@gmail.com",
            "role"=>"kader",
            "ktp"=>"/img/ktp2.jpg",
            "password" => Hash::make("kader123"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table('users')->insert([
            "name" => "ortu1",
            "email" => "ortu1@gmail.com",
            "role"=>"ortu",
            "ktp"=>"/img/ktp3.jpg",
            "password" => Hash::make("ortu123"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
