<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use DB;
use App\Grado;
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $persona=Persona::paginate(5);
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
    public function store(Request $request)
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
            $cip            =$_POST['cip'];
            $nombreCompleto =$_POST['nombreCompleto'];

            $Persona=Persona::select('id', DB::raw('CONCAT(apellidopaterno," ",apellidomaterno," ", nombres) AS full_name'))
                            ->get()[5];

            foreach ($Persona as $item) 
            {
                if($nombreCompleto==$item->full_name)
                {
                    $id=$item->id;  
                }
            }

            $search=Persona::find($id);

            return response(["data" => $search]);
        }
    }
    public function buscar(Request $request)
    {
            $term = $request->term ?: '';
           
            $tags = Grado::where('nombre', 'like', $term.'%')->get();
            return $tags;
            $valid_tags = [];
            foreach ($tags as $id => $tag) {
                $valid_tags[] = ['id' => $id, 'text' => $tag];
            }
            return response(["term" => $valid_tags]);
           //return Response::json($valid_tags);
    }
     
}
