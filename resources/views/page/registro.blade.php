@extends('page.layout')

@section('titulo')
Registro
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="">
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
                    <div class="form-group col-lg-6">
                        <label>Evento: </label><br>
                        <select name="" id="" class="form-control">
                            <option value="1">Evento 1</option>
                            <option value="2">Evento 2</option>
                            <option value="3">Evento 3</option>
                            <option value="4">Evento 4</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Paquete: </label><br>
                        <select name="" id="" class="form-control">
                            <option value="1">Paquete 1</option>
                            <option value="2">Paquete 2</option>
                            <option value="3">Paquete 3</option>
                            <option value="4">Paquete 4</option>
                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label>Foto: </label><br>
                        <input type="file">
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
</div>
@endsection
