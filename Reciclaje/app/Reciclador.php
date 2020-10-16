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

        $lugar = DB::select('SELECT lugar.nombre FROM lugar 
        INNER JOIN relacion ON relacion.idLugar = lugar.id 
        INNER JOIN reciclador ON relacion.idReciclador = reciclador.id 
        WHERE reciclador.id='.$this->id);
        return $lugar;
    }

}