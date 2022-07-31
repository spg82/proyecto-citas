@extends('layouts.plantilla')
@section('title','Empleados')

@section('contenido')
    <h1 class="h2 text-center pt-3 pb-3">Empleados</h1>
    <div class="row mt-3   ">
       
            @foreach ($usuarios as $usuario)
            @if ($usuario->role === 'empleado')
               
                <div class="card col-4 mb-3">
                    <img src="{{ asset('img/user/' . $usuario->perfil->imagen) }}" class="card-img-top mt-3 w-50 rounded mx-auto" 
                        alt="Imagen de un {{ $usuario->name }}">
                    <div class="card-body">
                        <h5 class="card-title h5">{{ $usuario->name  }} {{$usuario->perfil->apellido1}} {{ $usuario->perfil->apellido2 }}</h5>
                        <p class="card-text"><strong>Especialidad: </strong></p>
                       
                        @auth
                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('empleados.show', ['id' => $usuario->id]) }}"
                                    class="mt-3 mb-3 btn btn-primary">Ver</a>
                            @endif
                        @endauth



                    </div>
                </div>
            @endif
        @endforeach
        
      
       
    </div>
@endsection