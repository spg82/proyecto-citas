@extends('layouts.plantilla')
@section('titulo','Contacto')
@section('contido')
<br><h1>Contacto</h1>
<form action="/contacto" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="card border-primary rounded-0">
        <div class="card-header p-0">
            <div class="bg-info text-white text-center py-2">
                <p class="m-0">Responderemos lo antes posible</p>
            </div>
        </div>
        <div class="card-body p-3">
            <div class="form-group">
                <div class="input-group mb-2">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nombre y Apellidos"
                           required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-2">
                    <div class="input-group-prepend"></div>
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="exemplo@gmail.com" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-2">
                    <div class="input-group-prepend"></div>
                    <textarea class="form-control" id="texto" name="texto" placeholder="Envianos tu mensaje" required></textarea>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="Enviar" class="btn btn-info btn-block  py-2">
            </div>
        </div>
    </div>
</form>
@stop
@section('footer')
@parent
<script src='panel.js'></script>
@endsection