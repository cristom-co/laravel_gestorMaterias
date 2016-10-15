@extends('home')
@section('contentheader_title','Profesores del sistema')
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
                        <td>
                            <a href="{{ route('admin.profesores.edit',$profesor->id) }}" class="btn btn-info"><span class='glyphicon glyphicon-wrench' aria-hidden='true'></span></a>
                            <a href="{{ route('admin.profesores.destroy', $profesor->id)}}" onclick="return confirm('Por favor confirma la accion de eliminar')" class="btn btn-danger"><span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $profesores->render() !!}
    </div>


@endsection