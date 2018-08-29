<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaUnidad extends Model
{
    protected $table = 'persona_unidad';
    protected $fillable = [
        'fechaAsignacion',
        'observacion',
        'persona_id',
        'unidad_id',
      ];
}
