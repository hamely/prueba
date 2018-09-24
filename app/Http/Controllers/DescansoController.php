<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Descanso;
use Session;
class DescansoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descanso=Descanso::all();
        return view('admin.descansomedico.index',['descanso'=>$descanso]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.descansomedico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $descanso = new Descanso;
        $descanso->codigo = $request->codigo;
        $descanso->nombre = $request->nombre;
        $descanso->save();
        Session::flash('Mensaje', 'Se registro correctamente la comisión');
        return redirect()->route('descanso.index');
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
        $descanso= Descanso::find($id);
        return  view('admin.descansomedico.update',['descanso' => $descanso]);
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
        $descanso= Descanso::findOrFail($id);
        $descanso->update($request->all());
        Session::flash('MensajeActualizar','Se actualizó correctamente la actualizacion de descanso');
        return redirect()->route('descanso.index');
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
