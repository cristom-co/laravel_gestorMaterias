<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    protected $table = "profesores";
    protected $fillable = ['nombres','apellidos','identificacion','direccion','telefono','correo','profesion'];
    
    public function materias() {
        return $this-hasMany('App\materia','profesor_id','id');
    }
}
