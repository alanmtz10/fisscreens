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
                    Elegir que campos son solicitados al participante en el formulario de inscripción
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-row">
                                    <div class="form-group col-lg-5">
                                        <label>Nombre: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                    <div class="custom-control custom-checkbox col-lg-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    </div>
                                    <div class="form-group col-lg-5">
                                        <label>Apellidos: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                    <div class="custom-control custom-checkbox col-lg-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-5">
                                        <label>Direccion: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                    <div class="custom-control custom-checkbox col-lg-1">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    </div>
                                    <div class="form-group col-lg-5">
                                        <label>Ciudad: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                    <div class="custom-control custom-checkbox col-lg-1">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-5">
                                        <label>Estado: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                    <div class="custom-control custom-checkbox col-lg-1">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        </div>
                                    <div class="form-group col-lg-5">
                                        <label>C.P.: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                    <div class="custom-control custom-checkbox col-lg-1">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12 justify-content-center">
                                        <input name="" id="" class="btn btn-sm btn-primary" type="button" value="Guardar">
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
