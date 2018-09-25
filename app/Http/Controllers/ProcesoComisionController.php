<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Ubigeo;
use App\Comision;
use App\Unidad;
use DB;
use App\AsignarComision;
use Barryvdh\DomPDF\Facade as PDF;
use Session;
use Carbon\Carbon;
use App\Http\Requests\ProcesoComisionRequest;
use Maatwebsite\Excel\Facades\Excel;
//use DispatchesJobs, ValidatesRequests;

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
        ->select(DB::raw('max(DATEDIFF("'.$fechaSistema.'",fechasalida)) as dia, max(persona.cip) as cip ,max(asignar_comision.id) as id_as_co, max(persona.id) as personaid,max(persona.fechanacimiento) as fechanacimiento,max(persona.apellidopaterno) as apellidopaterno,max(persona.apellidomaterno) as apellidomaterno,max(persona.nombres) as nombres,max(comision.nombre) as nombre,max(ubigeo.departamento) as departamento,max(ubigeo.provincia) as provincia, max(ubigeo.distrito) as distrito , max(asignar_comision.numerocomision) as numerocomision, max(asignar_comision.fechaemision) as fechaemision, max(asignar_comision.fechallegada) as fechallegada, max(asignar_comision.horallegada) as horallegada, max(asignar_comision.disposicion) as disposicion, max(asignar_comision.motivo) as motivo, max(asignar_comision.fechasalida) as fechasalida, max(asignar_comision.horasalida) as horasalida,max(asignar_comision.observacion) as observacion, max(asignar_comision.estado) as estado, max(grado.nombrecorto) as nombrecorto, max(asignar_comision.lugarcomision) as lugarcomision'))
        ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
        ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
        ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
        ->join('persona_grado','persona_grado.persona_id','=','persona.id')
        ->join('grado','grado.id','=','persona_grado.grado_id')
        ->groupby('asignar_comision.persona_id')
        ->orderBy('asignar_comision.id', 'desc')
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
        ->select(DB::raw('max(DATEDIFF("'.$fechaSistema.'",fechasalida)) as dia, max(persona.cip) as cip ,max(asignar_comision.id) as id_as_co, max(persona.id) as personaid,max(persona.fechanacimiento) as fechanacimiento,max(persona.apellidopaterno) as apellidopaterno,max(persona.apellidomaterno) as apellidomaterno,max(persona.nombres) as nombres,max(comision.nombre) as nombre,max(ubigeo.departamento) as departamento,max(ubigeo.provincia) as provincia, max(ubigeo.distrito) as distrito , max(asignar_comision.numerocomision) as numerocomision, max(asignar_comision.fechaemision) as fechaemision, max(asignar_comision.fechallegada) as fechallegada, max(asignar_comision.horallegada) as horallegada, max(asignar_comision.disposicion) as disposicion, max(asignar_comision.motivo) as motivo, max(asignar_comision.fechasalida) as fechasalida, max(asignar_comision.horasalida) as horasalida,max(asignar_comision.observacion) as observacion, max(asignar_comision.estado) as estado, max(grado.nombrecorto) as nombrecorto, max(asignar_comision.lugarcomision) as lugarcomision'))
        ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
        ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
        ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
        ->join('persona_grado','persona_grado.persona_id','=','persona.id')
        ->join('grado','grado.id','=','persona_grado.grado_id')
        ->groupby('asignar_comision.persona_id')
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
    //public function asignarComision(Request $request)
    {
        /*try {

            $arrValid = array(
                'numerocomision' => 'required|integer',
            );
            $request->validate(
                $arrValid,
                array(
                    'numerocomision.required' => 'User Id is missing',
                    'numerocomision.integer' => 'User Id must be an integer',
                )
            );

        } catch (\Illuminate\Validate\ValidationException $e ) {
            $arrError = $e->errors();
            foreach ($arrValid as $key=>$value ) {
                $arrImplode[] = implode( ', ', $arrError[$key] );
            }
            $message = implode(', ', $arrImplode);
            $arrResponse = array(
                'result' => 0,
                'reason' => $message,
                'data' => array(),
                'statusCode' => $e->status,
            );
        } catch (\Exception $ex) {

            $arrResponse = array(
                'result' => 0,
                'reason' => $ex->getMessage(),
                'data' => array(),
                'statusCode' => 404
            );

        } finally {

            return response()->json($arrResponse);

        }*/

        /*$this->validate($request, [
            'numerocomision' => 'required|numeric',
        ]);
    
        echo 'Ahora sé que los datos están validados. Puedo insertar en la base de datos';*/
           //return $request->all();
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
            /*$insert->fechallegada=$_POST['fechaLlegada'];
            $insert->horallegada=$_POST['horaLlegada'];*/
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
            'ubigeo.departamento','ubigeo.provincia','ubigeo.distrito','asignar_comision.fecharetorno','unidadlaboral.nivel1','unidadlaboral.nivel2','unidadlaboral.nivel3','unidadlaboral.nivel4','unidadlaboral.nivel5','unidadlaboral.nivel6','unidadlaboral.nivel7','unidadlaboral.nivel8','unidadlaboral.nivel9','unidadlaboral.nivel10','unidadlaboral.nivel12','unidadlaboral.nivel13','unidadlaboral.nivel14')
            ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
            ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
            ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
            ->join('persona_grado','persona_grado.persona_id','=','persona.id')
            ->join('grado','grado.id','=','persona_grado.grado_id')
            ->leftJoin('persona_unidad','persona_unidad.persona_id','=','persona.id')
            ->leftJoin('unidadlaboral','unidadlaboral.id','=','persona_unidad.unidad_id')
            ->where('asignar_comision.id',$idMax)
            ->get();
       }else 
       {

            $papeletacomision = DB::table('asignar_comision')
            ->select('asignar_comision.id','persona.cip','persona.fechanacimiento','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','comision.nombre','ubigeo.departamento', 'ubigeo.provincia', 'ubigeo.distrito','asignar_comision.numerocomision','asignar_comision.fechaemision','asignar_comision.fechallegada','asignar_comision.horallegada','asignar_comision.disposicion','asignar_comision.motivo','asignar_comision.fechasalida','asignar_comision.horasalida','asignar_comision.observacion','asignar_comision.lugarcomision','grado.nombrecorto',
            'asignar_comision.fecharetorno','unidadlaboral.nivel1','unidadlaboral.nivel2','unidadlaboral.nivel3','unidadlaboral.nivel4','unidadlaboral.nivel5','unidadlaboral.nivel6','unidadlaboral.nivel7','unidadlaboral.nivel8','unidadlaboral.nivel9','unidadlaboral.nivel10','unidadlaboral.nivel12','unidadlaboral.nivel13','unidadlaboral.nivel14')
            ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
            ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
            ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
            ->join('persona_grado','persona_grado.persona_id','=','persona.id')
            ->join('grado','grado.id','=','persona_grado.grado_id')
            ->leftJoin('persona_unidad','persona_unidad.persona_id','=','persona.id')
            ->leftJoin('unidadlaboral','unidadlaboral.id','=','persona_unidad.unidad_id')
            ->where('asignar_comision.id',$id)
            ->get();
       }

        $pdf = PDF::loadView('reportes.papeletacomision', compact('papeletacomision'));

        return $pdf->download('papeletacomision.pdf');      
    }  

    public function pdfpapeletareincorporacioncomision($id)
    {
        $papeletareincorporacioncomision = DB::table('asignar_comision')
        ->select('asignar_comision.id','persona.cip','persona.fechanacimiento','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','comision.nombre','ubigeo.departamento', 'ubigeo.provincia', 'ubigeo.distrito','asignar_comision.numerocomision','asignar_comision.fechaemision','asignar_comision.fechallegada','asignar_comision.horallegada','asignar_comision.disposicion','asignar_comision.motivo','asignar_comision.fechasalida','asignar_comision.horasalida','asignar_comision.observacion','asignar_comision.lugarcomision','grado.nombrecorto',
        'asignar_comision.fecharetorno','unidadlaboral.nivel1','unidadlaboral.nivel2','unidadlaboral.nivel3','unidadlaboral.nivel4','unidadlaboral.nivel5','unidadlaboral.nivel6','unidadlaboral.nivel7','unidadlaboral.nivel8','unidadlaboral.nivel9','unidadlaboral.nivel10','unidadlaboral.nivel12','unidadlaboral.nivel13','unidadlaboral.nivel14')
        ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
        ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
        ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
        ->join('persona_grado','persona_grado.persona_id','=','persona.id')
        ->join('grado','grado.id','=','persona_grado.grado_id')
        ->leftJoin('persona_unidad','persona_unidad.persona_id','=','persona.id')
        ->leftJoin('unidadlaboral','unidadlaboral.id','=','persona_unidad.unidad_id')
        ->where('asignar_comision.id',$id)
        ->get();
        $pdf = PDF::loadView('reportes.personacomision.papeletareincorporacioncomision', compact('papeletareincorporacioncomision'));

        return $pdf->stream('papeletacomision.pdf'); 
    }

    public function pdfpapeletacomisionpornumero(Request $request)
    {
        $pdf=PDF::loadView('reportes.personacomision.papeletacomisionpornumerocomision');
        return $pdf->stream('papeleta.pdf'); 
    }

    public function pdfhistorialpersonacomision($id)
    {
        $historialcomisionpersona = DB :: table('asignar_comision')
        ->select('persona.id' ,'persona.cip','persona.fechanacimiento','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','comision.nombre','ubigeo.departamento', 'ubigeo.provincia', 'ubigeo.distrito','asignar_comision.numerocomision','asignar_comision.fechaemision','asignar_comision.fechallegada','asignar_comision.horallegada','asignar_comision.disposicion','asignar_comision.motivo','asignar_comision.fechasalida','asignar_comision.horasalida','asignar_comision.observacion','asignar_comision.lugarcomision','grado.nombrecorto', 'comision.nombre as nombrecomision','unidadlaboral.nivel1','unidadlaboral.nivel2','unidadlaboral.nivel3','unidadlaboral.nivel4','unidadlaboral.nivel5','unidadlaboral.nivel6','unidadlaboral.nivel7','unidadlaboral.nivel8','unidadlaboral.nivel10','unidadlaboral.nivel11','unidadlaboral.nivel12','unidadlaboral.nivel13','unidadlaboral.nivel14')
            ->join('persona', 'persona.id', '=', 'asignar_comision.persona_id')
            ->join('ubigeo', 'ubigeo.id', '=', 'asignar_comision.ubigeo_id')
            ->join('comision', 'comision.id', '=', 'asignar_comision.comision_id')
            ->join('persona_grado','persona_grado.persona_id','=','persona.id')
            ->join('grado','grado.id','=','persona_grado.grado_id')
            ->join('persona_unidad','persona_unidad.persona_id','=','persona.id')
            ->join('unidadlaboral','unidadlaboral.id','=','persona_unidad.unidad_id')
            ->where('persona.id',$id)
            ->get();
        $pdf = PDF::loadView('reportes.historialcomisionpersona', compact('historialcomisionpersona'));
        return $pdf->download('historialcomisionpersona.pdf');      
    }
    public function pdfcomisionporunidad()
    {
        //$unidad=Unidad::all();   
        $comisionunidad= DB::table('asignar_comision')
        ->select(DB::raw('count(persona_unidad.persona_id) as cantidad, unidadlaboral.codigo, unidadlaboral.nivel2, unidadlaboral.nivel4,unidadlaboral.nivel6, unidadlaboral.nivel8, unidadlaboral.nivel10, unidadlaboral.nivel12, unidadlaboral.nivel14'))
        ->rightJoin('comision','asignar_comision.comision_id','=','comision.id')
        ->leftJoin('persona','asignar_comision.persona_id','=','persona.id')
        ->leftJoin('persona_unidad','persona.id','=','persona_unidad.persona_id')
        ->rightJoin('unidadlaboral','persona_unidad.unidad_id','=','unidadlaboral.id')
        ->groupby('unidadlaboral.codigo','unidadlaboral.nivel2','unidadlaboral.nivel4','unidadlaboral.nivel6', 'unidadlaboral.nivel8','unidadlaboral.nivel10','unidadlaboral.nivel12','unidadlaboral.nivel14')
        ->get();
       // return $comisionunidad;
       // return $comisionunidad;
        $pdf=PDF::loadView('reportes.comisionporunidad', compact('comisionunidad'));
        
        $pdf->setPaper('A4', 'landscape');
        //return $pdf::download('historialcomisionpersona.pdf');
        return $pdf->stream('comisionunidad.pdf'); 

        //SELECT unidadlaboral.codigo, count(persona_unidad.persona_id) as cantidad FROM `asignar_comision` RIGHT join comision on asignar_comision.comision_id=comision.id left join persona on asignar_comision.persona_id=persona.id left join persona_unidad on persona.id=persona_unidad.persona_id RIGHT join unidadlaboral on persona_unidad.unidad_id=unidadlaboral.id GROUP by (unidadlaboral.codigo)
    }

    public function excelpendientescomision()
    {
        Excel::create('Comision-pendientes', function($excel) {
            $excel->sheet('Excel sheet', function($sheet) {

                $sheet->mergeCells('A1:G1');            
                $sheet->row(1,['LISTADO DE PERSONAS QUE NO RETORNARON DE COMISIÓN (PENDIENTE)']);
                $sheet->row(2,['NRO.','CIP','APELLIDOS Y NOMBRES','LUGAR','MOTIVO','POR DISPOSICIÓN','FECHA DE SALIDA']);;
              
                $data= DB::table('asignar_comision')
                ->select('persona.cip','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','asignar_comision.lugarcomision','asignar_comision.motivo','asignar_comision.fechasalida','asignar_comision.horasalida','asignar_comision.disposicion')
                ->join('persona','persona.id','=','asignar_comision.persona_id')
                ->join('comision','comision.id','=','asignar_comision.comision_id')
                ->get();

                foreach($data as $item)
                {
                    $row=[];
                    for( $numero=1; $numero<100; $numero++){
                        $row[0]=$numero;
                    }
                    $row[1]=$item->cip;
                    $row[2]=$item->apellidopaterno.' '.$item->apellidomaterno.' '.$item->nombres;
                    $row[3]=$item->lugarcomision;
                    $row[4]=$item->motivo;
                    $row[5]=$item->disposicion;
                    $row[6]=$item->fechasalida.' '.$item->horasalida;
                    $array[]=$row;
                    $sheet->appendRow($row);
                }
                    $sheet->getStyle('A1:B5' , $sheet->getHighestRow())->getAlignment()->setWrapText(true);
                    $sheet->setTitle("Lista Revista-Incluir");

                    $sheet->cells('A1:G1', function($cells)
                    {
                        $cells->setAlignment('center');
                        $cells->setFontWeight('bold');
                        $cells->setFontSize(14);
                        $cells->setValignment('center');

                    });
                    $sheet->setHeight(array
                    (
                        '1' => '20'
                    )); 
                    $sheet->cells('A2:G2', function($cells)
                    {
                        $cells->setAlignment('center');
                        $cells->setFontWeight('bold');
                        $cells->setFontSize(12);
                        $cells->setValignment('center');
                    });
                    $sheet->setHeight(array
                    (
                        '1' => '20'
                    ));  
                    
                    $sheet->setHeight(array
                    (
                        '1' => '20'
                    ));   
             });
        })->export('xls');
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
   
}
