<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documento;
use Session;
use App\Http\Requests\DocumentoRequest;
class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documento=Documento::all();
        return view('admin.documento.index',['documento' => $documento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.documento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentoRequest $request)
    {
        $documento = new Documento;
        $documento->nombre = $request->nombre;
        $documento->save();
        Session::flash('Mensaje', 'Se registro correctamente el tipo de documento');
        return redirect()->route('documento.index');
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
        $documento= Documento::find($id);
        return  view('admin.documento.update',['documento' => $documento]);
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
        $documento= Documento::findOrFail($id);
        $documento->update($request->all());
        Session::flash('MensajeActualizar','Se actualizó correctamente tipo de documento');
        return redirect()->route('documento.index');
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
