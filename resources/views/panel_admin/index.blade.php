@extends('panel_admin.layout')

@section('titulo')
Panel de administración
@endsection

@section('contenido')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Inicio</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">

                            <i class="fas fa-file-alt fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">26</div>
                            <div>Nuevas solicitudes</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('solicitudes') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Ver detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fas fa-users fa-4x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">2</div>
                            <div>Eventos próximos</div>
                        </div>
                    </div>
                </div>
            <a href="{{ route("proxevents") }}">
                    <div class="panel-footer">
                        <span class="pull-left">Ver detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fas fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">124</div>
                            <div>Participantes</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route("participantes") }}">
                    <div class="panel-footer">
                        <span class="pull-left">Ver detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fas fa-exclamation-triangle fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">1</div>
                            <div>Alertas</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Ver detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Participantes por conferencia
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li onclick="grafica(this)">
                                    Pastel
                            </li>
                            <li onclick="grafica(this)">
                                    Barras
                            </li>
                            <li onclick="grafica(this)">
                                    Histogramas
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body" id="gg">
                    <div id="morris-area-chart"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fas fa-business-time"></i> Conferencias del día
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div style="height: 10px; width: 10px;" class="bg-success"></div>
                            Conferencias completadas
                        </div>
                        <div class="col-lg-3">
                            <div style="height: 10px; width: 10px;" class="bg-primary"></div>
                            Conferencia en curso
                        </div>
                        <div class="col-lg-3">
                            <div style="height: 10px; width: 10px;" class="bg-warning"></div>
                            Próximas conferencias
                        </div>
                        <div class="col-lg-3">
                            <div style="height: 10px; width: 10px;" class="bg-danger"></div>
                            Conferencias canceladas
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sala</th>
                                            <th>Descripcion</th>
                                            <th>Hora</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-success">
                                            <td>3326</td>
                                            <td>Conferencia 1.</td>
                                            <td>08:00 AM</td>
                                            <td>
                                                <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                    detalles</a>
                                            </td>
                                        </tr>
                                        <tr class="bg-success">
                                            <td>3325</td>
                                            <td>Conferencia 2.</td>
                                            <td>08:30 AM</td>
                                            <td>
                                                <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                    detalles</a>
                                            </td>
                                        </tr>
                                        <tr class="bg-success">
                                            <td>3324</td>
                                            <td>Conferencia 3.</td>
                                            <td>09:30 AM</td>
                                            <td>
                                                <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                    detalles</a>
                                            </td>
                                        </tr>
                                        <tr class="bg-primary">
                                            <td>3323</td>
                                            <td>Conferencia 4.</td>
                                            <td>12:00 PM</td>
                                            <td>
                                                <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                    detalles</a>
                                            </td>
                                        </tr>
                                        <tr class="bg-warning">
                                            <td>3322</td>
                                            <td>Conferencia 5.</td>
                                            <td>01:00 PM</td>
                                            <td>
                                                <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                    detalles</a>
                                            </td>
                                        </tr>
                                        <tr class="bg-danger">
                                            <td>3321</td>
                                            <td>Conferencia 6.</td>
                                            <td>01:40 PM</td>
                                            <td>
                                                <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                    detalles</a>
                                            </td>
                                        </tr>
                                        <tr class="bg-warning">
                                            <td>3320</td>
                                            <td>Conferencia 7.</td>
                                            <td>02:15 PM</td>
                                            <td>
                                                <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                    detalles</a>
                                            </td>
                                        </tr>
                                        <tr class="bg-warning">
                                            <td>3319</td>
                                            <td>Conferencia 8.</td>
                                            <td>03:00 PM</td>
                                            <td>
                                                <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                    detalles</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>

        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Panel de notificaciones
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <i class="fa fa-comment fa-fw"></i> Nuevo mensaje
                            <span class="pull-right text-muted small"><em>Hace 4 minutos</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fas fa-user fa-fw"></i> 3 Nuevas solicitudes
                            <span class="pull-right text-muted small"><em>12 minutes ago</em>
                            </span>
                        </a>

                    </div>
                    <!-- /.list-group -->
                    <a href="#" class="btn btn-default btn-block">Ver todas las notificaciones</a>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

            <!-- /.panel -->
            <div class="chat-panel panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-comments fa-fw"></i> Mensajes instantáneos
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="{{ asset('img/user.png') }}" alt="User Avatar" class="img-circle" width="50px"
                                    height="50px" style="background: rgb(218,255,254)" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Ana López</strong>
                                    <small class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> Hace 12 minutos
                                    </small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                            <span class="chat-img pull-right">
                                <img src="{{ asset('img/user.png') }}" alt="User Avatar" class="img-circle" width="50px"
                                    height="50px" style="background: rgb(232,197,144)" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i>Hace 13 minutos</small>
                                    <strong class="pull-right primary-font">Maria Espinoza</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="{{ asset('img/user.png') }}" alt="User Avatar" class="img-circle" width="50px"
                                    height="50px" style="background: rgb(162,147,232)" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Ana López</strong>
                                    <small class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i>Hace 14 minutos</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                            <span class="chat-img pull-right">
                                <img src="{{ asset('img/user.png') }}" alt="User Avatar" class="img-circle" width="50px"
                                    height="50px" style="background: rgb(232,197,144)" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i>Hace 15 minutos</small>
                                    <strong class="pull-right primary-font">Juan Perez</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.panel-body -->
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Escriba un mensaje" />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Enviar
                            </button>
                        </span>
                    </div>
                </div>
                <!-- /.panel-footer -->
            </div>
            <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
@endsection

@section('script')
    <script>
        function grafica(e){
            var v = e.innerHTML;
            console.log(document.getElementById('gg').innerHTML);
            if(v=="Pastel"){
                document.getElementById('gg').innerHTML = '<div class="flot-chart"><div class="flot-chart-content" id="flot-pie-chart"></div></div>'
            }
        }
    </script>
@endsection
