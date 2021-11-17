<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_Posyandu extends Model
{
    use HasFactory;
    protected $table = "history_posyandu_table";
    protected $fillable = ['tgl_posyandu', 'berat_badan_balita', 'tinggi_badan_balita','id_history_posyandu'];

    public function balita() {
        return $this->belongsTo(Balita::class, 'id_history_posyandu', 'id');
    }

    public function user() {
        return $this->hasMany(Users::class, 'id_history_posyandu', 'id');
    }
}
