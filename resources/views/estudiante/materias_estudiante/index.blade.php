@extends('home')
@section('contentheader_title', 'Programacion de materias')
@section('forms')
    
    <a href="{{route('estudiante.materias_estudiante.create')}}" class="btn btn-success" style='margin:10px;'>Asignar una nueva materia</a>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th>Materia</th>
                <th>Cupos</th>
                <th>Jornada</th>
                <th>Semestre</th>
                <th>Profesor</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($materias as $materia)
                <tr>
                    <td>{{ $materia->nombre_materia }}</td>
                    <td>{{ $materia->cupo_materia }}</td>
                    <td>{{ $materia->jornada_materia }}</td>
                    <td>{{ $materia->semestre_materia }}</td>
                    <td>{{ $materia->nombres_profesor . " " . $materia->apellidos_profesor}}</td>
                    <td>{{ $materia->nombre_carrera }}</td>
                    <td class='text-right'>
                        <a href="{{ route('estudiante.materias_estudiante.destroy', $materia->id)}}" onclick="return confirm('Por favor confirma la accion de eliminar')" class="btn btn-danger"><span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></a>
                    </td>                
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection