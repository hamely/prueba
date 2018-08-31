<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\PersonaUnidad;
use App\Unidad;
use App\Persona;
use Session;
class ProcesoPersonaUnidad extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personaunidad = DB::table('persona_unidad')
        ->select('persona.cip','persona.dni','persona.cuenta','persona.fechanacimiento','persona.sexo','persona.estadocivil','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','persona.celular','persona.email','unidadlaboral.codigo','unidadlaboral.nivel2','unidadlaboral.nivel4','unidadlaboral.nivel6','unidadlaboral.nivel8','unidadlaboral.nivel10','unidadlaboral.nivel12','unidadlaboral.nivel14','persona_unidad.fechaAsignacion','persona_unidad.observacion')
        ->join('persona', 'persona.id', '=', 'persona_unidad.persona_id')
        ->join('unidadlaboral', 'unidadlaboral.id', '=', 'persona_unidad.unidad_id')
        ->orderby('persona_unidad.id','desc')
        ->paginate(8);
       // dd($personagrado);
       //return $personaunidad;
        return  view('proceso.personaunidad.index',['personaunidad' => $personaunidad]);
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
        //return $request;
        $PersonaUnidad=new PersonaUnidad;
        $PersonaUnidad->fechaAsignacion = $request->fechaAsignacionU;
        $PersonaUnidad->observacion = $request->observacionU;
        $PersonaUnidad->persona_id = $request->idPersonaU;
        $PersonaUnidad->unidad_id = $request->Combounidad;
        $PersonaUnidad->save();
        Session::flash('Mensaje','Se asignó correctamente la unidad');
        return redirect()->route('personaunidad.index')->with('info' , 'Se registro correctamente');
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
