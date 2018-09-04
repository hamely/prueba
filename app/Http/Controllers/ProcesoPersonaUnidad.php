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
        ->select(DB::raw('max(persona.cip) as cip, max(persona.dni) as dni, max(persona.cuenta) as cuenta, max(persona.fechanacimiento) as fechanacimiento, max(persona.sexo) as sexo, max(persona.estadocivil) as estadocivil, max(persona.apellidopaterno) as apellidopaterno, max(persona.apellidomaterno) as apellidomaterno, max(persona.nombres) as nombres, max(persona.celular) as celular, max(persona.email) as email, max(unidadlaboral.codigo) as codigo, max(unidadlaboral.nivel2) as nivel2, max(unidadlaboral.nivel4) as nivel4, max(unidadlaboral.nivel6) as nivel6, max(unidadlaboral.nivel8) as nivel8, max(unidadlaboral.nivel10) as nivel10, max(unidadlaboral.nivel12) as nivel12, max(unidadlaboral.nivel14) as nivel14, max(persona_unidad.fechaAsignacion) as fechaAsignacion, max(persona_unidad.observacion) as observacion'))
        ->join('persona', 'persona.id', '=', 'persona_unidad.persona_id')
        ->join('unidadlaboral', 'unidadlaboral.id', '=', 'persona_unidad.unidad_id')
        ->groupby('persona_unidad.persona_id')
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
