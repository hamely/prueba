<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    protected $table = 'ubigeo';
    protected $fillable = [
        'codigo',
        'departamento',
        'provincia',
        'distrito'
      ];
}
