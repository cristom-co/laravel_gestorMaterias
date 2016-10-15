<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\estudiante;
use App\materia;
use DB;
use Laracasts\Flash\Flash;



class materias_estudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = \Auth::user();
        $estudiante = $user->estudiante;
        // dd($estudiante->id);
        
            $materias =
            DB::table('estudiante_materia as em')
                ->join('materias as m','m.id','=','materia_id')
                ->join('estudiantes as e','e.id','=','estudiante_id')
                ->join('profesores as p','p.id','=','m.profesor_id')
                ->join('carreras as c','c.id','=','e.carrera_id')
                ->where('e.id','=',$estudiante->id )
                ->select('m.nombre as nombre_materia','m.cupos as cupo_materia',
                    'm.jornada as jornada_materia','m.semestre as semestre_materia',
                    'p.nombres as nombres_profesor','p.apellidos as apellidos_profesor',
                    'c.nombre as nombre_carrera', 'm.id')
                ->get();
        

        return view('estudiante.materias_estudiante.index')
            ->with('materias', $materias);
            // ->with('estudiante',$estudiante);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \Auth::user();
        $estudiante = $user->estudiante;
        // listar las materias que no se han asignado al estudiante
        $materias = materia::orderBy('id','ASC')->where('carrera_id',$estudiante->carrera_id)->paginate(10);
        return view('estudiante.materias_estudiante.create')->with('materias',$materias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \Auth::user();
        $estudiante = $user->estudiante;
        $materia = materia::find($request->materia_id);

        if (!$materia){
            return Flash::warning("Error al encontrar el material enviado!");
        }

        $estudiante_materia = DB::table('estudiante_materia')
            ->where('estudiante_id','=',$estudiante->id)
            ->where('materia_id','=',$request->materia_id)
            ->get();

        
        if ($estudiante_materia){
            Flash::warning("Error el estudiante ya tiene asignada la materia");
        }else {
            
            DB::beginTransaction();
            if (!$estudiante->materias()->save($materia)){
                DB::rollBack();
                Flash::warning("Error al registrar la materia");
            }else {
              Flash::success("Registro almacenado correctamente!");
              DB::commit();
            }    
        }
        
        
        
        return redirect()->route('estudiante.materias_estudiante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \Auth::user();
        $estudiante = $user->estudiante;
        $registro = DB::delete('delete from estudiante_materia
        where estudiante_id = "'.$estudiante->id.'" and materia_id = "'.$id.'"');

        if ($registro){
          Flash::success("Elimino la materia correctamente!");
        }else {
          Flash::warning("Error al eliminar la materia");
        }
        return redirect()->route('estudiante.materias_estudiante.index');

    }
}
