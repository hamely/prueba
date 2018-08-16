<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sancion;
class SancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sancion=Sancion::all();
        //dd($sancion);
        return  view('admin.sancion.index',['sancion' => $sancion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sancion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sancion = new Sancion;
        $sancion->codigo = $request->codigo;
        $sancion->sancion = $request->sancion;
        $sancion->save();
        
        return redirect()->route('sancion.index')->with('info' , 'Se registro correctamente');

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
        $sancion= Sancion::find($id);
        return  view('admin.sancion.update',['sancion' => $sancion]);
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
        $sancion= Sancion::findOrFail($id);
        $sancion->update($request->all());
        return redirect()->route('sancion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sancion= Sancion::findOrFail($id);
        $sancion->delete();
        return redirect()->route('sancion.index');
    }
}
