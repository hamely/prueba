<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovimientoPersonal extends Model
{
    protected $table = 'movimiento_personal';
    protected $fillable = [
        'persona_id',
        'documento_id',
        'numerodocumento',
        'sigladocumento',
        'fechadocumento',
        'fechainclusion',
        'fechaexclusion',
        'fechacambiounidad',
        'fechacambiocargo',
        'fechacambiohorario',
        'movimiento_id',
        'tiempo',
        'unidad_id',
        'cargo_id',
        'cip_id',
        'horario_id',
        'observacion',
        'tipo',
        'estado',
        'numeroregistro',
      ];
}
