<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\profesor;
use Laracasts\Flash\Flash;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = profesor::orderBy('id','ASC')->paginate(5);
        return view('admin.profesores.index')->with('profesores',$profesores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profesor = new Profesor($request->all());
        $profesor->save();
        Flash::info("Se ha registrado a '". $profesor->nombres . "' correctamente!");
        return redirect()->route('admin.profesores.index');
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
        $profesor = profesor::find($id);
        return view('admin.profesores.edit')->with('profesor',$profesor);
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
        $profesor = profesor::find($id);
        $profesor->fill($request->all())->save();
        Flash::warning("El profesor se edito correctamente!");
        return redirect()->route('admin.profesores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor = profesor::find($id);
        $profesor->delete();
        Flash::warning("Se ha eliminado a '". $profesor->nombres ."' correctamente!");
        return redirect()->route('admin.profesores.index');
    }
}
