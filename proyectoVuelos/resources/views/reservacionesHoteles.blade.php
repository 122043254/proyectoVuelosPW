@extends('layouts.plantilla')
@section('titulo', 'Reservación de Hotel')
@section('contenido')

@if (session('exito'))
    <script>
        Swal.fire({
            title: '{!! session('exito') !!}',
            icon: 'success'
        });
    </script>
@endif

<div class="container my-5">
    <x-card-form title="{{ __('Reservar Hotel') }}">
        <form action="/procesarReservacionHotel" method="POST" class="p-4">
            @csrf
            <div class="mb-3">
                <label for="nombreHuesped" class="form-label">{{ __('Nombre del Huésped') }}</label>
                <input type="text" class="form-control" id="nombreHuesped" name="nombreHuesped" placeholder="{{ __('Ej. Juan Pérez') }}">
                <small class="text-danger fst-italic">{{ $errors->first('nombreHuesped') }}</small>
            </div>
            <div class="mb-3">
                <label for="fechaEntrada" class="form-label">{{ __('Fecha de Entrada') }}</label>
                <input type="date" class="form-control" id="fechaEntrada" name="fechaEntrada">
                <small class="text-danger fst-italic">{{ $errors->first('fechaEntrada') }}</small>
            </div>
            <div class="mb-3">
                <label for="fechaSalida" class="form-label">{{ __('Fecha de Salida') }}</label>
                <input type="date" class="form-control" id="fechaSalida" name="fechaSalida">
                <small class="text-danger fst-italic">{{ $errors->first('fechaSalida') }}</small>
            </div>
            <div class="mb-3">
                <label for="ubicacionHotel" class="form-label">{{ __('Ubicación del Hotel') }}</label>
                <input type="text" class="form-control" id="ubicacionHotel" name="ubicacionHotel" placeholder="{{ __('Ej. Playa del Carmen') }}">
                <small class="text-danger fst-italic">{{ $errors->first('ubicacionHotel') }}</small>
            </div>
            <div class="mb-3">
                <label for="cantidadHabitaciones" class="form-label">{{ __('Cantidad de Habitaciones') }}</label>
                <input type="number" class="form-control" id="cantidadHabitaciones" name="cantidadHabitaciones" min="1" max="10" value="1">
                <small class="text-danger fst-italic">{{ $errors->first('cantidadHabitaciones') }}</small>
            </div>
            <div class="mb-3">
                <label for="numeroAdultos" class="form-label">{{ __('Número de Adultos') }}</label>
                <input type="number" class="form-control" id="numeroAdultos" name="numeroAdultos" min="1" value="1">
                <small class="text-danger fst-italic">{{ $errors->first('numeroAdultos') }}</small>
            </div>
            <div class="mb-3">
                <label for="numeroNinos" class="form-label">{{ __('Número de Niños (opcional)') }}</label>
                <input type="number" class="form-control" id="numeroNinos" name="numeroNinos" min="0" value="0">
                <small class="text-danger fst-italic">{{ $errors->first('numeroNinos') }}</small>
            </div>
            <button type="submit" class="btn btn-primary w-100">{{ __('Reservar Hotel') }}</button>
        </form>
    </x-card-form>
</div>

@endsection