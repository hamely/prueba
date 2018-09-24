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
        $data = DB::table('persona_descanso')
        ->select(DB::raw('max(persona.cip) as cip ,max(persona_descanso.id) as id_as_co, max(persona.id) as personaid,max(persona.fechanacimiento) as fechanacimiento,max(persona.apellidopaterno) as apellidopaterno,max(persona.apellidomaterno) as apellidomaterno,max(persona.nombres) as nombres, max(persona_descanso.dia) as dia, max(persona_descanso.numerodescanso)as numerodescanso, max(persona_descanso.expedido) as expedido, max(descanso.nombre) as diagnostico '))
        ->join('persona', 'persona.id', '=', 'persona_descanso.persona_id')
        ->join('descanso', 'descanso.id', '=', 'persona_descanso.descanso_id')
        ->groupby('persona_descanso.persona_id')
        ->orderBy('persona_descanso.id', 'desc')
        ->get();
        //dd($data);
        return view('proceso.descansomedico.index',['data'=>$data]);
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
