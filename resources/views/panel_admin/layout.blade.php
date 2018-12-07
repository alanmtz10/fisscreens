<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('titulo')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="{{ asset('img/logo.png') }}" alt="" width="45px" height="45px" stye="display: inline-block; text-align:center">
                <a class="navbar-brand" href="{{ route('inicio') }}">

                    Practi Event
                </a>

            </div>

            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Nuevo mensaje
                                    <span class="pull-right text-muted small">Hace 4 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 Nuevos seguidores
                                    <span class="pull-right text-muted small">Hace 12 minutos</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de usuario</a>
                        </li>
                    <li><a href="{{ route('configuraciones') }}"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="{{ route('inicio') }}"><i class="fas fa-home"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-users"></i> Participantes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('participantes') }}">Inscritos</a>
                                </li>
                                <li>
                                    <a href="{{ route('solicitudes') }}">Solicitudes</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                                <a href="#"><i class="fas fa-chalkboard-teacher"></i> Eventos<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                    <a href="{{ route('creare') }}">Crear evento</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('proxevents') }}">Próximos eventos</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        <li>
                            <a href="{{ route('formularios') }}"><i class="fa fa-edit fa-fw"></i> Formularios</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Estadísticas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('grafLin') }}">Graficos de lineas</a>
                                </li>
                                <li>
                                    <a href="{{ route('grafOtr') }}">Otros graficos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('configuraciones') }}"><i class="fas fa-wrench"></i> Configuraciones</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        @yield('contenido')

        <script src="{{asset("/vendor/jquery/jquery.min.js")}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=" {{ asset("/vendor/bootstrap/js/bootstrap.min.js") }}"></script>


        <!-- Metis Menu Plugin JavaScript -->
        <script src=" {{ asset("/vendor/metisMenu/metisMenu.min.js") }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src=" {{ asset("/vendor/raphael/raphael.min.js") }}"></script>
        <script src="{{ asset("/vendor/morrisjs/morris.min.js") }}"></script>
        <script src=" {{ asset("/data/morris-data.js") }} "></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('/vendor/flot/excanvas.min.js') }}"></script>
        <script src="{{ asset('/vendor/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset("/vendor/flot/jquery.flot.pie.js") }}"></script>
        <script src="{{ asset("/vendor/flot/jquery.flot.resize.js") }}"></script>
        <script src="{{ asset("/vendor/flot/jquery.flot.time.js") }}"></script>
        <script src="{{ asset("/vendor/flot-tooltip/jquery.flot.tooltip.min.js") }}"></script>
        <script src="{{ asset("/data/flot-data.js") }}"></script>

        <!-- DataTables JavaScript -->
        <script src="{{ asset("/vendor/datatables/js/jquery.dataTables.min.js") }}"></script>
        <script src="{{ asset("/vendor/datatables-plugins/dataTables.bootstrap.min.js") }}"></script>
        <script src="{{ asset("/vendor/datatables-responsive/dataTables.responsive.js") }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset("/dist/js/sb-admin-2.js") }}"></script>
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    "responsive": true,
                    "language": {
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    }
                });
            });

        </script>

</body>

</html>
