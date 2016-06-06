@extends('admin.panel-admin')
@section('contentheader_title','Registrar profesores')
@section('forms')
    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(array('route' => 'admin.profesores.store', 'method' => 'POST')); !!}
        <div class="form-group">
            {!! Form::label('nombres', 'Nombres'); !!}
            {!! Form::text('nombres',NULL,['class' => 'form-control', 'placeholder' => 'escriba los nombre del profesor@']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos'); !!}
            {!! Form::text('apellidos',NULL,['class' => 'form-control', 'placeholder' => 'escriba los apellidos del profesor@']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('identificacion', 'Identificacion'); !!}
            {!! Form::text('identificacion',NULL,['class' => 'form-control', 'placeholder' => 'escriba la identificacion del profesor@']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('direccion', 'Direccion'); !!}
            {!! Form::text('direccion',NULL,['class' => 'form-control', 'placeholder' => 'escriba la direccion del profesor@']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefono', 'Telefono'); !!}
            {!! Form::text('telefono',NULL,['class' => 'form-control', 'placeholder' => 'escriba el telefono del profesor@']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('correo', 'Correo Electronico'); !!}
            {!! Form::email('correo',NULL,['class' => 'form-control', 'placeholder' => 'example@mail.com']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('profesion', 'Profesion'); !!}
            {!! Form::text('profesion',NULL,['class' => 'form-control', 'placeholder' => 'escriba la profesion del profesor@']); !!}
        </div>
        <div>
            {!! Form::submit('Registrar profesor',['class' => 'btn btn-primary']); !!}
        </div>    
        {!! Form::close(); !!}
    </div>
@endsection