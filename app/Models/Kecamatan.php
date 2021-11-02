<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = "kecamatan_table";
    protected $fillable = ['nama_kecamatan'];

    public function kelurahan() {
        return $this->hasMany(Kelurahan::class, 'id', 'id_kelurahan');
    }
}
