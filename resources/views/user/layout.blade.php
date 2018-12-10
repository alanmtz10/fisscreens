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
    <!-- MetisMenu CSS -->
    <link href="{{ asset("/vendor/metisMenu/metisMenu.min.css") }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href=" {{ asset("/dist/css/sb-admin-2.css") }}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{ asset("/vendor/morrisjs/morris.css") }}" rel="stylesheet">
    <!-- Custom Fonts -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link href="{{ asset("/vendor/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ asset("/vendor/datatables-plugins/dataTables.bootstrap.css") }}" rel="stylesheet">
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
        .scroll {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
    @yield('estilos')
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

                <li class="nav-item mr-sm-2">
                    <a class="nav-link" href="{{ route('login') }}">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav>



    @yield('contenido')


    <script src="{{ asset('bsjq/js/bootstrap.min.js') }}"></script>
    <script src="{{asset("/vendor/jquery/jquery.min.js")}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=" {{ asset("/vendor/bootstrap/js/bootstrap.min.js") }}"></script>


    <!-- Metis Menu Plugin JavaScript -->
    <script src=" {{ asset("/vendor/metisMenu/metisMenu.min.js") }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset("/dist/js/sb-admin-2.js") }}"></script>
</body>

</html>
