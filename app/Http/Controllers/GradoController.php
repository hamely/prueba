<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grado;
use Session;
class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){ 

            $grado=Grado::all();
            return response(['data' => $grado]);

        }else {

            $grado=Grado::all();
            return  view('admin.grado.index',['grado' => $grado]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.grado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grado = new Grado;
        $grado->codigo = $request->codigo;
        $grado->nombrecorto = $request->nombrecorto;
        $grado->nombre = $request->nombre;
        $grado->sigla = $request->sigla;
        $grado->save();
        Session::flash('Mensaje','Se registro correctamente el grado');
        return redirect()->route('grado.index')->with('info' , 'Se registro correctamente');
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
        $grado= Grado::find($id);
        return  view('admin.grado.update',['grado' => $grado]);
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
        $grado= Grado::findOrFail($id);
        $grado->update($request->all());
        Session::flash('MensajeActualizar','Se actualizó correctamente el grado');
        return redirect()->route('grado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
