<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Licencia;
use Session;
use App\Http\Requests\LicenciaRequest;
class LicenciaController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth' ,'roles:admin,com,carnet']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licencia=Licencia::all();
        //dd($sancion);
        return  view('admin.licencia.index',['licencia' => $licencia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.licencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LicenciaRequest $request)
    {
        $licencia = new Licencia;
        $licencia->codigo = $request->codigo;
        $licencia->nombre = $request->nombre;
        $licencia->save();
        Session::flash('Mensaje','Se registró correctamente la licencia');
        return redirect()->route('licencia.index')->with('info' , 'Se registro correctamente');
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
        $licencia= Licencia::find($id);
        return  view('admin.licencia.update',['licencia' => $licencia]);
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
        $licencia= Licencia::findOrFail($id);
        $licencia->update($request->all());
        Session::flash('MensajeActualizar','Se actualizo correctamente la licencia');
        return redirect()->route('licencia.index');
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
