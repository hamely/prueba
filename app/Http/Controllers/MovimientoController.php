<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movimiento;
use Session;
class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimiento=Movimiento::all();
        return view ('admin.movimiento.index',['movimiento'=>$movimiento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.movimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movimiento = new Movimiento;
        $movimiento->nombre = $request->nombre;
        $movimiento->save();
        Session::flash('Mensaje', 'Se registro correctamente el tipo de movimiento');
        return redirect()->route('movimiento.index');
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
        $movimiento= Movimiento::find($id);
        return  view('admin.movimiento.update',['movimiento' => $movimiento]);
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
        $movimiento= Movimiento::findOrFail($id);
        $movimiento->update($request->all());
        Session::flash('MensajeActualizar','Se actualizó correctamente el movimiento');
        return redirect()->route('movimiento.index');
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
