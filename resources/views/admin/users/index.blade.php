@extends('admin.panel-admin')
@section('contentheader_title', 'Usuarios del sistema')
@section('forms')
    
    <a href="{{route('admin.users.create')}}" class="btn btn-success" style='margin:10px;'>Registrar un nuevo usuario</a>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->type == "admin")
                                <span class="label label-danger">Administrador</span>
                            @else
                                <span class="label label-info">{{$user->type}}</span>
                            @endif
                        </td>
                        <td class='text-right'>
                            <a href="{{ route('admin.users.edit', $user->id)}}" class="btn btn-info"><span class='glyphicon glyphicon-wrench' aria-hidden='true'></span></a>
                            <a href="{{ route('admin.users.destroy', $user->id)}}" onclick="return confirm('Por favor confirma la accion de eliminar')" class="btn btn-danger"><span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $users->render() !!}
    </div>


@endsection