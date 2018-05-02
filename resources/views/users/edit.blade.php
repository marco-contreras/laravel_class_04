@extends('layout')

@section('content')
    <h1>Editar Usuario</h1>

    <form method="POST" action="{{ route('users.update', $user->id) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="name">
            Name:
            <input class="form-control" type="text" name="name" value="{{ $user->name }}">
        </label><br>

        <label for="email">
            Email:
            <input class="form-control" type="email" name="email" value="{{ $user->email }}">
        </label><br>

        <label for="role_id">
            Role:
            <input class="form-control" type="number" name="role_id" value="{{ $user->role->id }}">
        </label><br><br>

        <input class="btn btn-primary" type="submit" value="Actualizar">
    </form>

    <br><br>

    <a class="btn btn-info btn-sm" href="{{ route('users.index') }}">Regresar</a>
@stop