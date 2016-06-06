@extends('admin.panel-admin')
@section('contentheader_title', 'Editar usuario')
@section('forms')
    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(array('route' => ['admin.users.update',$user], 'method' => 'PUT')); !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombres'); !!}
            {!! Form::text('name',$user->name,['class' => 'form-control', 'placeholder' => 'nombres']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico'); !!}
            {!! Form::email('email',$user->email,['class' => 'form-control', 'placeholder' => 'example@mail.com']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('type','Tipo de usuario') !!}
            {!! Form::select('type', [''=> 'seleccione un tipo de usuario','estudiante' => 'estudiante', 'admin' => 'administrador'],NULL,['class'=>'form-control']) !!}
        </div>
        <div>
            {!! Form::submit('Editar Usuario',['class' => 'btn btn-primary']); !!}
        </div>    
        {!! Form::close(); !!}
    </div>
@endsection