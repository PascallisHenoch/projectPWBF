<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = "kelurahan_table";
    protected $fiilable = ['nama_kelurahan'];


    public function kecamatan() {
        return $this->belongsTo(Kecamatan::class, 'id_kelurahan', 'id');
    }

    public function posyandu() {
        return $this->hasMany(Posyandu::class, 'id_kelurahan', 'id');
    }
}
