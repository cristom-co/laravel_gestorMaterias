@extends('home')
@section('contentheader_title','Registrar Materia')
@section('forms')
    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(array('route' => 'admin.materias.store', 'method' => 'POST')); !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre'); !!}
            {!! Form::text('nombre',NULL,['class' => 'form-control', 'placeholder' => 'escriba el nombre de la materia']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'descripcion'); !!}
            {!! Form::text('descripcion',NULL,['class' => 'form-control', 'placeholder' => 'escriba la descripcion de la materia']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('cupos', 'Numero de cupos'); !!}
            {!! Form::text('cupos',NULL,['class' => 'form-control', 'placeholder' => 'escriba el numero de cupos de la materia']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('jornada', 'Jornada'); !!}
            {!! Form::text('jornada',NULL,['class' => 'form-control', 'placeholder' => 'escriba la jornada de la materia']); !!}
        </div>
        <!-- 2 SELECT PARA PROFESOR Y CARRERA -->
        <div class="form-group">
            {!! Form::label('carrera_id','Carreras') !!}
            {!! Form::select('carrera_id',$carreras,null,['class'=>'form-control', 'placeholder' => 'Seleccione una carrera']); !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('profesor_id','Profesores') !!}
            {!! Form::select('profesor_id',$profesores,null,['class'=>'form-control', 'placeholder' => 'Seleccione un profesor']); !!}
        </div>
        
        
        <div>
            {!! Form::submit('Registrar Materia',['class' => 'btn btn-primary']); !!}
        </div>    
        {!! Form::close(); !!}
    </div>
@endsection