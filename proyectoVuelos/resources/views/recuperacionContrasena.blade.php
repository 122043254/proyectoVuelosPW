@extends('layouts.plantilla')
@section('titulo','Recuperación de contraseña')
@section('contenido')

@if (session('exito'))
    <script>
        Swal.fire({
            title: '{!! session('exito') !!}',
            icon: 'success'
        });
    </script>
@endif

<x-card-form title="{{__('Recuperar contraseña')}}">
    <form action="/procesarRecuperacionContrasena" method="POST">
        @csrf
        <div class="mb-3">
            <label for="correo" class="form-label">{{__('Correo Electronico')}}</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}">
            <small class="text-danger fst-italic">{{ $errors->first('correo') }}</small>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">{{__('Recuperar Contraseña')}}</button>
        </div>
    </form>
</x-card-form>

@endsection