@extends('layout')

@section('content')
    <h1>Agregar nuevo contacto</h1>

    <form method="POST" action="{{ route('contacts.store') }}">
        {{ csrf_field() }}

        <label for="name">
            Name:
            <input class="form-control" type="text" name="name">
        </label><br>

        <label for="lastName">
            Last Name:
            <input class="form-control" type="text" name="last_name">
        </label><br>

        <label for="nickname">
            Nickname:
            <input class="form-control" type="text" name="nickname">
        </label><br>

        <label for="ralationship">
            Relationship:
            <input class="form-control" type="text" name="relationship">
        </label><br>

        <label for="cellphone">
            Cellphone:
            <input class="form-control" type="number" name="cellphone">
        </label><br>

        <label for="email">
            Email:
            <input class="form-control" type="email" name="email">
        </label><br><br>

        <input class="btn btn-primary" type="submit" value="Crear">
    </form>


    <br><br>

    <a class="btn btn-info btn-sm" href="{{ route('contacts.index') }}">Regresar</a>
@stop