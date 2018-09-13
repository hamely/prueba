<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cip extends Model
{
    protected $table = 'cip';
    protected $fillable = [
        'codigo',
        'nombre',
      ];
}
