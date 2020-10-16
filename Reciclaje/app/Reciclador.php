<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lugar;
use App\Relacion;
use Illuminate\Support\Facades\DB;

class Reciclador extends Model
{
    protected $table="reciclador";
    protected $fillable=['nombre','dias-recoleccion'];

    public function getLugar(){

        $lugar = DB::select('SELECT lugar.nombre FROM lugar INNER JOIN ')
        //return $lugar = Lugar::where('id', $this->id)->get();
    }

}