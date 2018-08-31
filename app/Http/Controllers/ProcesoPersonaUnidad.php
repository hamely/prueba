<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\PersonaUnidad;
use App\Unidad;
use App\Persona;
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
        ->select('persona.cip','persona.dni','persona.cuenta','persona.fechanacimiento','persona.sexo','persona.estadocivil','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','persona.celular','persona.email','unidad.codigo','unidad.nivel1','persona_unidad.observacion','persona_unidad.fechaAsignacion')
        ->join('persona', 'persona.id', '=', 'persona_unidad.persona_id')
        ->join('unidad', 'unidad.id', '=', 'persona_unidad.unidad_id')
        ->paginate(8);
       // dd($personagrado);
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
