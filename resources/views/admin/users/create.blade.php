@extends('home')
@section('contentheader_title', 'Crear usuarios')
@section('forms')
    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(array('route' => 'admin.users.store', 'method' => 'POST')); !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombres'); !!}
            {!! Form::text('name',NULL,['class' => 'form-control', 'placeholder' => 'nombres']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico'); !!}
            {!! Form::email('email',NULL,['class' => 'form-control', 'placeholder' => 'example@mail.com']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contraseña'); !!}
            {!! Form::password('password',['class' => 'form-control', 'placeholder' => '*********']); !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('type','Tipo de usuario') !!}
            {!! Form::select('type', [''=> 'seleccione un tipo de usuario','estudiante' => 'estudiante', 'admin' => 'administrador'],NULL,['class'=>'form-control']) !!}
        </div>
        <div>
            {!! Form::submit('Registrar Usuario',['class' => 'btn btn-primary']); !!}
        </div>    
        {!! Form::close(); !!}
    </div>
@endsection