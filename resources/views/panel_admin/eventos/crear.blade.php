@extends('panel_admin.layout')

@section('titulo')
Crear evento
@endsection

@section('contenido')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Crear un nuevo evento</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Información del evento
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" method="POST" action="">
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>Nombre del evento: </label>
                                        <input class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Tipo de evento: </label>
                                        <select class="form-control" onchange="des(this)">
                                            <option selected disabled></option>
                                            <option value="1">Congreso</option>
                                            <option value="2">Conferencia</option>
                                            <option value="3">Simposio</option>
                                            <option value="4">Curso</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>Fecha inicial: </label>
                                        <input type="date" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Fecha final: </label>
                                        <input id="fef" type="date" class="form-control" placeholder="">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>Hora: </label>
                                        <input id="hora" type="time" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Lugar: </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>Ponente: </label>
                                        <input id="ponente" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <label>Descripción: </label>
                                        <textarea class="form-control" name="" id="" cols="30" rows="10" style="
                                                    overflow: scroll;
                                                    resize: none;
                                                ">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <input name="" id="" class="btn btn-primary" type="submit" value="Guardar">
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
   
    function des(ele){
        var opc = ele.value;
        if(opc==1 || opc==3){
            document.getElementById('ponente').disabled=true;
            document.getElementById('hora').disabled=true;
        }else{
            document.getElementById('fef').disabled=true;
            document.getElementById('ponente').disabled=false;
            document.getElementById('hora').disabled=false;
        }
    }
</script>