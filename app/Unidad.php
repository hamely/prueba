<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    /*protected $table = 'unidad';
    protected $fillable = [
        'codigo',
        'nombre',
        'pariente'
      ];*/
    protected $table = 'unidad';
    protected $fillable = [
        'codigo',
        'nivel1',
        'nivel2',
        'nivel3',
        'nivel4',
        'nivel5',
        'nivel6',
        'nivel7',
        'nivel8',
        'nivel9',
        'nivel10',
        'nivel11',
        'nivel12',
        'nivel13',
        'nivel14',
        'observacion',

    ];

}
