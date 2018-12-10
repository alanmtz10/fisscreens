@extends('page.layout')

@section('titulo')
Metodo de pago
@endsection

@section('contenido')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 10px;">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    Confirmación de pago
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <h6>Nombre:</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6>Nombre participante</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6>Evento:</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6>Evento 1</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6>Paquete:</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6>Paquete 1</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6>Folio de pago:</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6>folio-xxxxxxx</h6>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6>Subtotal:</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6>$xxxx</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6>Comisión:</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6>$xxxx</h6>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h6>Metodos de pago:</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        Pago con tarjeta
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <form action="">
                                                <div class="form-row">
                                                    <div class="col-lg-3">Titular de la tarjeta:</div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="Nombre de titular">
                                                    </div>
                                                </div><br>
                                                <div class="form-row">
                                                    <div class="col-lg-3">Numero de tarjeta:</div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-lg-3">Fecha de vencimiento:</div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="MM/AA">
                                                    </div>
                                                </div><br>
                                                <div class="form-row">
                                                    <div class="col-lg-3">Codigo de seguridad:</div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="123">
                                                    </div>
                                                </div><br>

                                            </form>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Pagar</button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Pago
                                                                procesado</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Su pago a sido procesado.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="{{ route('inicioPage') }}" type="button" class="btn btn-primary btn-sm">Cerrar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
