<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
    <link rel="stylesheet" href="/css/app.css">
    @yield('css')
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Agenda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @if(auth()->check())
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Contactos</a>
                    </li>

                    @if(auth()->user()->hasRoles(['admin', 'moderator']))
                        <li class="nav-item">
                            <a class="nav-link" href="/users">Usuarios</a>
                        </li>
                    @endif
                @endif
            </ul>

            <ul class="navbar-nav">
                @if(auth()->guest())
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/login">Ingresar</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/logout">Salir</a>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    @yield('content')
</div>

<script src="/js/app.js"></script>
@yield('scripts')
</body>
</html>