<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\estudiante;
use App\materia;
use DB;


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
        $materias = $estudiante->materias;
        
        return view('estudiante.materias_estudiante.index')
            ->with('materias', $materias)
            ->with('estudiante',$estudiante);
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
        $estudiante->materias()->save($materia);
        return redirect()->route('estudiante.materias_estudiante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        
        //machetazo aqui :)
        DB::delete('delete from estudiante_materia 
        where estudiante_id = "'.$estudiante->id.'" and materia_id = "'.$id.'"');
        
        return redirect()->route('estudiante.materias_estudiante.index');

    }
}
