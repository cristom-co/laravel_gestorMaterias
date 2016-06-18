@extends('home')
@section('contentheader_title','Asignar una nueva materia')
@section('forms')
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
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
                        {!! Form::open(array('route' => 'estudiante.materias_estudiante.store', 'method' => 'POST')); !!}
                            {{ Form::hidden('materia_id', $materia->id) }}
                            {!! Form::submit('+',['class' => 'btn btn-primary']); !!} 
                        {!! Form::close(); !!}

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $materias->render() !!}
    </div>
@endsection