<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ControlarDescansoMedico extends Model
{
    protected $table = 'persona_descanso';
    protected $fillable = [
        'persona_id',
        'descanso_id',
        'numerodescanso',
        'expedido',
        'fechaemision',
        'fechatermino',
        'dia',
        'anio',
        'observacion',
        'usuario_id',
      ];
}
