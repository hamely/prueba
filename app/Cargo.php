<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargo';
    protected $fillable = [
        'codigo',
        'nombrecorto',
        'nombrelargo',
      ];
}
