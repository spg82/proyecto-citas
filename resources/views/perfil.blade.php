@extends('layouts.plantilla')

@section('contenido')
    <h1>
        @isset($mensaje)
            {{$mensaje ?? ''}}
        @endisset

        @empty($records)
        {{$mensaje ?? ''}}
        @endempty
       
    </h1>
 
        {{ $usuario}}

       
    
@endsection
