@extends('layouts.plantilla')
@section('title', 'Ver empleado')
@section('contenido')

    @if (isset($empleado->empleado->id))
        <div class="row mt-4 justify-content-center g-2">
            <div class="col-8">
                <img src="{{ asset('img/user/' . $empleado->perfil->imagen) }}" class="card-img-top mt-3 w-50 rounded mx-auto"
                    alt="Imagen de un {{ $empleado->name }}">
                <div class="card-body text-center mt-3">
                    <h5 class="card-title h5">{{ $empleado->name }} {{ $empleado->perfil->apellido1 }}
                        {{ $empleado->perfil->apellido2 }}</h5>
                        <p class="card-text"><strong>Email: </strong>{{ $empleado->email}}</p>
                    <p class="card-text"><strong>Teléfono: </strong>{{ $empleado->perfil->telefono }}</p>
                    <p class="card-text"><strong>Especialidad: </strong>{{ $empleado->empleado->especialidad->nombre }}</p>
                </div>

            </div>
        </div>
        <div class="row mt-4 justify-content-center g-2  align-items-center">
            <div class="col-2">
                <a href="{{ route('empleado.edit', ['id' => $empleado->empleado->id]) }}" class="btn btn-success">Editar
                    </a>
                
            </div>

            <div class="col-2">
                <a href="{{ route('empleado.destroy', ['id' => $empleado->empleado->id]) }}"
                    class="btn btn-danger mt-2">Eliminar
                    </a>
            </div>
        </div>
    @else
        <div class="row mt-4 justify-content-center align-items-center">
            <div class="col-2">
                <a href="{{ route('empleado.create', ['id' => $empleado->id]) }}" class="btn btn-success  mx-auto">Crear
                    </a>
            </div>

        </div>
    @endif


@endsection
