@extends('layout')

@section('content')
    <h1>Agregar nuevo usuario</h1>

    <form method="POST" action="{{ route('users.store') }}">
        {{ csrf_field() }}

        <label for="name">
            Name:
            <input class="form-control" type="text" name="name">
        </label><br>

        <label for="email">
            Email:
            <input class="form-control" type="email" name="email">
        </label><br>

        <label for="role">
            Role:
            <input class="form-control" type="text" name="role">
        </label><br><br>

        <input class="btn btn-primary" type="submit" value="Crear">
    </form>


    <br><br>

    <a class="btn btn-info btn-sm" href="{{ route('users.index') }}">Regresar</a>
@stop