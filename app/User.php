<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public  function roles()
    {

        return $this->belongsToMany(Role::class,'assigned_roles','user_id', 'roles_id')->withPivot('id');//estamos definiendo  el usuario con el roles
    }

    public function hasRoles(array $roles)
    {
       foreach ($roles as $role) 
        {
            foreach ($this->roles as $userRole) 
            {
                if ($userRole->name === $role) //si es igual al que pasamos por usuario dejara pasar y mostrara lo que usuario descea 
                {

                    return true;

                }       
             }         

        }
       return false;
    }
}
