<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         //var_dump($role);exit;

        //$roles=func_get_args();devuelve los usuaarios que entran al middleware 

        $roles= array_slice(func_get_args(), 2);//devuelve la matriz e de objetos, ecepto las 2 primeras 
       // 
       // 
        //dd($roles);

       
         if (auth()->user()->hasRoles($roles))
            
          {
               
               return $next($request); //dejamos pasar para ver los datos
            
           }
       
       

        return redirect('/');
       
    }
}
