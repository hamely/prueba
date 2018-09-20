<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SituacionEspecial extends Model
{
    protected $table = 'situacionespecial';
    protected $fillable = [
        'codigo',
        'nombre',
      ];
}
