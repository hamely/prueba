<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $table = 'grado';
    protected $fillable = [
        'codigo',
        'nombrecorto',
        'nombre',
        'sigla',
      ];
}
