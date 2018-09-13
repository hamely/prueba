<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cip;
use Session;
use App\Http\Requests\CipRequest;

class CipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cip=Cip::all();
        return view('admin.cip.index',['cip'=>$cip]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CipRequest $request)
    {
        $cip = new Cip;
        $cip->codigo = $request->codigo;
        $cip->nombre = $request->nombre;
        $cip->save();
        Session::flash('Mensaje','Se guardo correctamente el estado del cip');
        
        return redirect()->route('cip.index');
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
        $cip= Cip::find($id);
        return  view('admin.cip.update',['cip' => $cip]);
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
        $cip= Cip::findOrFail($id);
        $cip->update($request->all());
        Session::flash('MensajeActualizar','Se actualizó correctamente estado del cip');
        return redirect()->route('cip.index');
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
