<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;

use App\carrera;
use App\profesor;
use App\materia;
use App\User;
use App\estudiante;

use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        //Redireccionar segun rol del usuario
        $user =  \Auth::user();
        
        if($user->type == "estudiante"){
            return redirect()->route('estudiante.materias_estudiante.index');

        }
        else if ($user->type == "admin"){
            
            $registros = $this->listarContadorRegistros();
            return view('admin/panel-admin')->with('registros',$registros);
        }
        
    }
    
    
    private function listarContadorRegistros() 
    {
        $data['usuarios'] = User::count();
        $data['profesores'] =   profesor::count();
        $data['carreras'] = carrera::count();
        $data['materias'] = materia::count();
        $data['estudiantes'] = estudiante::count();
        
        return $data;
    }
}