<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documento';
    protected $fillable = [
        'nombre',
      ];
}
