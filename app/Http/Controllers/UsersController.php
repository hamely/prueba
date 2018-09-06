<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Session;
class UsersController extends Controller
{
    function __construct()
    {
         $this->middleware(['auth' ,'roles:admin,com'],['except' => ['edit', 'update']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users =User::all();
        return view('admin/usuario/index',["Users" => $Users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('admin.usuario.create',['roles' => $roles ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $user = new User;
        $user->name =$request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        //return $user;
        $user->save();
        
        $userBuscar=User::find($user->id);
        $userBuscar->roles()->attach($request->role);
        Session::flash('success', 'Se Agrego correctamente');
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $usuario= User::findOrFail($id);
        $roles =Role::pluck('displayname', 'id');
        return  view('admin.usuario.update',['usuario'=>$usuario,'roles'=>$roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user =User::findOrFail($id);

        $user->update($request->all());

        $user->roles()->sync($request->roles);

        return redirect()->route('usuario.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
