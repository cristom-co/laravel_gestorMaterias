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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function () {
    
    Route::get('index',[
        'uses'  =>  'HomeController@index',
        'as'    =>  'admin.index']
    );
    
    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy',[
        'uses'  =>  'UsersController@destroy',
        'as'    =>  'admin.users.destroy']
    );
    
    Route::resource('estudiantes','EstudiantesController');
    Route::get('estudiantes/{id}/destroy',[
        'uses'  =>  'EstudiantesController@destroy',
        'as'    =>  'admin.estudiantes.destroy']
    );
    
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
    Route::get('materias/{id}/destroy',[
        'uses'  =>  'MateriasController@destroy',
        'as'    =>  'admin.materias.destroy']
    );
});

Route::group(['prefix' => 'estudiante', 'middleware' => 'auth'], function () {
    
    Route::resource('materias_estudiante','materias_estudianteController');
    Route::get('materias_estudiante/{id}/destroy',[
        'uses'  =>  'materias_estudianteController@destroy',
        'as'    =>  'estudiante.materias_estudiante.destroy']
    );
});
