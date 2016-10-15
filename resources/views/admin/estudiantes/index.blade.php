@extends('home')
@section('contentheader_title', 'Estudiantes del sistema')
@section('forms')
    
    <a href="{{route('admin.estudiantes.create')}}" class="btn btn-success" style='margin:10px;'>Registrar un nuevo estudiante</a>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Identificacion</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>usuario</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->id }}</td>
                        <td>{{ $estudiante->nombres }}</td>
                        <td>{{ $estudiante->apellidos }}</td>
                        <td>{{ $estudiante->identificacion }}</td>
                        <td>{{ $estudiante->direccion }}</td>
                        <td>{{ $estudiante->telefono }}</td>
                        <td>{{ $estudiante->user->name }}</td>
                        <td>{{ $estudiante->carrera->nombre }}</td>
                        <td class='text-right'>
                            <a href="{{ route('admin.estudiantes.edit', $estudiante->id)}}" class="btn btn-info"><span class='glyphicon glyphicon-wrench' aria-hidden='true'></span></a>
                            <a href="{{ route('admin.estudiantes.destroy',$estudiante->id)}}" onclick="return confirm('Por favor confirma la accion de eliminar')" class="btn btn-danger"><span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $estudiantes->render() !!}
    </div>


@endsection