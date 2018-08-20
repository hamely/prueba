<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\PersonaGrado;
use App\Persona;
class ProcesoPersonaGrado extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $results = PersonaGrado::select('PersonaGrado_id')->whereHas('persona_grado', function($query) use ($Persona) {
            $query->where('persona_id', $Persona);
        })->get();
        return $results;*/
        $personagrado = DB::table('persona_grado')
        ->select('persona.cip','persona.dni','persona.cuenta','persona.fechanacimiento','persona.sexo','persona.estadocivil','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','persona.celular','persona.email','grado.codigo','grado.nombre','persona_grado.observacion','persona_grado.fechaAsignacion')
        ->join('persona', 'persona.id', '=', 'persona_grado.persona_id')
        ->join('grado', 'grado.id', '=', 'persona_grado.grado_id')
        ->get();
       // dd($personagrado);
        return  view('proceso.personagrado.index',['personagrado' => $personagrado]);
      
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
        $PersonaGrado=new PersonaGrado;
        $PersonaGrado->fechaAsignacion = $request->fechaAsignacion;

        $PersonaGrado->observacion = $request->observacion;
        $PersonaGrado->persona_id = $request->idPersonaG;
        $PersonaGrado->grado_id = $request->Combogrado;
        $PersonaGrado->save();
        return redirect()->route('personagrado.index')->with('info' , 'Se registro correctamente');
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
