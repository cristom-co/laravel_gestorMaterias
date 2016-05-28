<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    protected $table = "materias";
    protected $fillable = ['nombre','descripcion','cupos','jornada'];
    
    public function profesor() {
        return $this->belongsTo('App\profesor');
    }
    
    public function carrera() {
        return $this->belongsTo('App\carrera');
    }
}
