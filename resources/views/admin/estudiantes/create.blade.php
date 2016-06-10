@extends('home')
@section('contentheader_title','Registrar estudiantes')
@section('forms')
    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(array('route' => 'admin.estudiantes.store', 'method' => 'POST')); !!}
        <div class="form-group">
            {!! Form::label('nombres', 'Nombres'); !!}
            {!! Form::text('nombres',NULL,['class' => 'form-control', 'placeholder' => 'escriba los nombre del estudiante']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos'); !!}
            {!! Form::text('apellidos',NULL,['class' => 'form-control', 'placeholder' => 'escriba los apellidos del estudiante']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('identificacion', 'Identificacion'); !!}
            {!! Form::text('identificacion',NULL,['class' => 'form-control', 'placeholder' => 'escriba la identificacion del estudiante']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('direccion', 'Direccion'); !!}
            {!! Form::text('direccion',NULL,['class' => 'form-control', 'placeholder' => 'escriba la direccion del estudiante']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefono', 'Telefono'); !!}
            {!! Form::text('telefono',NULL,['class' => 'form-control', 'placeholder' => 'escriba el telefono del estudiante']); !!}
        </div>
        
        <!-- SELECT USER Y CARRERA -->
        <div class="form-group">
            {!! Form::label('user_id','Usuarios') !!}
            {!! Form::select('user_id',$users,null,['class' => 'form-control', 'placeholder' => 'Seleccione un usuario']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('carrera_id','Carreras') !!}
            {!! Form::select('carrera_id',$carreras,null,['class'=>'form-control', 'placeholder' => 'Seleccione una carrera']); !!}
        </div>
        
        <div>
            {!! Form::submit('Registrar estudiante',['class' => 'btn btn-primary']); !!}
        </div>    
        {!! Form::close(); !!}
    </div>
@endsection