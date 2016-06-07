<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\estudiante;
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
        $estudiantes =  estudiante::orderBy('id','ASC')->paginate(5);
        return view('admin.estudiantes.index')->with('estudiantes', $estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante($request->all());
        $estudiante->save();
        Flash::info("Se ha registrado a '". $estudiante->nombres . "' correctamente!");
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
        return view('admin.estudiantes.edit')->with('estudiante',$estudiante);
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
