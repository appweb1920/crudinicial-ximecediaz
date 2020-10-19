<?php

namespace App\Http\Controllers;

use App\Lugar;
use App\Relacion;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugares = Lugar::all();
        return view('lugares')->with('lugar',$lugares);
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
        $lugar = new lugar;
        $lugar->direccion = $request->direccion;
        $lugar->tipoB = $request->tipoB;
        $lugar->horarioA = $request->horarioA;
        $lugar->horarioC = $request->horarioC;
        $lugar->save();
        return redirect('/lugares');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function show(Lugar $lugar)
    {
        //
    }

    public function MuestraEdicion($id)
    {
        // buscar dato
        $lugar = Lugar::find($id);
        // pasar el dato a la vista
        return view('editaLugar')->with('lugar',$lugar);
    }

    public function guardaEdicion(Request $request)
    {
        $lugar = lugar::find($request->id);
        if(!is_null($lugar))
        {
            $lugar->direccion = $request->direccion;
            $lugar->tipoB = $request->tipoB;
            $lugar->horarioA = $request->horarioA;
            $lugar->horarioC = $request->horarioC;
            $lugar->save();
        }
        return redirect('/lugares');
    }

    public function agrega(Request $request){
        return view('agregaLugar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function edit(Lugar $lugar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lugar $lugar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lugar = Lugar::find($id);
        $lugar->delete();
        return redirect('/lugares');
    }
}