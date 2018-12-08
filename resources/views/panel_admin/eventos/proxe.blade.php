@extends('panel_admin.layout')

@section('titulo')
Próximos eventos
@endsection

@section('contenido')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Próximos eventos</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Próximos eventos
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tema</th>
                                    <th>Ponente</th>
                                    <th>Fecha y Hora</th>
                                    <th>Lugar</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tema 1</td>
                                    <td>Otto</td>
                                    <td>Lunes 06/12/18 – 08:00</td>
                                    <td>Sala 2</td>
                                    <td>
                                        <a name="" id="" class="btn btn-primary btn-sm" href="#" role="button">Ver</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tema 2</td>
                                    <td>Miguel</td>
                                    <td>Lunes 06/12/18 – 10:00</td>
                                    <td>Sala 3</td>
                                    <td>
                                        <a name="" id="" class="btn btn-primary btn-sm" href="#" role="button">Ver</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tema 3</td>
                                    <td>Otto</td>
                                    <td>Lunes 06/12/18 – 13:00</td>
                                    <td>Sala 4</td>
                                    <td>
                                        <a name="" id="" class="btn btn-primary btn-sm" href="#" role="button">Ver</a>
                                    </td>
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
</div>

@endsection
