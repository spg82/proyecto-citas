@extends('layouts.plantilla')
@section('title', 'Ver perfil')
@section('contenido')
   @include('layouts.partials.aviso')
    @if (isset(Auth::user()->perfil))
        <table class="mx-auto">
            <tr>
                <td>Nombre: </td>
                <td>{{ $usuario->name}}</td>
            </tr>
            <tr>
                <td>Apellidos: </td>
                <td>{{ $usuario->perfil->apellido1 . ' ' . $usuario->perfil->apellido2 }}</td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>{{ $usuario->email }}</td>
            </tr>
            <tr>
                <td>Teléfono: </td>
                <td>{{ $usuario->perfil->telefono }}</td>
            </tr>
            <tr>
                <td>Imagen: </td>
                @if($usuario->perfil->imagen !== "")
                <td><img src="{{ asset('img/user/' . $usuario->perfil->imagen) }}" alt="imagen de usuario {{ $usuario->name }}"
                        class="rounded-circle  mt-2 mb-2" width="80px"></td>
                    @else
                    <td>
                        <i class="fa-solid fa-user mt-2 mb-2" style="font-size: 60px"></i>
                    </td>
                    @endif
            </tr>

            <tr>
                <td>
                    <a href="{{ route('perfil.edit', ['id'=> $usuario->id] )}}" class="btn btn-success ">Actualizar</a>
                </td>
                <td>
                    <a href="{{ route('perfil.destroy', ['id' => $usuario->id]) }}" class="btn btn-danger ">Borrar</a>
                </td>
            </tr>
        </table>
    @else
        <a href="{{ route('perfil.crear', ['id'=> $usuario->id]) }}" class="btn btn-success">Crear perfil</a>
    @endif
@endsection
