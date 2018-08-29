<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use DB;
use App\Grado;
use Session;
use App\Http\Requests\PersonaRequest;
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $persona=Persona::paginate(8);
        //dd($persona);
        return  view('admin.persona.index',['persona' => $persona]);
        //return view('admin/persona/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaRequest $request)
    {
        $persona = new Persona;
        $persona->cip = $request->cip;
        $persona->apellidopaterno = $request->apellidopaterno;
        $persona->apellidomaterno = $request->apellidomaterno;
        $persona->fechanacimiento = $request->fechanacimiento;
        $persona->nombres = $request->nombres;
        $persona->celular = $request->celular;
        $persona->cuenta = $request->cuenta;
        $persona->dni = $request->dni;
        $persona->estadocivil = $request->estadocivil;
        $persona->sexo = $request->sexo;
        $persona->email = $request->email;

        $persona->save();
        Session::flash('Mensaje','Se guardo correctamente los datos de la persona');
        return redirect()->route('persona.index')->with('info' , 'Se registro correctamente');
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
        $persona= Persona::find($id);
        return  view('admin.persona.update',['persona' => $persona]);
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
        $persona= Persona::findOrFail($id);
        $persona->update($request->all());
        return redirect()->route('persona.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function search()
    {

        if(request()->ajax())
        {
            $idPersona =$_POST['idPersona'];

            $search = DB::table('persona_grado')
            ->select('persona.*', 'grado.id as idgrado', 'grado.nombrecorto')
            ->join('persona', 'persona.id', '=', 'persona_grado.persona_id')
            ->join('grado', 'grado.id', '=', 'persona_grado.grado_id')
            ->where('persona.id', $idPersona)
            ->get()[0];

            return response(["data" => $search]);
        }
    }
     public function searchCipPersona()
    {

        if(request()->ajax())
        {
            $cip =$_POST['cip'];

            $Persona = DB::table('persona_grado')
            ->select('persona.*', 'grado.id as idgrado', 'grado.nombrecorto')
            ->join('persona', 'persona.id', '=', 'persona_grado.persona_id')
            ->join('grado', 'grado.id', '=', 'persona_grado.grado_id')
            ->where('persona.cip', $cip)
            ->get()[0];
           /* $Persona=Persona::
            where('cip', $cip)
                              ->get()[0];*/
            return response(["data" => $Persona]);
        }
    }

    public function buscar(Request $request)
    {

            $data = [];

            if($request->has('q')){
                $search = $request->q;
                $data = DB::table("persona")
                        ->select("id",DB::raw("CONCAT(nombres,' ',apellidopaterno,' ',apellidomaterno) as text"))
                        ->where('nombres','=', $search)
                        ->orwhere('apellidomaterno','=',$search)
                        ->orwhere('apellidopaterno','=',$search)
                        ->get();
            }


            return response()->json($data);
           
    }

    public function listarUnidadLaboral()
    {
            $data = DB::table("unidadlaboral")
                    ->select('unidadlaboral.*')
                    ->get();

            return response(["data" => $data]);
           
    }
     
}
