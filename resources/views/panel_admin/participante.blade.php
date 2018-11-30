@extends('panel_admin.layout')

@section('titulo')
Participantes
@endsection

@section('contenido')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Participantes</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Datos sobre los participantes
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Edad</th>
                                <th>Plan de inscripcion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeC">
                                <td>Maria</td>
                                <td>Perez</td>
                                <td class="center">25</td>
                                <td class="center">Plan 1</td>
                                <td class="center">
                                    <button type="button" class="btn  btn-small btn-primary">Ver</button>
                                    <button type="button" class="btn  btn-small btn-success">Editar</button>
                                    <button type="button" class="btn  btn-small btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="gradeC">
                                <td>Juan</td>
                                <td>Lopez</td>
                                <td class="center">33</td>
                                <td class="center">Plan 2</td>
                                <td class="center">
                                    <button type="button" class="btn  btn-small btn-primary">Ver</button>
                                    <button type="button" class="btn  btn-small btn-success">Editar</button>
                                    <button type="button" class="btn  btn-small btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr class="gradeU">
                                <td>Ana</td>
                                <td>Dominguez</td>
                                <td class="center">49</td>
                                <td class="center">Plan 3</td>
                                <td class="center">
                                    <button type="button" class="btn  btn-small btn-primary">Ver</button>
                                    <button type="button" class="btn  btn-small btn-success">Editar</button>
                                    <button type="button" class="btn  btn-small btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Conferencistas
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
                                    <th>Temas</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Tema 1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Tema 2</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>Tema 3</td>
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
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Trabajadores
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Area</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Area 1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Area 2</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>Area 3</td>
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
        <!-- /.col-lg-6 -->
    </div>
</div>
</div>
@endsection
