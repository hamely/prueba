<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaCargo extends Model
{
    protected $table = 'persona_cargo';
    protected $fillable = [
        'fechaAsignacion',
        'observacion',
        'persona_id',
        'cargo_id'
      ];
}
