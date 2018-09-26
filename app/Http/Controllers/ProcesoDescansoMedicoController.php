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

    public function reportedescansomedico()
    {
        return view('proceso.descansomedico.reporte');
    }
    public function excelpnpcondescansomedico()
    {
        Excel::create('Lista Descanso Medico', function($excel) {
            $excel->sheet('Excel sheet', function($sheet) {

                $sheet->mergeCells('A1:G1');            
                $sheet->row(1,['LISTADO DE PERSONAS CON DESCANSO MÉDICO']);
                $sheet->row(2,['NRO.','CIP','APELLIDOS Y NOMBRES','NUMERO DE DÍAS','MOTIVO','FECHA INICIO','FECHA TÉRMINO']);;
              
                /*$data= DB::table('asignar_comision')
                ->select('persona.cip','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','asignar_comision.lugarcomision','asignar_comision.motivo','asignar_comision.fechasalida','asignar_comision.horasalida','asignar_comision.disposicion')
                ->join('persona','persona.id','=','asignar_comision.persona_id')
                ->join('comision','comision.id','=','asignar_comision.comision_id')
                ->get();
                $numero=0;
                foreach($data as $item)
                {
                    $numero=(int)$numero+1;
                    $row=[];
                    
                    $row[0]=$numero;
                    $row[1]=$item->cip;
                    $row[2]=$item->apellidopaterno.' '.$item->apellidomaterno.' '.$item->nombres;
                    $row[3]=$item->lugarcomision;
                    $row[4]=$item->motivo;
                    $row[5]=$item->disposicion;
                    $row[6]=$item->fechasalida.' '.$item->horasalida;
                    $array[]=$row;
                    $sheet->appendRow($row);
                }*/
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
}
