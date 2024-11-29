<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorVuelos;

class vuelosController extends Controller
{
    public function busquedaVuelos()
    {
        return view('busquedaVuelos');
    }

    public function reservacionesVuelos()
    {
        return view('reservacionesVuelos');
    }

    public function procesarReservacionVuelo(validadorVuelos $requestRV)
    {
        $validacion5 = $requestRV->validated();
        session()->flash('exito', 'Reservación exitosa');
        return to_route('rutaReservacionesVuelos');
    }
}
