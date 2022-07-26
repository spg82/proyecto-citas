@extends('layouts.plantilla')

@section('contenido')
    <br>
    <br>
    @if (session('aviso') !== null && session('aviso') !== '')
        <h1>
            {{ session('aviso') }}
            {{ session(['aviso' => '']) }}
        </h1>
    @endif
    @if (isset(Auth::user()->perfil))
        <table class="mx-auto">
            <tr>
                <td>Nombre: </td>
                <td>{{ $user->name}}</td>
            </tr>
            <tr>
                <td>Apellidos: </td>
                <td>{{ $usuario->apellido1 . ' ' . $usuario->apellido2 }}</td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>Teléfono: </td>
                <td>{{ $usuario->telefono }}</td>
            </tr>
            <tr>
                <td>Imagen: </td>
                <td><img src="{{ asset('img/user/' . $usuario->imagen) }}" alt="imagen de usuario {{ Auth::user()->name }}"
                        class="rounded-circle" width="80px"></td>
            </tr>

            <tr>
                <td>
                    <a href="{{ route('perfil.edit',['id' => $usuario->user_id] )}}">Actualizar</a>
                </td>
                <td>
                    <a href="{{ route('perfil.destroy',['id' => $usuario->user_id]) }}">Borrar</a>
                </td>
            </tr>
        </table>
    @else
        <a href="{{ route('perfil.crear', ['id'=> $id]) }}">Crear perfil</a>
    @endif
@endsection
