<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;
use Session;
use App\Http\Requests\CargoRequest;
class CargoController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth' ,'roles:admin,com,carnet']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){ 

            $cargo=Cargo::all();
            return response(['data' => $cargo]);

        }else {

            $cargo=Cargo::all();
            return  view('admin.cargo.index',['cargo' => $cargo]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargoRequest $request)
    {
        $cargo = new Cargo;
        $cargo->codigo = $request->codigo;
        $cargo->nombrecorto = $request->nombrecorto;
        $cargo->nombrelargo = $request->nombrelargo;
        $cargo->save();
        Session::flash('Mensaje','Se guardo correctamente el cargo');
        
        return redirect()->route('cargo.index')->with('info' , 'Se registro correctamente');
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
        $cargo= Cargo::find($id);
        return  view('admin.cargo.update',['cargo' => $cargo]);
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
        $cargo= Cargo::findOrFail($id);
        $cargo->update($request->all());
        Session::flash('MensajeActualizar','Se actualizó correctamente el cargo');
        return redirect()->route('cargo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cargo= Cargo::findOrFail($id);
        $cargo->delete();
        Session::flash('MensajeEliminar', 'Se eliminó correctamente el cargo');
        return redirect()->route('cargo.index');
    }

    public function asignar(Request $request)
    {

        //guardar
        
        return $request->all();
    }
}
