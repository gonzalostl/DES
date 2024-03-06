<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discoteca extends Model
{
    use HasFactory;

    //Dentro del modelo tenemos que crear una variable fillable
    //que me define los campos accesibles de la entrada   
    protected $fillable = [
        'capacidad',
        'nombre',
        'precio'
    ];
}
