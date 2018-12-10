<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recuperar contraseña</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{ asset("/vendor/metisMenu/metisMenu.min.css") }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href=" {{ asset("/dist/css/sb-admin-2.css") }}" rel="stylesheet">
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
    <style>

    </style>

</head>

<body>

    <div class="container">
        <div class="row ">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recuperar contraseña</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label for="">Correo electrónico: </label>
                                    <input type="email" name="" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Por favor introduzca el correo
                                        electrónico
                                        con el que se ha registrado.</small>
                                </div>
                                <div class="form-group col-lg-12">

                                </div>
                            </div>
                        </form>
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Enviar
                                correo de recuperación</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Recuperar contraseña</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            Se ha enviado un mensaje con un enlace para recuperar su cuenta, por favor revise su bandeja de entrada.
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('inicioPage') }}" type="button" class="btn btn-primary btn-sm">Cerrar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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

</body>

</html>
