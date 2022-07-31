@extends('layouts.plantilla')
@section('title', 'Crear datos de empleado')
@section('contenido')

    <div class="row mt-4 mb-4 justify-content-center">
        <div class="col-6">
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
            <form action="{{ route('empleado.store') }}" method="post">
                @csrf

                <input type="hidden" name="user_id" value="{{ $id }}">

                <div class="mb-3">
                    <label for="" class="form-label fw-bold">Especialidad: </label>
                    <select class="form-control" name="especialidad_id" id="especialidad_id">
                        <option value="">Elija opción</option>
                        @foreach ($especialidades as $especialidad)
                            <option value="{{ $especialidad->id }}"
                                {{ old('especialidad_id') == $especialidad->id ? 'selected' : '' }}>
                                {{ $especialidad->nombre }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Fecha incorporación: </label>
                    <input type="date" class="form-control" placeholder="Introduce la fecha" name="fecha_incorporacion"
                        value="{{ old('fecha_incorporacion') }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Calle: </label>
                    <select class="form-control" name="calle" id="calle">
                        <option value="">Elija opción</option>
                        <option value="calle" {{ old('calle') == 'calle' ? 'selected' : '' }}>Calle</option>
                        <option value="avenida" {{ old('calle') == 'avenida' ? 'selected' : '' }}>Avenida</option>
                        <option value="plaza" {{ old('calle') == 'plaza' ? 'selected' : '' }}>Plaza</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nombre de la calle: </label>
                    <input type="text" class="form-control" placeholder="Pon el nombre de la calle" name="nombre"
                        value="{{ old('nombre') }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Número: </label>
                    <input type="text" class="form-control" placeholder="Pon número de la vivienda" name="numero"
                        value="{{ old('numero') }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Piso: </label>
                    <input type="text" class="form-control" placeholder="Pon número de la vivienda" name="piso"
                        value="{{ old('piso') }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Letra: </label>
                    <input type="text" class="form-control" placeholder="Pon la letra" name="letra"
                        value="{{ old('letra') }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">CP: </label>
                    <input type="text" class="form-control" placeholder="Escribe el código postal" name="cp"
                        value="{{ old('cp') }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Localidad: </label>
                    <input type="text" class="form-control" placeholder="Escribe tu localidad" name="localidad"
                        value="{{ old('localidad') }}">
                </div>
                <input type="submit" class="btn btn-success text-success" value="Crear">
            </form>
        </div>
    </div>


@endsection
