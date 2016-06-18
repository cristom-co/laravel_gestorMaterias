@extends('home')
@section('contentheader_title', 'Programacion de materias')
@section('forms')
    
    <a href="{{route('estudiante.materias_estudiante.create')}}" class="btn btn-success" style='margin:10px;'>Registrar una nueva materia</a>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Materia</th>
                <th>Descripcion</th>
                <th>Cupos</th>
                <th>Jornada</th>
                <th>Profesor</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($materias as $materia)
                    <tr>
                        <td>{{ $materia->id }}</td>
                        <td>{{ $materia->nombre }}</td>
                        <td>{{ $materia->descripcion }}</td>
                        <td>{{ $materia->cupos }}</td>
                        <td>{{ $materia->jornada }}</td>
                        <td>{{ $materia->profesor_id }}</td>
                        <td>{{ $materia->carrera_id }}</td>
                        <td class='text-right'>
                            <a href="{{ route('estudiante.materias_estudiante.destroy', $materia->id)}}" onclick="return confirm('Por favor confirma la accion de eliminar')" class="btn btn-danger"><span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection