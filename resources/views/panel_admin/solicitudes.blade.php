@extends('panel_admin.layout')

@section('titulo')
Solicitudes de inscripción
@endsection

@section('contenido')
<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Solicitudes</h1>
            </div>
           
        </div>
        <div class="row">
                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Solicitudes de inscripción
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                                <th>Correo electrónico</th>
                                                <th>Evento</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>correo1@email.com</td>
                                                <td>Evento 1</td>
                                                <td><a name="" id="" class="btn btn-primary btn-sm" href="#" role="button">Ver</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>correo2@email.com</td>
                                                <td>Evento 2</td>
                                                <td><a name="" id="" class="btn btn-primary btn-sm" href="#" role="button">Ver</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>correo3@email.com</td>
                                                <td>Evento 1</td>
                                                <td><a name="" id="" class="btn btn-primary btn-sm" href="#" role="button">Ver</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
        </div>
</div>
@endsection