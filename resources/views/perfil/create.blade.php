@extends('layouts.plantilla')
@section('title', 'Crear perfil')

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

    <form action="{{ route('perfil.store', ['id' => $id]) }}" method="post" enctype="multipart/form-data">

        @csrf
        <input type="hidden" name="user_id" value="{{ $id }}">
        <div class="mb-3">
            <label for="" class="form-label">Apellido paterno: </label>
            <input type="text" class="form-control" placeholder="Pon tu apellido paterno" name="apellido1"
                value="{{ old('apellido1') }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido materno: </label>
            <input type="text" class="form-control" placeholder="Pon tu apellido materno" name="apellido2"
                value="{{ old('apellido2') }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fijo o Móvil: </label>
            <input type="text" class="form-control" placeholder="Pon tu número de teléfono o móvil" name="telefono"
                value="{{ old('telefono') }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Imagen: </label>
            <input type="file" class="form-control" name="imagen" id="imagen"
                placeholder="Introduce tu imagen de perfil" value="{{ old('imagen') }}">
        </div>

        <input type="submit" class="btn btn-success text-success" value="Crear">
    </form>
@endsection
