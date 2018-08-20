<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignarComision extends Model
{
    protected $table = 'asignar_comision';
    protected $fillable = [
        'persona_id',
        'comision_id',
        'ubigeo_id'
      ];
}
