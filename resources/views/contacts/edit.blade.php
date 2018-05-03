@extends('layout')

@section('content')
    <h1>Editar contacto</h1>

    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        @include('contacts.form', compact($contact))

        <input class="btn btn-primary" type="submit" value="Actualizar">
    </form>

    <br><br>

    <a class="btn btn-info btn-sm" href="{{ route('contacts.index') }}">Regresar</a>
@stop