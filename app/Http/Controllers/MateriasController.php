<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\materia;
use App\carrera;
use App\profesor;
use Laracasts\Flash\Flash;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = materia::orderBy('id','ASC')->paginate(10);
        return view('admin.materias.index')->with('materias',$materias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carreras = carrera::orderBy('nombre','ASC')->lists('nombre','id');
        $profesores = profesor::orderBy('nombres', 'ASC')->lists('nombres','id');
        return view('admin.materias.create')
            ->with('carreras',$carreras)
            ->with('profesores',$profesores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia =  new materia($request->all());
        $materia->carrera()->associate($request->carrera_id);
        $materia->profesor()->associate($request->profesor_id);
        $materia->save();
        
        Flash::info("Se ha registrado la materia '". $materia->nombre . "' correctamente!");
        return redirect()->route('admin.materias.index');
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
        $materia = materia::find($id);
        $carreras = carrera::orderBy('nombre','ASC')->lists('nombre','id');
        $profesores = profesor::orderBy('nombres','ASC')->lists('nombres','id');
        return view('admin.materias.edit')
        ->with('materia',$materia)
        ->with('carreras',$carreras)
        ->with('profesores',$profesores);
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
        $materia = materia::find($id);
        $materia->carrera()->associate($request->carrera_id);
        $materia->profesor()->associate($request->profesor_id);
        $materia->fill($request->all())->save();
        Flash::warning("La materia se edito correctamente!");
        return redirect()->route('admin.materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materia = materia::find($id);
        $materia->delete();
        Flash::warning("Se ha eliminado la materia '". $materia->nombre . "' correctamente!");
        return redirect()->route('admin.materias.index');
    }
}
