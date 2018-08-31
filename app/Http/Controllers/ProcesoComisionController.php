<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Ubigeo;
use App\Comision;
use DB;
use App\AsignarComision;
use Barryvdh\DomPDF\Facade as PDF;
use Session;
use Carbon\Carbon;
class ProcesoComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $date = Carbon::now();
        $fechaSistema=$date->format('Y-m-d');
        //return $fechaSistema;
        $fechaSistema = Carbon::parse($fechaSistema);
        //return $diasDiferencia;

        $comisionpersona = DB::table('asignar_comision')
        ->select(DB::raw('DATEDIFF("'.$fechaSistema.'",fechasalida) as dia, max(asignar_comision.id) as id_as_co, max(persona.id as personaid), max(persona.cip),max(persona.fechanacimiento), max( persona.apellidopaterno), max(persona.apellidomaterno), max(persona.nombres), max(comision.nombre), max(ubigeo.departamento), max(ubigeo.provincia),max(ubigeo.distrito),max(asignar_comision.numerocomision),max(asignar_comision.fechaemision),max(asignar_comision.fechallegada), max(asignar_comision.horallegada),max(asignar_comision.disposicion),max(asignar_comision.motivo),max(asignar_comision.fechasalida), max(asignar_comision.horasalida),max(asignar_comision.observacion),max(asignar_comision.estado)')
        ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
        ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
        ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
        ->groupby('asignar_comision.persona_id')
        ->get();

        
        //return $comisionpersona;
       //dd($comisionpersona);
        return  view('proceso.comision.index',['comisionpersona' => $comisionpersona]);
      
       // return view('proceso/comision/index');
    }

    public function selectListadoPorComisionEstado($estado='')
    {
        $date = Carbon::now();
        $fechaSistema=$date->format('Y-m-d');
        $fechaSistema = Carbon::parse($fechaSistema);
        
        $comisionpersona = DB::table('asignar_comision')
        ->select(DB::raw('DATEDIFF("'.$fechaSistema.'",fechasalida) as dia'),'asignar_comision.id as id_as_co','persona.cip','persona.fechanacimiento','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','comision.nombre','ubigeo.departamento', 'ubigeo.provincia', 'ubigeo.distrito','asignar_comision.numerocomision','asignar_comision.fechaemision','asignar_comision.fechallegada','asignar_comision.horallegada','asignar_comision.disposicion','asignar_comision.motivo','asignar_comision.fechasalida','asignar_comision.horasalida','asignar_comision.observacion','asignar_comision.estado','persona.id as personaid')
        ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
        ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
        ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
        ->orderBy('asignar_comision.id', 'desc')
        ->where('asignar_comision.estado',$estado)
     
        ->get();
       
        //return $comisionpersona;
       // dd($personagrado);
        return  view('proceso.comision.index',['comisionpersona' => $comisionpersona]);

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
        $comision= AsignarComision::findOrFail($id);
        $comision->update($request->all());
        return redirect()->route('comision.index');
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
            /*$insert->fecharetorno=$_POST['fechaRetorno'];
            $insert->horaretorno=$_POST['fechaRetorno'];
            $insert->observacion=$_POST['observacion'];*/
            $insert->estado='proceso';
            $insert->save();
        }
        Session::flash('Mensaje','Se registró correctamente la comision');
        return Response(['data'=>$_POST['idPersona']]);

    }
    public function pdfpapeletacomision($id='')
    {
       
       if($id=='')
       {
            $idMax =DB::table('asignar_comision')->max('id');
            $papeletacomision = DB::table('asignar_comision')
            ->select('asignar_comision.id','persona.cip','persona.fechanacimiento','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','comision.nombre','ubigeo.departamento', 'ubigeo.provincia', 'ubigeo.distrito','asignar_comision.numerocomision','asignar_comision.fechaemision','asignar_comision.fechallegada','asignar_comision.horallegada','asignar_comision.disposicion','asignar_comision.motivo','asignar_comision.fechasalida','asignar_comision.horasalida','asignar_comision.observacion','asignar_comision.lugarcomision','grado.nombrecorto',
            'ubigeo.departamento','ubigeo.provincia','ubigeo.distrito')
            ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
            ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
            ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
            ->join('persona_grado','persona_grado.persona_id','=','persona.id')
            ->join('grado','grado.id','=','persona_grado.grado_id')
            ->where('asignar_comision.id',$idMax)
            ->get();
       }else 
       {

            $papeletacomision = DB::table('asignar_comision')
            ->select('asignar_comision.id','persona.cip','persona.fechanacimiento','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','comision.nombre','ubigeo.departamento', 'ubigeo.provincia', 'ubigeo.distrito','asignar_comision.numerocomision','asignar_comision.fechaemision','asignar_comision.fechallegada','asignar_comision.horallegada','asignar_comision.disposicion','asignar_comision.motivo','asignar_comision.fechasalida','asignar_comision.horasalida','asignar_comision.observacion','asignar_comision.lugarcomision','grado.nombrecorto')
            ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
            ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
            ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
            ->join('persona_grado','persona_grado.persona_id','=','persona.id')
            ->join('grado','grado.id','=','persona_grado.grado_id')
            ->where('asignar_comision.id',$id)
            ->get();
       }

        $pdf = PDF::loadView('reportes.papeletacomision', compact('papeletacomision'));

        return $pdf->download('papeletacomision.pdf');      
    }  

    public function pdfhistorialpersonacomision($id)
    {
        $historialcomisionpersona = DB :: table('asignar_comision')
        ->select('persona.id' ,'persona.cip','persona.fechanacimiento','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','comision.nombre','ubigeo.departamento', 'ubigeo.provincia', 'ubigeo.distrito','asignar_comision.numerocomision','asignar_comision.fechaemision','asignar_comision.fechallegada','asignar_comision.horallegada','asignar_comision.disposicion','asignar_comision.motivo','asignar_comision.fechasalida','asignar_comision.horasalida','asignar_comision.observacion','asignar_comision.lugarcomision','grado.nombrecorto', 'comision.nombre as nombrecomision')
            ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
            ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
            ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
            ->join('persona_grado','persona_grado.persona_id','=','persona.id')
            ->join('grado','grado.id','=','persona_grado.grado_id')
            ->where('persona.id',$id)
            ->get();
        $pdf = PDF::loadView('reportes.historialcomisionpersona', compact('historialcomisionpersona'));
        return $pdf->download('historialcomisionpersona.pdf');      
    }

    public function culminarcomision($id)
    {   
        
        //$culminarcomision= AsignarComision::find($id);

        $culminarcomision = DB::table('asignar_comision')
        ->select('asignar_comision.id','persona.cip','persona.fechanacimiento','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','ubigeo.departamento', 'ubigeo.provincia', 'ubigeo.distrito','asignar_comision.numerocomision','asignar_comision.fechaemision','asignar_comision.fechallegada','asignar_comision.horallegada','asignar_comision.disposicion','asignar_comision.motivo','asignar_comision.fechasalida','asignar_comision.horasalida','asignar_comision.observacion','asignar_comision.lugarcomision','comision.nombre')
        ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
        ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
        ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
        ->where('asignar_comision.id',$id)
        ->get();

        return  view('proceso.comision.culminarcomision',['culminarcomision' => $culminarcomision]);

        //return view('proceso/comision/culminarcomision');
    }  
    
    public function terminarcomision(Request $request)
    {
        $terminarcomision= AsignarComision::find($request->id);
        $terminarcomision->fecharetorno=$request->fecharetorno;
        $terminarcomision->horaretorno=$request->horaretorno;
        $terminarcomision->observacion=$request->observacion;
        $terminarcomision->estado='culminado';
        $terminarcomision->save();
     
        return redirect()->route('asignarcomision.index');
    }

    public function historialcomisionpersona()
    {
        return  view('proceso.comision.historialcomisionpersona');

    }
    
}
