@extends('home')
@section('contentheader_title', 'Editar Estudiantes')
@section('forms')
    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(array('route' => ['admin.estudiantes.update',$estudiante], 'method' => 'PUT')); !!}
        <div class="form-group">
            {!! Form::label('nombres', 'Nombres'); !!}
            {!! Form::text('nombres',$estudiante->nombres,['class' => 'form-control', 'placeholder' => 'escriba los nombre del estudiante']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos'); !!}
            {!! Form::text('apellidos',$estudiante->apellidos,['class' => 'form-control', 'placeholder' => 'escriba los apellidos del estudiante']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('identificacion', 'Identificacion'); !!}
            {!! Form::text('identificacion',$estudiante->identificacion,['class' => 'form-control', 'placeholder' => 'escriba la identificacion del estudiante']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('direccion', 'Direccion'); !!}
            {!! Form::text('direccion',$estudiante->direccion,['class' => 'form-control', 'placeholder' => 'escriba la direccion del estudiante']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefono', 'Telefono'); !!}
            {!! Form::text('telefono',$estudiante->telefono,['class' => 'form-control', 'placeholder' => 'escriba el telefono del estudiante']); !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('carrera_id','Carreras') !!}
            {!! Form::select('carrera_id',$carreras,null,['class'=>'form-control', 'placeholder' => 'Seleccione una carrera']); !!}
        </div>
        
        <div>
            {!! Form::submit('Editar Estudiante',['class' => 'btn btn-primary']); !!}
        </div>    
        {!! Form::close(); !!}
    </div>
@endsection