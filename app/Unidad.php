<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidad';
    protected $fillable = [
        'codigo',
        'nombre',
        'pariente'
      ];
}
