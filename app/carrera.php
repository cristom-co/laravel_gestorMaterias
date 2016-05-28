<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrera extends Model
{
    protected $table = "carreras";
    protected $fillable = ['nombre','descripcion','numero_creditos'];
    
    public function estudiantes() {
        return $this->hasMany('App\estudiante', 'carrera_id','id');
    }
    
    public function materias() {
        return $this->hasMany('App\materia','carrera_id','id');
    }
}
