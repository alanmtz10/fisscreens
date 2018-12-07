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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                <small class="text-muted"><i class="fa fa-comments fa-fw"></i> Chat</small>
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
                                                    <strong class="primary-font">Ana Lopez</strong>
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
                                                    <strong class="primary-font">Ana Lopez</strong>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
