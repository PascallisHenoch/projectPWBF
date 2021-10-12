<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "user_table";

    public function history_posyandu() {
        return $this->belongsTo(History_Posyandu::class, 'id', 'id_history_posyandu');
    }

    public function user_role() {
        return $this->hasMany(User_Role::class, 'id_user', 'id');
    }
}
