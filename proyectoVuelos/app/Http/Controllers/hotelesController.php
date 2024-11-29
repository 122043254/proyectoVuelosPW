<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorHoteles;

class hotelesController extends Controller
{
    public function busquedaHoteles()
    {
        return view('busquedaHoteles');
    }

    public function reservacionesHoteles()
    {
        return view('reservacionesHoteles');
    }

    public function procesarReservacionHotel(validadorHoteles $requestRH)
    {
        $validacion4 = $requestRH->validated();
        session()->flash('exito', 'Reservación exitosa');
        return to_route('rutaReservacionesHoteles');
    }
}
