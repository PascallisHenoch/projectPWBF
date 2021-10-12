<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "role";

    public function user_role() {
        return $this->hasMany(User_Role::class, 'id_role', 'id');
    }
}
