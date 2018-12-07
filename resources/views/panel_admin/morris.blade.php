@extends('panel_admin.layout')

@section('titulo')
    Otros graficos
@endsection

@section('contenido')
<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Otros graficos</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Participacion por conferencia
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="morris-area-chart"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Comparativa con otros años 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            
            <!-- /.col-lg-6 -->
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Donut Chart Example
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
            </div>
            
        </div>
        <!-- /.row -->
    </div>
    </div>
@endsection
