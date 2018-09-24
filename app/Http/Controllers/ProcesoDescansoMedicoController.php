<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\ControlarDescansoMedico;
class ProcesoDescansoMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('proceso.descansomedico.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $descanso = DB::table('descanso')
                ->select('id','codigo','nombre')
                ->get();
        return view('proceso.descansomedico.create',['descanso'=>$descanso]);
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
    public function asignardescansomedicoinsert(Request $request)
    {
        if($request->ajax())
        {
            $insert=new ControlarDescansoMedico;
            $insert->persona_id=$_POST['idPersona'];
            $insert->descanso_id=$_POST['comboDiagnostico'];
            $insert->numerodescanso=$_POST['numerodescanso'];
            $insert->expedido=$_POST['expedido'];
            $insert->fechaemision=$_POST['fechaemision'];
            $insert->fechatermino=$_POST['fechatermino'];
            $insert->dia=$_POST['dia'];
            $insert->anio=$_POST['anio'];
            $insert->observacion=$_POST['observacion'];
            $insert->save();
        }       
        return Response(['data'=>$_POST['idPersona']]);
    }
}
