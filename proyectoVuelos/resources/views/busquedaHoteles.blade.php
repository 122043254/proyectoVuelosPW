@extends('layouts.plantilla')
@section('titulo', 'Hoteles Disponibles')
@section('contenido')

@php
    // Datos simulados de hoteles
    $hoteles = [
        [
            'nombre' => 'Hotel Playa',
            'descripcion' => 'Un hermoso hotel en la playa.',
            'fecha_disponible' => '2023-10-01',
            'precio' => 150,
            'id' => 1
        ],
        [
            'nombre' => 'Hotel Montaña',
            'descripcion' => 'Un acogedor hotel en las montañas.',
            'fecha_disponible' => '2023-10-05',
            'precio' => 200,
            'id' => 2
        ],
        [
            'nombre' => 'Hotel Ciudad',
            'descripcion' => 'Un hotel moderno en el centro de la ciudad.',
            'fecha_disponible' => '2023-10-10',
            'precio' => 120,
            'id' => 3
        ],
    ];
@endphp

<div class="container">
    <h2 class="text-center my-4">Hoteles Disponibles</h2>
    <div class="row">
        @foreach($hoteles as $hotel)
            <div class="col-md-4 mb-4">
                <x-card 
                    title="{{ $hotel['nombre'] }}" 
                    text="{{ $hotel['descripcion'] }}" 
                    date="{{ $hotel['fecha_disponible'] }}" 
                    price="{{ $hotel['precio'] }}" 
                />
            </div>
        @endforeach
    </div>
</div>

@endsection