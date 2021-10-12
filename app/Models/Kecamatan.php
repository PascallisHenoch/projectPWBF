<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = "kecamatan_table";

    public function kelurahan() {
        return $this->hasMany(Kelurahan::class, 'id_kelurahan', 'id');
    }
}
