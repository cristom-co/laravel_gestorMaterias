@extends('admin.panel-admin')
@section('contentheader_title','Editar profesor')
@section('forms')
    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(array('route' => ['admin.profesores.update',$profesor], 'method' => 'PUT')); !!}
        <div class="form-group">
            {!! Form::label('nombres', 'Nombres'); !!}
            {!! Form::text('nombres',$profesor->nombres,['class' => 'form-control', 'placeholder' => 'escriba los nombre del profesor@']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos'); !!}
            {!! Form::text('apellidos',$profesor->apellidos,['class' => 'form-control', 'placeholder' => 'escriba los apellidos del profesor@']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('identificacion', 'Identificacion'); !!}
            {!! Form::text('identificacion',$profesor->identificacion,['class' => 'form-control', 'placeholder' => 'escriba la identificacion del profesor@']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('direccion', 'Direccion'); !!}
            {!! Form::text('direccion',$profesor->direccion,['class' => 'form-control', 'placeholder' => 'escriba la direccion del profesor@']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefono', 'Telefono'); !!}
            {!! Form::text('telefono',$profesor->telefono,['class' => 'form-control', 'placeholder' => 'escriba el telefono del profesor@']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('correo', 'Correo Electronico'); !!}
            {!! Form::email('correo',$profesor->correo,['class' => 'form-control', 'placeholder' => 'example@mail.com']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('profesion', 'Profesion'); !!}
            {!! Form::text('profesion',$profesor->profesion,['class' => 'form-control', 'placeholder' => 'escriba la profesion del profesor@']); !!}
        </div>
        <div>
            {!! Form::submit('Editar profesor',['class' => 'btn btn-primary']); !!}
        </div>    
        {!! Form::close(); !!}
    </div>
@endsection