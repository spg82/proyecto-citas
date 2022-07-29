@extends('layouts.plantilla')
@section('title','Actualizar el servicio ')
    
@section('contenido')
   
    @if ($errors->any())
    <h3>Errores</h3>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1 class="text-center pt-2 pb-2 h2">Actualizar el servicio {{$servicio->nombre}}</h1>
<div class="w-50 mx-auto">
    <form action="{{ route('servicios.update',['id'=> $servicio->id]) }}" method="post" enctype="multipart/form-data">
       
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Nombre del servicio: </label>
            <input type="text" class="form-control" placeholder="Pon tu apellido paterno" name="nombre"
                id="nombre" value="{{ old('nombre', $servicio->nombre) }}">
        </div>
        <div class="mb-3">
            <label for="form-label">Expecialidad</label>
            <select class="form-control mt-2" aria-label="Default select example" aria-placeholder="Especialidad"
                name="especialidad_id" id="especialidad_id">
                <option value=""> Escoja especialidad </option>
                @foreach($especialidades as $especialidad)
               
                <option value="{{$especialidad->id}}">{{$especialidad->nombre}}</option>
               
                @endforeach
            </select>
        </div>
        <div class="mb-3">

            <label for="form-label">Descripción</label>
            <textarea class="form-control" placeholder="Describe el servicio a crear" id="descripcion" rows="5"
                name="descripción" value="{{ old('descripcion', $servicio->descripcion) }}">{{ old('descripcion', $servicio->descripcion) }}</textarea>


        </div>

        <div class="mb-3">
            <label for="" class="form-label">Duración: </label>
            <input type="text" class="form-control" placeholder="Escribe el tiempo que dura el servicio"
                name="duracion" value="{{ old('duracion' , $servicio->duracion) }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio: </label>
            <input type="text" class="form-control" placeholder="Escribe el precio del servicio" name="precio"
                value="{{ old('precio', $servicio->precio) }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Imagen: </label>
            <input type="file" class="form-control" name="imagen" id="imagen"
                placeholder="Introduce tu imagen de perfil" value="{{ old('imagen', $servicio->imagen) }}">
        </div>
        <input type="submit" class="btn btn-success text-success mb-3" value="Actualizar">
    </form>
</div>
@endsection