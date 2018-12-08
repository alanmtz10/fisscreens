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
    <style>
        nav{
            background: #f8f8f8;
            border-color: #e7e7e7;
            border-bottom: 1px;
            
        }
        nav *{color: #5e5e5e;}

        #navbarNav{
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-default">
        <a class="navbar-brand" href="{{ route('inicioPage') }}">Practi Event</a>
    <h1 class="text-hide" style="background-image: url('{{ asset('img/logo45.png') }}'); width: 45px; height: 45px;">PractiEvent</h1>
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
                <li class="nav-item mr-sm-2">
                <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="{{ asset('bsjq/js/bootstrap.min.js') }}"></script>

    @yield('contenido')

</body>

</html>
