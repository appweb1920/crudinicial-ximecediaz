<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reciclador;
use App\Lugar;
use App\Relacion;
use Illuminate\Database\Eloquent\Relations\Relation;

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

    public function MuestraEdicion($id)
    {
        // buscar dato
        $reciclador = reciclador::find($id);
        // pasar el dato a la vista
        return view('editaDato')->with('reciclador',$reciclador);
    }

    public function guardaEdicion(Request $request)
    {
        $reciclador = reciclador::find($request->id);
        if(!is_null($reciclador))
        {
            $reciclador->nombre = $request->nombre;
            $reciclador->diasrecoleccion = $request->diasrecoleccion;
            $reciclador->save();
        }
        return redirect('/reciclador');
    }

    public function agrega(Request $request){
        $lugares = Lugar::all();
        return view('agrega')->with('lugar',$lugares);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reciclador = Reciclador::find($id);
        $relacion = Relacion::find($id);
        $relacion->delete();
        $reciclador->delete();
        return redirect('/reciclador');
    }
}
