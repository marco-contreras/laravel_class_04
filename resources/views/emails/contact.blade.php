<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto agregado</title>
</head>
<body>
    <h1>Contacto</h1>

    <p><b>Id: </b>{{ $contact->id }}</p>
    <p><b>Nombre: </b>{{ $contact->name }}</p>
    <p><b>Apehidos: </b>{{ $contact->last_name }}</p>
    <p><b>Apodo: </b>{{ $contact->nickname }}</p>
    <p><b>Relacion: </b>{{ $contact->relationship }}</p>
    <p><b>Telefono: </b>{{ $contact->cellphone }}</p>
    <p><b>Correo: </b>{{ $contact->email }}</p>
    <p><b>Creacion: </b>{{ $contact->created_at }}</p>
</body>
</html>