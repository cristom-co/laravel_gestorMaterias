<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $table = "estudiantes";
    protected $fillable = ['nombres','apellidos','identificacion','direccion','telefono'];
    
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function carrera() {
        return $this->belongsTo('App\carrera');
    }
}
