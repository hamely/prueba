<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
        protected $table = 'roles';
        //protected $fillable = ['name', 'display_name' , 'description']; //proteje de la signacion masiva de datos
        public function user(){

        	return $this->hasMany(User::class);

        }
}
