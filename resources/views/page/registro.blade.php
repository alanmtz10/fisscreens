@extends('page.layout')

@section('titulo')
Registro
@endsection

@section('contenido')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 10px;">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    Formulario de registro
                </div>
                <div class="card-body">
                    <form action="{{ route('metodop') }}" method="GET">
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <label for="">Tipo de registro: </label><br>
                                <label for="" class="radio-inline col-lg-2">
                                    <input type="radio" name="radios" id="" value="1" onchange="fun(this)"> Usuario
                                </label>
                                <label for="" class="radio-inline col-lg-2">
                                    <input type="radio" name="radios" id="" value="2" onchange="fun(this)">
                                    Participante
                                </label>
                            </div>
                        </div>
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
                                <label>Sexo: </label><br>
                                <select name="" id="" class="form-control">
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Direccion: </label>
                                <input class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>Ciudad: </label>
                                <input class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Estado: </label>
                                <input class="form-control" placeholder="">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>C.P.: </label>
                                <input class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Contraseña: </label>
                                <input type="password" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>Confirmar contraseña: </label>
                                <input type="password" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Evento: </label><br>
                                <select name="" id="evento" class="form-control">
                                    <option value="1">Evento 1</option>
                                    <option value="2">Evento 2</option>
                                    <option value="3">Evento 3</option>
                                    <option value="4">Evento 4</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>Paquete: </label><br>
                                <select name="" id="paquete" class="form-control">
                                    <option value="1">Paquete 1</option>
                                    <option value="2">Paquete 2</option>
                                    <option value="3">Paquete 3</option>
                                    <option value="4">Paquete 4</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Foto: </label>
                                <input type="file" class="form-control-file" accept=".png, .jpeg, .jpg">
                            </div>
                        </div>
                        <div class="form-row" id="pago">
                            <div class="col-lg-12">
                                <h3 id="precio"><span class="text-muted">Total: </span >$123</h3>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="term" onchange="box(this)">
                                    <label class="custom-control-label" for="term">
                                        <a href="" data-toggle="modal" data-target="#exampleModal">Acepto los términos
                                            y condiciones</a>
                                    </label>
                                </div><br>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Términos y condiciones</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-justify">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi,
                                                    rem eum. Magni rem veniam accusamus consequatur perferendis id
                                                    nihil architecto quae a saepe autem, modi aut fuga animi vel.
                                                    Blanditiis quas, inventore amet similique sequi iste rem,
                                                    accusantium dolores optio enim eius quaerat ex! Nihil ab
                                                    perspiciatis odio nesciunt animi exercitationem nobis! Eligendi,
                                                    molestiae libero. Quod quia nulla itaque, non excepturi quasi alias
                                                    quo repudiandae veniam magni nobis dicta in earum doloremque error
                                                    cupiditate natus officiis dolores similique saepe aut sint autem
                                                    dolorum. Eaque ratione quasi recusandae impedit nemo atque
                                                    dignissimos maiores cumque delectus deserunt. Corporis id
                                                    voluptatibus eos quisquam.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12 justify-content-center">
                                <input name="" id="guardar" class="btn btn-sm btn-primary" type="submit" value="Guardar" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function fun(e) {
        var v = e.value;
        console.log(v);
        if (v == 1) {
            document.getElementById('precio').innerHTML = '<span class="text-muted">Total: </span >$3333';
            document.getElementById('evento').disabled = true;
            document.getElementById('paquete').disabled = true;
        } else {
            document.getElementById('evento').disabled = false;
            document.getElementById('paquete').disabled = false;
        }

    }

    function box(e){
        var val = e.checked;
        if(val==true){
            document.getElementById("guardar").disabled=false;
        }else{
            document.getElementById("guardar").disabled=true;
        }
    }

</script>
@endsection
