@extends('panel_admin.layout')

@section('titulo')
Graficos de linea
@endsection

@section('contenido')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Datos estadísticos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Participantes 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-pie-chart"></div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Grafico 0
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-line-chart"></div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Grafico 1
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-line-chart-multi"></div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Grafico 2
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-line-chart-moving"></div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Grafico 3
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-bar-chart"></div>
                    </div>
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
