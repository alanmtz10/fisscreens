<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bsjq/css/bootstrap.min.css') }}">
    <title>
        @yield('titulo')
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('inicioPage') }}">PractiEvent</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="{{ route('inicioPage') }}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registro') }}">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Informacion</a>
                </li>
                <li class="nav-item mr-sm-2">
                <a class="nav-link" href="{{ route('login') }}">Iniciar sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="{{ asset('bsjq/js/bootstrap.min.js') }}"></script>

    @yield('contenido')

</body>

</html>
