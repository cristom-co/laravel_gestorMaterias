@extends('home')
@section('contentheader_title', 'Registrar Carreras')
@section('forms')
    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(array('route' => 'admin.carreras.store', 'method' => 'POST')); !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre'); !!}
            {!! Form::text('nombre',NULL,['class' => 'form-control', 'placeholder' => 'escriba el nombre de la carrera']); !!}
        </div>
         <div class="form-group">
            {!! Form::label('descripcion', 'Descripcion'); !!}
            {!! Form::text('descripcion',NULL,['class' => 'form-control', 'placeholder' => 'escriba la descripcion de la carrera']); !!}
        </div>
         <div class="form-group">
            {!! Form::label('numero_creditos', 'Numero de creditos'); !!}
            {!! Form::text('numero_creditos',NULL,['class' => 'form-control', 'placeholder' => 'escriba el numero de creditos de la carrera']); !!}
        </div>
        <div>
            {!! Form::submit('Registrar Carrera',['class' => 'btn btn-primary']); !!}
        </div>    
        {!! Form::close(); !!}
    </div>
@endsection