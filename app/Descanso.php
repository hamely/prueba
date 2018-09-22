<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descanso extends Model
{
    protected $table = 'descanso';
    protected $fillable = [
            'codigo',
            'nombre',
        ];
}
