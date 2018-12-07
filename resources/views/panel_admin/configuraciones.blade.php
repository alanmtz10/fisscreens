@extends('panel_admin.layout')

@section('titulo')
Configuraciones
@endsection

@section('contenido')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Configuraciones</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Configuración de la base de datos
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>¿Crear un respaldo de la base de datos?: </label><br>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" onchange="oncl(this)"
                                                    checked>Si
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="2" onchange="oncl(this)">No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>¿Cada cuantos días?:</label>
                                        <input id="dias" type="number" class="form-control">
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

<script>
    
    function oncl(radio){
        console.log(radio.value)
        if(radio.value==2){
            document.getElementById('dias').disabled = true;
            document.getElementById('dias').value = ""; 
        }else{
            document.getElementById('dias').disabled = false;
        }
    }
</script>
