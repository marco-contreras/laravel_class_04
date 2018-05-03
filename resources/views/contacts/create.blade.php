@extends('layout')

@section('content')
    <h1>Agregar nuevo contacto</h1>

    <form method="POST" action="{{ route('contacts.store') }}">
        {{ csrf_field() }}

        @include('contacts.form')

        <input class="btn btn-primary" type="submit" value="Crear">
    </form>


    <br><br>

    <a class="btn btn-info btn-sm" href="{{ route('contacts.index') }}">Regresar</a>
@stop