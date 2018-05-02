@extends('layout')


@section('content')
    <br>
    <div class="offset-md-4 col-md-4">
        <h1>Iniciar Sesion</h1><br>
        <form method="POST" action="/login">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                       placeholder="Enter email">
            </div>
            <div cl ass="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Iniciar</button>
        </form>
    </div>
@stop