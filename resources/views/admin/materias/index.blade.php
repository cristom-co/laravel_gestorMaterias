@extends('admin.panel-admin')

@section('forms')
    
    <a href="{{route('admin.profesores.create')}}" class="btn btn-success" style='margin:10px;'>Registrar un nuevo profesor</a>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Identificacion</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Profesion</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($profesores as $profesor)
                    <tr>
                        <td>{{ $profesor->id }}</td>
                        <td>{{ $profesor->nombres }}</td>
                        <td>{{ $profesor->apellidos }}</td>
                        <td>{{ $profesor->identificacion }}</td>
                        <td>{{ $profesor->direccion }}</td>
                        <td>{{ $profesor->telefono }}</td>
                        <td>{{ $profesor->correo }}</td>
                        <td>{{ $profesor->profesion }}</td>
                        <td><a href="" class="btn btn-success"></a><a href="" class="btn btn-warning"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $profesores->render() !!}
    </div>


@endsection