<?php

namespace Escuelas;

use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    //

    protected $table = "tallas";

    protected $fillable = ['talla'];


    public function alumnos()
    {
    	return $this->hasMany('App\Alumno');
    }


}
