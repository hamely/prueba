<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Ubigeo;
use App\Comision;
use DB;
use App\AsignarComision;
use Barryvdh\DomPDF\Facade as PDF;
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
        ->select('persona.cip','persona.fechanacimiento','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','comision.nombre','ubigeo.departamento', 'ubigeo.provincia', 'ubigeo.distrito','asignar_comision.numerocomision','asignar_comision.fechaemision','asignar_comision.fechallegada','asignar_comision.horallegada','asignar_comision.disposicion','asignar_comision.motivo','asignar_comision.fechasalida','asignar_comision.horasalida','asignar_comision.observacion')
        ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
        ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
        ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
        ->get();
        //return $comisionpersona;
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
        
            
        //$ubigeo=Ubigeo::all();
        //return $persona;
        $comision=Comision::all();

       $ubigeo = DB::table('ubigeo')
        ->select('departamento','provincia', 'distrito')
        ->wherenull('provincia')
        ->wherenull('distrito')
        ->get();

        return view('proceso.comision.create',['ubigeo'=>$ubigeo,'comision'=>$comision]);
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
            $insert=new AsignarComision;
            $insert->persona_id=$_POST['idPersona'];
            $insert->numerocomision=$_POST['numeroComision'];
            $insert->comision_id=$_POST['comboComision'];
            $insert->ubigeo_id=$_POST['comboDistrito'];
            $insert->lugarcomision=$_POST['lugarComision'];
            $insert->fechaemision='2018-01-01';
            $insert->motivo=$_POST['motivo'];
            $insert->disposicion=$_POST['disposicion'];
            $insert->fechasalida=$_POST['fechaSalida'];
            $insert->horasalida=$_POST['horaSalida'];
            $insert->fechallegada=$_POST['fechaLlegada'];
            $insert->horallegada=$_POST['horaLlegada'];
            $insert->fecharetorno=$_POST['fechaRetorno'];
            $insert->horaretorno=$_POST['fechaRetorno'];
            $insert->observacion=$_POST['observacion'];

            $insert->save();
        }
        return Response(['data'=>$_POST['idPersona']]);

    }
    public function pdfpapeletacomision()
    {
        $products = Comision::all(); 

        $pdf = PDF::loadView('reportes.papeletacomision', compact('products'));

        return $pdf->download('listado.pdf');      
    }  

    public function culminarcomision()
    {
        return view('proceso/comision/culminarcomision');
    }   
    
}
