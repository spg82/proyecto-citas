@extends('layouts.plantilla')
@section('title', 'Servicios en Cut & Dry')
@section('contenido')
<div class="mt-3 mb-3 w-75 mx-auto pt-4">
    <table class="">
        <tr>
            <th>Servicio</th>
            <th>Descripción</th>
            <th>Duración</th>
            <th>Precio</th>
            <th>Especialidad</th>
        </tr>
        @foreach ($servicios as $servicio)
            <tr>
                <td> {{ $servicio->nombre }}</td>
                <td> {{ $servicio->descripcion }}</td>
                <td> {{ $servicio->duracion }} minutos</td>
                <td> {{ $servicio->precio }} €</td>
                <td>{{ $servicio->especialidad->nombre }}</td>
            </tr>
        @endforeach
    </table>
</div>
    

@endsection
