<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Grupos extends Model
{
    use  HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'tematica',
        'orientacion_s',
        'descripcion',
        'cant_personas'

    ];

 
    public function grupo_user () 
    {
        return $this->hasMany(User::class);
     
    }
   
}


class Grupo extends Model
{
    use HasFactory;
    
}
