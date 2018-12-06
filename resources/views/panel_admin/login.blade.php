<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iniciar Sesión</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ingrese su usuario y contraseña</h3>
                    </div>
                    <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('auth') }}">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Iniciar Sesion</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

</body>

</html>
