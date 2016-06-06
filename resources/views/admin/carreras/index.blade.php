@extends('admin.panel-admin')
@section('contentheader_title', 'Carreras del sistema')
@section('forms')
    
    <a href="{{route('admin.carreras.create')}}" class="btn btn-success" style='margin:10px;'>Registrar una nueva carrera</a>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>numero de creditos</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($carreras as $carrera)
                    <tr>
                        <td>{{ $carrera->id }}</td>
                        <td>{{ $carrera->nombre }}</td>
                        <td>{{ $carrera->descripcion }}</td>
                        <td>{{ $carrera->numero_creditos }}</td>
                        <td class='text-right'>
                            <a href="{{ route('admin.carreras.edit', $carrera->id)}}" class="btn btn-info"><span class='glyphicon glyphicon-wrench' aria-hidden='true'></span></a>
                            <a href="{{ route('admin.carreras.destroy', $carrera->id)}}" class="btn btn-danger"><span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $carreras->render() !!}
    </div>


@endsection