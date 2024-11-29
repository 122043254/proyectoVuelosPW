@extends('layouts.plantilla')
@section('titulo','Registro')
@section('contenido')

@if (session('exito'))
    <script>
        Swal.fire({
            title: '{!! session('exito') !!}',
            icon: 'success'
        });
    </script>
@endif

<x-card-form title="{{__('Registrate')}}">
    <form action="/procesarRegistro" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">{{__('Nombre')}}</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
            <small class="text-danger fst-italic">{{ $errors->first('nombre') }}</small>
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label">{{__('Apellidos')}}</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ old('apellidos') }}">
            <small class="text-danger fst-italic">{{ $errors->first('nombre') }}</small>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">{{__('Telefono')}}</label>
            <input type="number" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
            <small class="text-danger fst-italic">{{ $errors->first('telefono') }}</small>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">{{__('Correo Electronico')}}</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}">
            <small class="text-danger fst-italic">{{ $errors->first('correo') }}</small>
        </div>
        <div class="mb-3">
            <label for="contrasena" class="form-label">{{__('Contraseña')}}</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" value="{{ old('contrasena') }}">
            <small class="text-danger fst-italic">{{ $errors->first('contrasena') }}</small>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">{{__('Registrarse')}}</button>
        </div>
    </form>
</x-card-form>

@endsection