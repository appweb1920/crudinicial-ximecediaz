<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table="lugar";
    protected $fillable = ['tipo-basura','direccion','horario-apertura','horario-cierre'];
}