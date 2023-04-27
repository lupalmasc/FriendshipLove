<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Grupo extends Model
{
    use HasFactory;
    public function grupo_user () 
    {
        return $this->hasMany(User::class);
     
    }
}
