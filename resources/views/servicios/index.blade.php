@extends('layouts.plantilla')
@section('title', 'Ver los servicios')
@section('contenido')
   @include('layouts.partials.aviso')
    <h1 class="h3 mt-2 pt-2 mb-2 pb-2 text-center">Servicios de Peluquería</h1>
    <div class="row ">
        @foreach ($servicios as $servicio)
            @if ($servicio->especialidad->nombre === 'Peluquería')
                <div class="card col-4 mb-3">
                    <img src="{{ asset('img/servicios/' . $servicio->imagen) }}" class="card-img-top mt-2 rounded"
                        alt="Imagen de un {{ $servicio->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title h5">{{ $servicio->nombre }}</h5>
                        <p class="card-text"><strong>Descripción: </strong>{{ $servicio->descripcion }}</p>
                        <p class="card-text"><strong>Duración: </strong>{{ $servicio->duracion }} minutos.</p>
                        <p class="card-text"><strong>Precio: </strong>{{ $servicio->precio }} €.</p>
                        @auth
                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('servicios.show', ['id' => $servicio->id]) }}"
                                    class="mt-3 mb-3 btn btn-primary">Ver</a>
                            @endif
                        @endauth



                    </div>
                </div>
            @endif
        @endforeach
        
    </div>
    <h1 class="h3 mt-2 pt-2 mb-2 pb-2 text-center">Servicios de Estética</h1>
    <div class="row">
        @foreach ($servicios as $servicio)
            @if ($servicio->especialidad->nombre === 'Estética')
                <div class="card col-4 align-items-center mb-3 mr-2" style=" ">
                    <img src="{{ asset('img/servicios/' . $servicio->imagen) }}" class="card-img-top mt-2 rounded"
                        alt="Imagen de un {{ $servicio->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title h5">{{ $servicio->nombre }}</h5>
                        <p class="card-text"><strong>Descripción: </strong>{{ $servicio->descripcion }}</p>
                        <p class="card-text"><strong>Duración: </strong>{{ $servicio->duracion }} minutos.</p>
                        <p class="card-text"><strong>Precio: </strong>{{ $servicio->precio }} €.</p>
                        @auth
                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('servicios.show', ['id' => $servicio->id]) }}"
                                    class="mt-3 mb-3 btn btn-primary">Ver</a>
                            @endif
                        @endauth



                    </div>
                </div>
            @endif
        @endforeach
        
    </div>


@endsection
