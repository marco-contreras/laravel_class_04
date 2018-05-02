@extends('layout')

@section('content')

    <h1>Usuario</h1>

    <p><b>Id: </b>{{ $user->id }}</p>
    <p><b>Nombre: </b>{{ $user->name }}</p>
    <p><b>Correo: </b>{{ $user->email }}</p>
    <p><b>Creacion: </b>{{ $user->created_at }}</p>

    @can('edit', $user)
        <a class="btn btn-success" href="{{ route('users.edit', $user->id) }}">Editar</a>
    @endcan

    @can('destroy', $user)
        <form style="display: inline" method="POST" action="{{ route('users.destroy', $user->id) }}">
            {!! method_field('DELETE') !!}
            {!! csrf_field() !!}
            <button class="btn btn-danger" type="submit">Remover</button>
        </form>
    @endcan

    @if(auth()->check())
        <br><br><br>
        <a class="btn btn-info btn-sm" href="{{ route('users.index') }}">Regresar</a>
    @endif
@stop
