<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaGrado extends Model
{
    protected $table = 'persona_grado';
    protected $fillable = [
        'fechaAsignacion',
        'observacion',
        'persona_id',
        'grado_id'
      ];

}
