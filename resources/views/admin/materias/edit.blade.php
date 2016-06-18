@extends('home')
@section('contentheader_title','Editar Materia')
@section('forms')
    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(array('route' => ['admin.materias.update',$materia], 'method' => 'PUT')); !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre'); !!}
            {!! Form::text('nombre',$materia->nombre,['class' => 'form-control', 'placeholder' => 'escriba el nombre de la materia']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'descripcion'); !!}
            {!! Form::text('descripcion',$materia->descripcion,['class' => 'form-control', 'placeholder' => 'escriba la descripcion de la materia']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('cupos', 'Numero de cupos'); !!}
            {!! Form::text('cupos',$materia->cupos,['class' => 'form-control', 'placeholder' => 'escriba el numero de cupos de la materia']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('jornada', 'Jornada'); !!}
            {!! Form::text('jornada',$materia->jornada,['class' => 'form-control', 'placeholder' => 'escriba la jornada de la materia']); !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('carrera_id','Carreras') !!}
            {!! Form::select('carrera_id',$carreras,null,['class'=>'form-control', 'placeholder' => 'Seleccione una carrera']); !!}
        </div>
        
         <div class="form-group">
            {!! Form::label('profesor_id','Profesores') !!}
            {!! Form::select('profesor_id',$profesores,null,['class'=>'form-control', 'placeholder' => 'Seleccione una profesor']); !!}
        </div>
        
        <div>
            {!! Form::submit('Editar Materia',['class' => 'btn btn-primary']); !!}
        </div>    
        {!! Form::close(); !!}
    </div>
@endsection