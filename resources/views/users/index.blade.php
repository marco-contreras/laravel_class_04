@extends('layout')

@section('content')
    <h1>Usuarios</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Role</th>
            <th>Creacion</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name  }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->nickname }}</td>
                <td>{{ $user->created_at }}</td>

                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('users.show', $user->id) }}">Ver</a>
                    <a class="btn btn-success btn-sm" href="{{ route('users.edit', $user->id) }}">Editar</a>
                    <form style="display: inline" method="POST" action="{{ route('users.destroy', $user->id) }}">
                        {!! method_field('DELETE') !!}
                        {!! csrf_field() !!}
                        <button class="btn btn-danger btn-sm" type="submit">Remover</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <br><br>

    <a class="btn btn-info btn-sm" href="{{ route('users.create') }}">Añadir nuevo contacto</a>
@stop