<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Ubigeo;
use App\Comision;
use DB;
use App\AsignarComision;
class ProcesoComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comisionpersona = DB::table('asignar_comision')
        ->select('persona.cip','persona.fechanacimiento','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','comision.nombre', 'ubigeo.departamento', 'ubigeo.provincia', 'ubigeo.distrito')
        ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
        ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
        ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
        ->get();
       // dd($personagrado);
        return  view('proceso.comision.index',['comisionpersona' => $comisionpersona]);
      
       // return view('proceso/comision/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persona=Persona::all();
        //$ubigeo=Ubigeo::all();
        //return $persona;
        $comision=Comision::all();

       $ubigeo = DB::table('ubigeo')
        ->select('departamento','provincia', 'distrito')
        ->wherenull('provincia')
        ->wherenull('distrito')
        ->get();

        return view('proceso.comision.create',['persona'=>$persona,'ubigeo'=>$ubigeo,'comision'=>$comision]);
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
     * @param  int  $idpersona_id=;
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function asignarComision(Request $request)
    {
        if($request->ajax())
        {
            $idPersona=$_POST['idPersona'];
            $Combocomision=$_POST['Combocomision'];
            $ComboDistrito=$_POST['ComboDistrito'];

            $insert=new AsignarComision;
            $insert->persona_id=$idPersona;
            $insert->comision_id=$Combocomision;
            $insert->ubigeo_id=$ComboDistrito;
            $insert->save();
        }
        return Response(['data'=>$idPersona]);

    }
}
