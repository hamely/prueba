<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignarComision extends Model
{
    protected $table = 'asignar_comision';
    protected $fillable = [
        'persona_id',
        'numerocomision',
        'comision_id',
        'ubigeo_id',
        'lugarcomision',
        'fechaemision',
        'motivo',
        'disposicion',
        'fechasalida',
        'horasalida',
        'fechallegada',
        'horallegada',
        'fecharetorno',
        'horaretorno',
        'retorno',
        'observacion',
        'estado',
        'usuario_id',
      ];
}
