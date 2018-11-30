@extends('panel_admin.layout')

@section('titulo')
Formularios
@endsection

@section('contenido')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Formularios</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Formulario de inscripcion
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>Nombre: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Apellidos: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>Direccion: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Ciudad: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>Estado: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>C.P.: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12 justify-content-center">
                                        <input name="" id="" class="btn btn-sm btn-primary" type="button" value="Enviar">
                                        <input name="" id="" class="btn btn-sm btn-warning" type="button" value="Limpiar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
</div>

@endsection
