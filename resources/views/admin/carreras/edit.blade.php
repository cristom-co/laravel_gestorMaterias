@extends('admin.panel-admin')
@section('contentheader_title', 'Editar Carrera')
@section('forms')
    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(array('route' => ['admin.carreras.update',$carrera], 'method' => 'PUT')); !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre'); !!}
            {!! Form::text('nombre',$carrera->nombre,['class' => 'form-control', 'placeholder' => 'escriba el nombre de la carrera']); !!}
        </div>
         <div class="form-group">
            {!! Form::label('descripcion', 'Descripcion'); !!}
            {!! Form::text('descripcion',$carrera->descripcion,['class' => 'form-control', 'placeholder' => 'escriba la descripcion de la carrera']); !!}
        </div>
         <div class="form-group">
            {!! Form::label('numero_creditos', 'Numero de creditos'); !!}
            {!! Form::text('numero_creditos',$carrera->numero_creditos,['class' => 'form-control', 'placeholder' => 'escriba el numero de creditos de la carrera']); !!}
        </div>
        <div>
            {!! Form::submit('Editar Carrera',['class' => 'btn btn-primary']); !!}
        </div>    
        {!! Form::close(); !!}
    </div>
@endsection