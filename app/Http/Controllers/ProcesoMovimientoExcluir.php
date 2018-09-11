<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProcesoMovimientoExcluir extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('proceso.movimientopersonal.excluir.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documento=DB::table('documento')
        ->select('id','nombre')
        ->get();
        $movimiento=DB::table('movimiento')
        ->select('id','nombre')
        ->get();
        $unidad=DB::table('unidadlaboral')
        ->select('id','codigo','nivel2','nivel4','nivel6','nivel8','nivel10','nivel12','nivel14')
        ->get();
        return view('proceso.movimientopersonal.excluir.create',['documento'=>$documento,'movimiento'=>$movimiento,'unidad'=>$unidad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
