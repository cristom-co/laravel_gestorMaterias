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
        echo 'Panel del administrador';
    });
    
    Route::resource('users','UsersController');
    Route::resource('estudiantes','EstudiantesController');
    Route::resource('profesores','ProfesoresController');
    Route::resource('carreras','CarrerasController');
    Route::resource('materias','MateriasController');
});

Route::group(['prefix' => 'estudiante'], function () {
    
    Route::get('/', function () {
        echo 'Panel del estudiante';
    });
    
    // Reoute::resource('materias_estudiante','materias_estudianteController');
});