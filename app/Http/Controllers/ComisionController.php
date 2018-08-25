<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comision;
use Session;
use App\Http\Requests\ComisionRequest;
class ComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $comision=Comision::all();
        //dd($comision);
        //return view('admin/comision/index');
        return  view('admin.comision.index',['comision' => $comision]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comision.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComisionRequest $request)
    {
        $comision = new Comision;
        $comision->codigo = $request->codigo;
        $comision->nombre = $request->nombre;
        $comision->save();
        Session::flash('Mensaje', 'Se registro correctamente la comisión');
        return redirect()->route('comision.index');
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
        $comision= Comision::find($id);
        return  view('admin.comision.update',['comision' => $comision]);
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
        $comision= Comision::findOrFail($id);
        $comision->update($request->all());
        Session::flash('MensajeActualizar','Se actualizó correctamente la comisión');
        return redirect()->route('comision.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comision= Comision::findOrFail($id);
        $comision->delete();
         Session::flash('MensajeEliminar', 'Se eliminó correctamente la comisión');
        return redirect()->route('comision.index');
    }
}
