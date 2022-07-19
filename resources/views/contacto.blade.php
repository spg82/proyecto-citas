@extends('layouts.plantilla')
@section('titulo', 'Contacto')
@section('contenido')
    <div class="w-50 mx-auto ">
        <br>
        <h1 class="p-3 text-center">Contacta con nosotros</h1>
        <form action="/contacto" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="card border-info rounded-3 border-opacity-25">
                <div class="card-header p-0">
                    <div class="bg-info text-white text-center py-2">
                        <p class="m-0">Responderemos lo antes posible</p>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="form-group">
                        <div class="input-group mb-2 p-2">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="w-75 p-2 mx-auto border-start-0 border-end-0 border-top-0 border-info" id="nome" name="nome"
                                placeholder="Nombre y Apellidos" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2 p-2">
                            <div class="input-group-prepend"></div>
                            <input type="email" class="w-75 p-2 mx-auto border-start-0 border-end-0 border-top-0 border-info" id="email" name="email"
                                placeholder="exemplo@gmail.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2 p-2">
                            <div class="input-group-prepend"></div>
                            <textarea rows="4" class="w-75 p-2 mx-auto border-2 border-info border-top-0 rounded-bottom" id="texto" name="texto" placeholder="Envianos tu mensaje" required></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Enviar" class="btn btn-info btn-block  py-2">
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection
