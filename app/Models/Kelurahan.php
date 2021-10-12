<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = "kelurahan_table";

    public function kecamatan() {
        return $this->belongsTo(Kecamatan::class, 'id', 'id_kelurahan');
    }

    public function posyandu() {
        return $this->hasMany(Posyandu::class, 'id_kelurahan', 'id');
    }
}
