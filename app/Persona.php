<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';
    protected $fillable = [
        'cip',
        'apellidopaterno',
        'apellidomaterno',
        'nombres',
        'fechanacimiento',
        'celular', 
        'cuenta',
        'dni',
        'estadocivil',
        'sexo',   
        'email'
      ];
}
