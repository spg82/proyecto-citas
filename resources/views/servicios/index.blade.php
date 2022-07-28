@extends('layouts.plantilla')
@section('title', 'Servicios en Cut & Dry')
@section('contenido')

    <h1>Servicios de Peluquería</h1>
    @foreach ($servicios as $servicio)
        @if ($servicio->especialidad->nombre === 'Peluquería')
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/servicios/'.$servicio->imagen) }}" class="card-img-top" alt="Imagen de un {{$servicio->nombre}}".>
                <div class="card-body">
                    <h5 class="card-title">{{ $servicio->nombre }}</h5>
                    <p class="card-text">{{ $servicio->descripcion }}</p>
                    <p class="card-text">{{ $servicio->duracion }} minutos.</p>
                    <p class="card-text">{{ $servicio->precio }} €uros.</p>
                    
                    <a href="{{url('servicios/show/'.$servicio->id)}}">Ver servicio</a>
                </div>
            </div>
        @endif
    @endforeach

    <h1>Servicios de Estética</h1>
    @foreach ($servicios as $servicio)
        @if ($servicio->especialidad->nombre === 'Estética')
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/servicios/'.$servicio->imagen) }}" class="card-img-top" alt="Imagen de un {{$servicio->nombre}}">
                <div class="card-body">
                    <h5 class="card-title">{{ $servicio->nombre }}</h5>
                    <p class="card-text">{{ $servicio->descripcion }}</p>
                    <p class="card-text">{{ $servicio->duracion }}</p>
                    <p class="card-text">{{ $servicio->precio }}</p>
                    <a href="{{ route('visualizarServicio',['id' => $servicio->id]) }}" class="btn btn-primary"> Ver servicio</a>
                </div>
            </div>
        @endif
    @endforeach
@endsection
