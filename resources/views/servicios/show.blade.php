@extends('layouts.plantilla')
@section('title', 'Ver el servicio {{$servicio->nombre}}')
@section('contenido')

    <div class="w-50 mx-auto p-3">
        <h1 class="h3 text-center pt-2 pb-2">Servicio de {{ $servicio->nombre }}</h1>
        <img src="{{ asset('img/servicios/' . $servicio->imagen) }}" alt="" class="img-fluid mx-auto rounded w-100 mb-4">
        <p class="card-text mb-2"><strong>Descripción: </strong>{{ $servicio->descripcion }}</p>
        <p class="card-text mb-2"><strong>Duración: </strong>{{ $servicio->duracion }} minutos.</p>
        <p class="card-text mb-2"><strong>Precio: </strong>{{ $servicio->precio }} €.</p>
        <a href="{{route('servicios.update',['id'=> $servicio->id])}}" class="mt-3 mb-3 btn btn-success">Actualizar</a>
        <a href="{{route('servicios.destroy',['id'=> $servicio->id])}}" class="mt-3 mb-3 btn btn-danger">Eliminar</a>
    </div>
@endsection
