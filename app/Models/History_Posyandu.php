<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_Posyandu extends Model
{
    protected $table = "history_posyandu";

    public function balita() {
        return $this->belongsTo(Balita::class, 'id', 'id_history_posyandu');
    }

    public function user() {
        return $this->hasMany(Users::class, 'id_history_posyandu', 'id');
    }
}
