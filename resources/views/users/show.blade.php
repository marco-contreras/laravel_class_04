@extends('layout')

@section('content')

    <h1>Usuario</h1>

    <p><b>Id: </b>{{ $user->id }}</p>
    <p><b>Nombre: </b>{{ $user->name }}</p>
    <p><b>Correo: </b>{{ $user->email }}</p>
    <p><b>Rol: </b>{{ $user->role->nickname }}</p>
    <p><b>Creacion: </b>{{ $user->created_at }}</p>


    <br><br>

    <a class="btn btn-info btn-sm" href="{{ route('users.index') }}">Regresar</a>

@stop
