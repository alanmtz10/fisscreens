@extends('user.layout')

@section('estilos')
<style>
    .star-rating a {
        
        display: inline-block;
        color: #95a5a6;
        /* gris (normal) */
    }

    .star-rating:hover a {
        color: #f39c12;
        /* amarillo (seleccionado) */
    }

    .star-rating:hover a:hover~a {
        color: #95a5a6;
        /* gris (normal) */
    }

</style>
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <small class="text-muted">Información de conferencia</small>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Tema</h2>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="text-muted">Nombre de ponente</h4>
                            </div>
                            <div class="col-lg-12">
                                <h6 class="text-muted">Hora: 09:00</h6>
                                <h6 class="text-muted">Fecha: 08/12/2018</h6>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-12">
                                <span class="font-weight-bold">Descripción: </span>
                            </div>
                            <div class="col-lg-12">
                                <p class="text-justify">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ab consequatur
                                    voluptates a numquam obcaecati. Repudiandae, quas ipsum ratione qui laboriosam
                                    consectetur corporis repellat tempora accusantium, est nemo facilis, et totam
                                    placeat fugiat inventore rerum velit obcaecati officia voluptas itaque!
                                </p>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-12">
                                <span class="font-weight-bold">Calificación: </span>
                            </div>
                            <div class="star-rating col-lg-12">
                                <a href="#"><h1>&#9733;</h1></a>
                                <a href="#"><h1>&#9733;</h1></a>
                                <a href="#"><h1>&#9733;</h1></a>
                                <a href="#"><h1>&#9733;</h1></a>
                                <a href="#"><h1>&#9733;</h1></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
