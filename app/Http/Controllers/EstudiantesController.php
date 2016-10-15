<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\estudiante;
use App\User;
use App\carrera;
use Laracasts\Flash\Flash;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $estudiantes =  estudiante::orderBy('id','ASC')->paginate(5);
        $estudiantes = \App\estudiante::with(['user','carrera'])->first()->paginate(10);
        return view('admin.estudiantes.index')->with('estudiantes', $estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('name','ASC')->lists('name','id');
        $carreras = carrera::orderBy('nombre','ASC')->lists('nombre','id');
        return view('admin.estudiantes.create')
        ->with('users',$users)
        ->with('carreras',$carreras);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $estudiante = new estudiante($request->all());
        $estudiante->user()->associate($request->user_id);
        $estudiante->carrera()->associate($request->carrera_id);
        // dd($estudiante);
        $estudiante->save();
        Flash::info("Se ha registrado al estudiante '". $estudiante->nombres . "' correctamente!");
        return redirect()->route('admin.estudiantes.index');
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
        $estudiante = estudiante::find($id);
        $carreras = carrera::orderBy('nombre','ASC')->lists('nombre','id');
        // dd($estudiante);
        return view('admin.estudiantes.edit')
        ->with('estudiante',$estudiante)
        ->with('carreras', $carreras);
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
        $estudiante = estudiante::find($id);
        $estudiante->carrera()->associate($request->carrera_id);
        $estudiante->fill($request->all())->save();
        Flash::warning("El estudiante se edito correctamente!");
        return redirect()->route('admin.estudiantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = estudiante::find($id);
        $estudiante->delete();
        Flash::warning("Se ha eliminado a '". $estudiante->nombres ."' correctamente!");
        return redirect()->route('admin.estudiantes.index');
    }
}
