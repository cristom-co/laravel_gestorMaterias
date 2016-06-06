<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function () {
    
    Route::get('/',function () {
        return view('admin/panel-admin');
    });
    
    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy',[
        'uses'  =>  'UsersController@destroy',
        'as'    =>  'admin.users.destroy']
    );
    
    Route::resource('estudiantes','EstudiantesController');

    Route::resource('profesores','ProfesoresController');
    Route::get('profesores/{id}/destroy',[
        'uses'  =>  'ProfesoresController@destroy',
        'as'    =>  'admin.profesores.destroy']
    );

    Route::resource('carreras','CarrerasController');
    Route::get('carreras/{id}/destroy',[
        'uses'  =>  'CarrerasController@destroy',
        'as'    =>  'admin.carreras.destroy']
    );

    Route::resource('materias','MateriasController');
    
});

Route::group(['prefix' => 'estudiante'], function () {
    
    Route::get('/', function () {
        echo 'Panel del estudiante';
    });
    
    // Reoute::resource('materias_estudiante','materias_estudianteController');
});