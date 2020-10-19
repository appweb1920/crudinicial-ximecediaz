<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
    protected $table="relacion";
    protected $fillable = ['idReciclador','idLugar'];
}