<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';
    protected $fillable = [
        'cip',
        'dni',
        'cuenta',
        'fechanacimiento',
        'sexo',
        'apellidopaterno',
        'apellidomaterno',
        'nombres',
        'celular',
        'gruposanguineo',
        'emailpersonal',
        'emailinstitucional',
        'estadocivil',
      ];
}
