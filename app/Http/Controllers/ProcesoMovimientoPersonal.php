<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use App\MovimientoPersonal;

class ProcesoMovimientoPersonal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function movimientoincluir()
    {
        $data = DB::table('movimiento_personal')
        ->select('persona.cip','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','unidadlaboral.codigo as codigounidad','cargo.codigo as codigocargo','documento.nombre as nombredocumento')
        ->join('persona', 'persona.id', '=', 'movimiento_personal.persona_id')
        ->join('unidadlaboral', 'unidadlaboral.id', '=', 'movimiento_personal.unidad_id')
        ->join('cargo','cargo.id','=','movimiento_personal.cargo_id')
        ->join('documento','documento.id','=','movimiento_personal.documento_id')
        ->where('movimiento_personal.tipo','=','incluir')
        ->where('movimiento_personal.estado','=','activo')
        ->orderBy('movimiento_personal.id', 'desc')
        ->get();
        //dd($data);
        return view('proceso.movimientopersonal.incluir.index', compact('data'));
        //return view('proceso.movimientopersonal.incluir.index',['data'=>$data]);
    }

    public function movimientoincluircreate(){
        $documento = DB::table('documento')
                    ->select('id','nombre')
                    ->get();
        $movimiento = DB::table('movimiento')
                    ->select('id','nombre')
                    ->get();
        $unidad = DB::table('unidadlaboral')
                    ->select('id','codigo','nivel2','nivel4','nivel6','nivel8','nivel10','nivel12','nivel14')
                    ->get();
        $cargo = DB::table('cargo')
                    ->select('id','codigo','nombrecorto')
                    ->get();
        $horario = DB::table('horario')
                    ->select('id','codigo','nombre')
                    ->get();
        $cip = DB::table('cip')
                    ->select('id','codigo','nombre')
                    ->get();
        return view('proceso.movimientopersonal.incluir.create',['documento' => $documento,'movimiento'=>$movimiento,'unidad'=>$unidad,'cargo'=>$cargo,'horario'=>$horario,'cip'=>$cip]);
    } 

    public function movimientoincluirinsertar(Request $request)
    {
        if($request->ajax())
        {
            $nCount= DB::table('movimiento_personal')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get();
            if(count($nCount)==0){
                $numero=null;
            }else
            {
                $numeroRegistro= DB::table('movimiento_personal')
                            ->select(DB::raw('max(movimiento_personal.numeroregistro) as numeroregistro'))
                            ->groupby('movimiento_personal.persona_id')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get()[0];
                $numero=$numeroRegistro->numeroregistro; 
            }

            $insert=new MovimientoPersonal;
            $insert->persona_id=$_POST['idPersona'];
            $insert->documento_id=$_POST['comboDocumento'];
            $insert->numerodocumento=$_POST['numerodocumento'];
            $insert->sigladocumento=$_POST['sigladocumento'];
            $insert->fechadocumento=$_POST['fechadocumento'];
            $insert->fechainclusion=$_POST['fechainclusion'];
            $insert->movimiento_id=$_POST['comboMovimiento'];
            $insert->tiempo=$_POST['tiempo'];
            $insert->unidad_id=$_POST['comboUnidad'];
            $insert->cargo_id=$_POST['comboCargo'];
            $insert->cip_id=$_POST['comboCip'];
            $insert->horario_id=$_POST['comboHorario'];
            $insert->observacion=$_POST['observacion'];
            $insert->tipo='incluir';
            if($numero==null)
            {
                
                $insert->numeroregistro=1;
                $insert->estado='activo';
                $insert->save();
            }else {
                
                
                MovimientoPersonal::where('persona_id', '=',$_POST['idPersona'])
                                    ->where('numeroregistro', '=',$numero)
                                    ->update(['estado' => 'inactivo']);
                $numeroRe=$numero+1;
                $insert->numeroregistro=$numeroRe;
                $insert->estado='activo';
                $insert->save();
            }
           
        }
       
        return Response(['data'=>$_POST['idPersona']]);
    }

    public function excelmovimientoincluir()
    {
        Excel::create('Laravel Excel', function($excel) {
            $excel->sheet('Excel sheet', function($sheet) {

                //otra opción -> $products = Product::select('name')->get();
              
                $data = DB::table('movimiento_personal')
                            ->select('persona.cip','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','unidadlaboral.codigo as codigounidad','cargo.codigo as codigocargo','documento.nombre as nombredocumento')
                            ->join('persona', 'persona.id', '=', 'movimiento_personal.persona_id')
                            ->join('unidadlaboral', 'unidadlaboral.id', '=', 'movimiento_personal.unidad_id')
                            ->join('cargo','cargo.id','=','movimiento_personal.cargo_id')
                            ->join('documento','documento.id','=','movimiento_personal.documento_id')
                            ->where('movimiento_personal.tipo','=','incluir')
                            ->where('movimiento_personal.estado','=','activo')
                            ->orderBy('movimiento_personal.id', 'desc')
                            ->get();       
                $data= json_decode( json_encode($data), true);    
                $sheet->fromArray($data);

                $sheet->setOrientation('landscape');

            });
        })->export('xls');
        
    }

    public function movimientoexcluir()
    {
        $data = DB::table('movimiento_personal')
        ->select('persona.cip','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','unidadlaboral.codigo as codigounidad','documento.nombre as nombredocumento')
        ->join('persona', 'persona.id', '=', 'movimiento_personal.persona_id')
        ->join('unidadlaboral', 'unidadlaboral.id', '=', 'movimiento_personal.unidad_id')
        ->join('documento','documento.id','=','movimiento_personal.documento_id')
        ->where('movimiento_personal.tipo','=','excluir')
        ->where('movimiento_personal.estado','=','activo')
        ->orderBy('movimiento_personal.id', 'desc')
        ->get();
        //dd($data);
        return view('proceso.movimientopersonal.excluir.index',['data'=>$data]);
    }

    public function movimientoexcluircreate()
    {
        $documento=DB::table('documento')
        ->select('id','nombre')
        ->get();
        $movimiento=DB::table('movimiento')
        ->select('id','nombre')
        ->get();
        $unidad=DB::table('unidadlaboral')
        ->select('id','codigo','nivel2','nivel4','nivel6','nivel8','nivel10','nivel12','nivel14')
        ->where('nivel8','like','%CONFRONTA%')
        ->get();
        return view('proceso.movimientopersonal.excluir.create',['documento'=>$documento,'movimiento'=>$movimiento,'unidad'=>$unidad]);
    }
    
    public function movimientoexcluirinsertar(Request $request)
    {
        if($request->ajax())
        {
            $nCount= DB::table('movimiento_personal')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get();
            if(count($nCount)==0){
                $numero=null;
            }else
            {
                $numeroRegistro= DB::table('movimiento_personal')
                            ->select(DB::raw('max(movimiento_personal.numeroregistro) as numeroregistro'))
                            ->groupby('movimiento_personal.persona_id')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get()[0];
                $numero=$numeroRegistro->numeroregistro; 
            }
        
            $insert=new MovimientoPersonal;
            $insert->persona_id=$_POST['idPersona'];
            $insert->documento_id=$_POST['comboDocumento'];
            $insert->numerodocumento=$_POST['numerodocumento'];
            $insert->sigladocumento=$_POST['sigladocumento'];
            $insert->fechadocumento=$_POST['fechadocumento'];
            $insert->fechaexclusion=$_POST['fechaexclusion'];
            $insert->movimiento_id=$_POST['comboMovimiento'];
            $insert->unidad_id=$_POST['comboUnidad'];
            $insert->cargo_id='0';
            $insert->cip_id='0';
            $insert->horario_id='0';
            $insert->observacion=$_POST['observacion'];
            $insert->tipo='excluir';
            if($numero==null)
            {
                
                $insert->numeroregistro=1;
                $insert->estado='activo';
                $insert->save();
            }else {
                           
                MovimientoPersonal::where('persona_id', '=',$_POST['idPersona'])
                                    ->where('numeroregistro', '=',$numero)
                                    ->update(['estado' => 'inactivo']);
                $numeroRe=$numero+1;
                $insert->numeroregistro=$numeroRe;
                $insert->estado='activo';
                $insert->save();
            }
        }
       
        return Response(['data'=>$_POST['idPersona']]);
    }
    public function movimientocambiounidad()
    {
        return view('proceso.movimientopersonal.cambiounidad.index');
    }
    public function movimientocambiounidadcreate()
    {
        $documento=DB::table('documento')
                    ->select('id','nombre')
                    ->get();
        $unidad = DB::table('unidadlaboral')
                    ->select('id','codigo','nivel2','nivel4','nivel6','nivel8','nivel10','nivel12','nivel14')
                    ->get();
        $cargo = DB::table('cargo')
                    ->select('id','codigo','nombrecorto')
                    ->get();
        return view('proceso.movimientopersonal.cambiounidad.create',['documento'=>$documento,'unidad'=>$unidad,'cargo'=>$cargo]);
    }
    public function movimientocambiounidadinsertar(Request $request)
    {
        if($request->ajax())
        {
            $nCount= DB::table('movimiento_personal')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get();
            if(count($nCount)==0){
                $numero=null;
            }else
            {
                $numeroRegistro= DB::table('movimiento_personal')
                            ->select(DB::raw('max(movimiento_personal.numeroregistro) as numeroregistro'))
                            ->groupby('movimiento_personal.persona_id')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get()[0];
                $numero=$numeroRegistro->numeroregistro; 
            }
        
            $insert=new MovimientoPersonal;
            $insert->persona_id=$_POST['idPersona'];
            $insert->documento_id=$_POST['comboDocumento'];
            $insert->numerodocumento=$_POST['numerodocumento'];
            $insert->sigladocumento=$_POST['sigladocumento'];
            $insert->fechadocumento=$_POST['fechadocumento'];
            $insert->fechacambiounidad=$_POST['fechacambiounidad'];
            $insert->movimiento_id='0';
            $insert->unidad_id=$_POST['comboUnidad'];
            $insert->cargo_id='0';
            $insert->cip_id='0';
            $insert->horario_id='0';
            $insert->observacion=$_POST['observacion'];
            $insert->tipo='cambiounidad';
            if($numero==null)
            {
                $insert->numeroregistro=1;
                $insert->estado='activo';
                $insert->save();
            }else {
                           
                MovimientoPersonal::where('persona_id', '=',$_POST['idPersona'])
                                    ->where('numeroregistro', '=',$numero)
                                    ->update(['estado' => 'inactivo']);
                $numeroRe=$numero+1;
                $insert->numeroregistro=$numeroRe;
                $insert->estado='activo';
                $insert->save();
            }
        }
       
        return Response(['data'=>$_POST['idPersona']]);
    }

    public function movimientocambiocargo()
    {
        return view('proceso.movimientopersonal.cambiocargo.index');
    }
    public function movimientocambiocargocreate()
    {
        $documento=DB::table('documento')
                    ->select('id','nombre')
                    ->get();
        $cargo = DB::table('cargo')
                    ->select('id','codigo','nombrecorto')
                    ->get();
        return view('proceso.movimientopersonal.cambiocargo.create',['documento'=>$documento,'cargo'=>$cargo]);
    }

    public function movimientocambiocargoinsertar(Request $request)
    {
        if($request->ajax())
        {
            $nCount= DB::table('movimiento_personal')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get();
            if(count($nCount)==0){
                $numero=null;
            }else
            {
                $numeroRegistro= DB::table('movimiento_personal')
                            ->select(DB::raw('max(movimiento_personal.numeroregistro) as numeroregistro'))
                            ->groupby('movimiento_personal.persona_id')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get()[0];
                $numero=$numeroRegistro->numeroregistro; 
            }
        
            $insert=new MovimientoPersonal;
            $insert->persona_id=$_POST['idPersona'];
            $insert->documento_id=$_POST['comboDocumento'];
            $insert->numerodocumento=$_POST['numerodocumento'];
            $insert->sigladocumento=$_POST['sigladocumento'];
            $insert->fechadocumento=$_POST['fechadocumento'];
            $insert->fechacambiocargo=$_POST['fechacambiocargo'];
            $insert->movimiento_id='0';
            $insert->unidad_id='0';
            $insert->cargo_id=$_POST['comboCargo'];
            $insert->cip_id='0';
            $insert->horario_id='0';
            $insert->observacion=$_POST['observacion'];
            $insert->tipo='cambiocargo';
            if($numero==null)
            {
                $insert->numeroregistro=1;
                $insert->estado='activo';
                $insert->save();
            }else {
                           
                MovimientoPersonal::where('persona_id', '=',$_POST['idPersona'])
                                    ->where('numeroregistro', '=',$numero)
                                    ->update(['estado' => 'inactivo']);
                $numeroRe=$numero+1;
                $insert->numeroregistro=$numeroRe;
                $insert->estado='activo';
                $insert->save();
            }
        }
       
        return Response(['data'=>$_POST['idPersona']]);
    }

    public function movimientocambiosituacioncip()
    {
        return view('proceso.movimientopersonal.cambiosituacioncip.index');
    }

    public function movimientocambiosituacioncipcreate()
    {
        $documento=DB::table('documento')
        ->select('id','nombre')
        ->get();
        $cip = DB::table('cip')
                    ->select('id','codigo','nombre')
                    ->get();
        return view('proceso.movimientopersonal.cambiosituacioncip.create',['documento'=>$documento,'cip'=>$cip]);
    }
    public function movimientocambiosituacioncipinsertar(Request $request)
    {
        if($request->ajax())
        {
            $nCount= DB::table('movimiento_personal')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get();
            if(count($nCount)==0){
                $numero=null;
            }else
            {
                $numeroRegistro= DB::table('movimiento_personal')
                            ->select(DB::raw('max(movimiento_personal.numeroregistro) as numeroregistro'))
                            ->groupby('movimiento_personal.persona_id')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get()[0];
                $numero=$numeroRegistro->numeroregistro; 
            }
        
            $insert=new MovimientoPersonal;
            $insert->persona_id=$_POST['idPersona'];
            $insert->documento_id=$_POST['comboDocumento'];
            $insert->numerodocumento=$_POST['numerodocumento'];
            $insert->sigladocumento=$_POST['sigladocumento'];
            $insert->fechadocumento=$_POST['fechadocumento'];
            $insert->movimiento_id='0';
            $insert->unidad_id='0';
            $insert->cargo_id='0';
            $insert->cip_id=$_POST['comboCip'];
            $insert->horario_id='0';
            $insert->observacion=$_POST['observacion'];
            $insert->tipo='cambiosituacioncip';
            if($numero==null)
            {
                $insert->numeroregistro=1;
                $insert->estado='activo';
                $insert->save();
            }else {
                           
                MovimientoPersonal::where('persona_id', '=',$_POST['idPersona'])
                                    ->where('numeroregistro', '=',$numero)
                                    ->update(['estado' => 'inactivo']);
                $numeroRe=$numero+1;
                $insert->numeroregistro=$numeroRe;
                $insert->estado='activo';
                $insert->save();
            }
        }
       
        return Response(['data'=>$_POST['idPersona']]);
    }

    public function movimientocambiohorario()
    {
        return view('proceso.movimientopersonal.cambiohorario.index');
    }
    public function movimientocambiohorariocreate()
    {
        $documento=DB::table('documento')
                    ->select('id','nombre')
                    ->get();
        $horario = DB::table('horario')
                    ->select('id','codigo','nombre')
                    ->get();
        return view('proceso.movimientopersonal.cambiohorario.create',['documento'=>$documento,'horario'=>$horario]);
    }

    public function movimientocambiohorarioinsert(Request $request)
    {
        if($request->ajax())
        {
            $nCount= DB::table('movimiento_personal')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get();
            if(count($nCount)==0){
                $numero=null;
            }else
            {
                $numeroRegistro= DB::table('movimiento_personal')
                            ->select(DB::raw('max(movimiento_personal.numeroregistro) as numeroregistro'))
                            ->groupby('movimiento_personal.persona_id')
                            ->where('movimiento_personal.persona_id',$_POST['idPersona'])
                            ->get()[0];
                $numero=$numeroRegistro->numeroregistro; 
            }
        
            $insert=new MovimientoPersonal;
            $insert->persona_id=$_POST['idPersona'];
            $insert->documento_id=$_POST['comboDocumento'];
            $insert->numerodocumento=$_POST['numerodocumento'];
            $insert->sigladocumento=$_POST['sigladocumento'];
            $insert->fechadocumento=$_POST['fechadocumento'];
            $insert->fechacambiohorario=$_POST['fechacambiohorario'];
            $insert->movimiento_id='0';
            $insert->unidad_id='0';
            $insert->cargo_id='0';
            $insert->cip_id='0';
            $insert->horario_id=$_POST['comboHorario'];
            $insert->observacion=$_POST['observacion'];
            $insert->tipo='cambiohorario';
            if($numero==null)
            {
                $insert->numeroregistro=1;
                $insert->estado='activo';
                $insert->save();
            }else {
                           
                MovimientoPersonal::where('persona_id', '=',$_POST['idPersona'])
                                    ->where('numeroregistro', '=',$numero)
                                    ->update(['estado' => 'inactivo']);
                $numeroRe=$numero+1;
                $insert->numeroregistro=$numeroRe;
                $insert->estado='activo';
                $insert->save();
            }
        }
       
        return Response(['data'=>$_POST['idPersona']]);
    }
}