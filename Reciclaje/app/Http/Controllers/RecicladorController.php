<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reciclador;
use App\Lugar;

class RecicladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**Muestra todos los recicladores */
    public function index()
    {
        $reciclador = Reciclador::all();
        return view('reciclador')->with('reciclador',$reciclador);
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
        $reciclador = new reciclador;
        $reciclador->nombre = $request->nombre;
        $reciclador->diasrecoleccion = $request->diasrecoleccion;
        $reciclador->save();
        return redirect('/reciclador');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reciclador = Reciclador::find($id);
        return view('detalleReciclador')->with($reciclador);
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
}
