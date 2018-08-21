<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\PersonaCargo;
use App\Persona;
class ProcesoPersonaCargo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personacargo = DB::table('persona_cargo')
        ->select('persona.cip','persona.dni','persona.cuenta','persona.fechanacimiento','persona.sexo','persona.estadocivil','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','persona.celular','persona.email','cargo.codigo','cargo.nombrecorto','persona_cargo.observacion','persona_cargo.fechaAsignacion')
        ->join('persona', 'persona.id', '=', 'persona_cargo.persona_id')
        ->join('cargo', 'cargo.id', '=', 'persona_cargo.cargo_id')
        ->get();

        return  view('proceso.personacargo.index',['personacargo' => $personacargo]);
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
        $PersonaCargo=new PersonaCargo;
        $PersonaCargo->fechaAsignacion = $request->fechaAsignacionC;
        $PersonaCargo->observacion = $request->observacionC;
        $PersonaCargo->persona_id = $request->idPersonaC;
        $PersonaCargo->cargo_id = $request->Combocargo;
        $PersonaCargo->save();
        return redirect()->route('personacargo.index')->with('info' , 'Se registro correctamente');
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
