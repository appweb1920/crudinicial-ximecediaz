<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table="lugar";
    protected $fillable = ['tipoB','direccion','horarioA','horarioC'];
}