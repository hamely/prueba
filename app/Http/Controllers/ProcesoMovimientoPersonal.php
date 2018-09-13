<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\MovimientoPersonal;

class ProcesoMovimientoPersonal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function movimientoincluir()
    {
        return view('proceso.movimientopersonal.incluir.index');
    }

    public function movimientoincluircreate(){
        $documento = DB::table('documento')
        ->select('id','nombre')
        ->get();
        $movimiento = DB::table('movimiento')
        ->select('id','nombre')
        ->get();
        $unidad = DB::table('unidadlaboral')
        ->select('id','codigo','nivel2','nivel4','nivel6','nivel8','nivel10','nivel12','nivel14')
        ->get();
        $cargo = DB::table('cargo')
        ->select('id','codigo','nombrecorto')
        ->get();
        $horario = DB::table('horario')
        ->select('id','codigo','nombre')
        ->get();
        $cip = DB::table('cip')
        ->select('id','codigo','nombre')
        ->get();
        return view('proceso.movimientopersonal.incluir.create',['documento' => $documento,'movimiento'=>$movimiento,'unidad'=>$unidad,'cargo'=>$cargo,'horario'=>$horario,'cip'=>$cip]);
    } 

    public function movimientoincluirinsertar(Request $request)
    {
        if($request->ajax())
        {
            $insert=new MovimientoPersonal;
            $insert->persona_id=$_POST['idPersona'];
            $insert->documento_id=$_POST['comboDocumento'];
            $insert->numerodocumento=$_POST['numerodocumento'];
            $insert->sigladocumento=$_POST['sigladocumento'];
            $insert->fechadocumento=$_POST['fechadocumento'];
            $insert->fechainclusion=$_POST['fechainclusion'];
            $insert->movimiento_id=$_POST['comboMovimiento'];
            $insert->tiempo=$_POST['tiempo'];
            $insert->unidad_id=$_POST['comboUnidad'];
            $insert->cargo_id=$_POST['comboCargo'];
            $insert->cip_id=$_POST['comboCip'];
            $insert->horario_id=$_POST['comboHorario'];
            $insert->observacion=$_POST['observacion'];
            $insert->tipo='incluir';
            $insert->estado='activo';

            $insert->save();
        }
       
        return Response(['data'=>$_POST['idPersona']]);
    }

    public function movimientoexcluir()
    {
        return view('proceso.movimientopersonal.excluir.index');
    }
}
