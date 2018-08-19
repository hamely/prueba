<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ubigeo;

class UbigeoController extends Controller
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

    public function provincia(Request $request)
    {
        if($request->ajax())
        {
            $departamento=$_POST['departamento'];
            $provincia   =Ubigeo::where('departamento',$departamento)
                                  ->whereNull('distrito')
                                  ->whereNotNull('provincia')
                                  ->get();

            return response(['data'=>$provincia]);
        }
    }
    public function distrito(Request $request)
    {
        if($request->ajax())
        {
            $provincia =$_POST['provincia'];
            $distrito=Ubigeo::Where('provincia',$provincia)
                              ->whereNotNull('distrito')
                              ->get();
            return response(['data'=>$distrito]);
        }
    }
}
