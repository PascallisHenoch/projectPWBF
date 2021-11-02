<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    use HasFactory;
    protected $table = "balita_table";
    protected $fillable = ['nama_balita', 'nik_ortu', 'nama_ortu', 'tgllahir_balita', 'jk_balita', 'status'];

    public function posyandu() {
        return $this->belongsTo(Posyandu::class, 'id', 'id_posyandu');
    }

    public function history_posyandu() {
        return $this->hasMany(History_Posyandu::class, 'id_history_posyandu', 'id');
    }
}
