@extends('layout')

@section('content')
    <h1>Contactos</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apehidos</th>
            <th>Apodo</th>
            <th>Ralacion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Creacion</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name  }}</td>
                <td>{{ $contact->last_name }}</td>
                <td>{{ $contact->nickname }}</td>
                <td>{{ $contact->relationship }}</td>
                <td>{{ $contact->cellphone }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->created_at }}</td>

                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('contacts.show', $contact->id) }}">Ver</a>
                    <a class="btn btn-success btn-sm" href="{{ route('contacts.edit', $contact->id) }}">Editar</a>
                    <form style="display: inline" method="POST" action="{{ route('contacts.destroy', $contact->id) }}">
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

    <a class="btn btn-info btn-sm" href="{{ route('contacts.create') }}">Añadir nuevo contacto</a>
@stop