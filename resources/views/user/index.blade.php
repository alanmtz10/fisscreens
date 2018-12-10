@extends('user.layout')

@section('titulo')
Inicio
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-9">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Inicio</h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <small class="text-muted">Mi agenda</small>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div style="height: 10px; width: 10px;" class="bg-success"></div>
                                            Conferencias completadas
                                        </div>
                                        <div class="col">
                                            <div style="height: 10px; width: 10px;" class="bg-primary"></div>
                                            Conferencia en curso
                                        </div>
                                        <div class="col">
                                            <div style="height: 10px; width: 10px;" class="bg-warning"></div>
                                            Próximas conferencias
                                        </div>
                                        <div class="col">
                                            <div style="height: 10px; width: 10px;" class="bg-danger"></div>
                                            Conferencias canceladas
                                        </div>
                                        <div class="col">
                                            <div style="height: 10px; width: 10px;" class="bg-dark"></div>
                                            No asistió a conferencia
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-lg-12">
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
                                                    <tr class="bg-dark text-white">
                                                        <td>3326</td>
                                                        <td>Conferencia 1.</td>
                                                        <td>08:00 AM</td>
                                                        <td>
                                                            <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                                detalles</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-success">
                                                        <td>3325</td>
                                                        <td>Conferencia 2.</td>
                                                        <td>08:30 AM</td>
                                                        <td>
                                                            <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                                detalles</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-success">
                                                        <td>3324</td>
                                                        <td>Conferencia 3.</td>
                                                        <td>09:30 AM</td>
                                                        <td>
                                                            <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                                detalles</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-primary">
                                                        <td>3323</td>
                                                        <td>Conferencia 4.</td>
                                                        <td>12:00 PM</td>
                                                        <td>
                                                            <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                                detalles</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <td>3322</td>
                                                        <td>Conferencia 5.</td>
                                                        <td>01:00 PM</td>
                                                        <td>
                                                            <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                                detalles</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-danger">
                                                        <td>3321</td>
                                                        <td>Conferencia 6.</td>
                                                        <td>01:40 PM</td>
                                                        <td>
                                                            <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                                detalles</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <td>3320</td>
                                                        <td>Conferencia 7.</td>
                                                        <td>02:15 PM</td>
                                                        <td>
                                                            <a href="{{ route("infoConf") }}" type="button" class="btn btn-sm btn-primary">Ver
                                                                detalles</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-warning">
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

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <small class="text-muted">Formato de gafete</small>
                            </div>
                            <div class="card-body">
                                <div class="radio-inline">
                                    <label>
                                        <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="1"
                                            onchange="" checked>Nombre
                                    </label>
                                    <label>
                                        <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="1"
                                            onchange="" checked>Paquete
                                    </label>
                                    <label>
                                        <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="1"
                                            onchange="" checked>Foto
                                    </label>
                                    <label>
                                        <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="1"
                                            onchange="" checked>Nombre del evento
                                    </label>
                                    <label>
                                        <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="1"
                                            onchange="" checked>Código QR
                                    </label>
                                </div>
                                <button class="btn btn-primary btn-sm">Imprimir</button>
                            </div>

                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <small class="text-muted">Generar reconocimiento</small>
                            </div>
                            <div class="card-body">
                                <p>El reconocimiento estará disponible cuando se completen todas las conferencias.</p>
                                <button class="btn btn-secondary btn-sm" disabled>Generar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <small class="text-muted"><i class="fa fa-comments fa-fw"></i> Mensajes instantáneos</small>
                            </div>
                            <div class="card-body scroll">
                                <div class="panel-body">
                                    <ul class="chat">
                                        <li class="left clearfix">
                                            <span class="chat-img pull-left">
                                                <img src="{{ asset('img/user.png') }}" alt="User Avatar" class="img-circle"
                                                    width="50px" height="50px" style="background: rgb(218,255,254)" />
                                            </span>
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">Ana López</strong>
                                                    <small class="pull-right text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i> Hace 12 minutos
                                                    </small>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                                    bibendum
                                                    ornare dolor, quis ullamcorper ligula sodales.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="right clearfix">
                                            <span class="chat-img pull-right">
                                                <img src="{{ asset('img/user.png') }}" alt="User Avatar" class="img-circle"
                                                    width="50px" height="50px" style="background: rgb(232,197,144)" />
                                            </span>
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <small class=" text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i>Hace 13 minutos</small>
                                                    <strong class="pull-right primary-font">Maria Espinoza</strong>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                                    bibendum
                                                    ornare dolor, quis ullamcorper ligula sodales.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="left clearfix">
                                            <span class="chat-img pull-left">
                                                <img src="{{ asset('img/user.png') }}" alt="User Avatar" class="img-circle"
                                                    width="50px" height="50px" style="background: rgb(162,147,232)" />
                                            </span>
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">Ana López</strong>
                                                    <small class="pull-right text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i>Hace 14 minutos</small>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                                    bibendum
                                                    ornare dolor, quis ullamcorper ligula sodales.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="right clearfix">
                                            <span class="chat-img pull-right">
                                                <img src="{{ asset('img/user.png') }}" alt="User Avatar" class="img-circle"
                                                    width="50px" height="50px" style="background: rgb(232,197,144)" />
                                            </span>
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <small class=" text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i>Hace 15 minutos</small>
                                                    <strong class="pull-right primary-font">Juan Perez</strong>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                                    bibendum
                                                    ornare dolor, quis ullamcorper ligula sodales.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">
                                    <input type="text" class="form-control" placeholder="Escriba un mensaje...">
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
