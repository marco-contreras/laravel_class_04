@extends('layout')

@section('content')
    <h1>Editar contacto</h1>

    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="name">
            Name:
            <input class="form-control" type="text" name="name" value="{{ $contact->name }}">
        </label><br>

        <label for="lastName">
            Last Name:
            <input class="form-control" type="text" name="last_name" value="{{ $contact->last_name }}">
        </label><br>

        <label for="nickname">
            Nickname:
            <input class="form-control" type="text" name="nickname" value="{{ $contact->nickname }}">
        </label><br>

        <label for="ralationship">
            Relationship:
            <input class="form-control" type="text" name="relationship" value="{{ $contact->relationship }}">
        </label><br>

        <label for="cellphone">
            Cellphone:
            <input class="form-control" type="number" name="cellphone" value="{{ $contact->cellphone }}">
        </label><br>

        <label for="email">
            Email:
            <input class="form-control" type="email" name="email" value="{{ $contact->email }}">
        </label><br><br>

        <input class="btn btn-primary" type="submit" value="Actualizar">
    </form>

    <br><br>

    <a class="btn btn-info btn-sm" href="{{ route('contacts.index') }}">Regresar</a>
@stop