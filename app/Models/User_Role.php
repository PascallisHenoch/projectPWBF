<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Role extends Model
{
    use HasFactory;
    protected $table = "user_role_table";

    public function user() {
        return $this->belongsTo(Users::class, 'id', 'id_user');
    }

    public function role() {
        return $this->belongsTo(Role::class, 'id', 'id_role');
    }
}
