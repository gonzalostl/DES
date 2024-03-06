<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gerente extends Model
{
    use HasFactory;

    //Dentro del modelo tenemos que crear una variable fillable
    //que me define los campos accesibles de la entrada   
    protected $fillable = [
        'edad',
        'nombre',
        'sueldo'
    ];
}
