<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistrar;
use App\Http\Requests\validadorLogin;
use App\Http\Requests\validadorRecuperacion;
use App\Http\Requests\validadorHoteles;
use App\Http\Requests\validadorVuelos;
//modelos de vuelo y hoteles
use App\Models\Vuelo;
use App\Models\Hotel;



class ControladorVistas extends Controller
{
    //
    public function paginaprincipal()
    {
        return view('paginaprincipal');
    }

    public function politicasCancelacion()
    {
        return view('politicasCancelacion');
    }

    public function gestionVyHAdmin()
    {
        $vuelos = Vuelo::all();
        $hoteles = Hotel::all();
        return view('gestionVyHAdmin', compact('vuelos', 'hoteles'));
    }

    public function panelAdmin()
    {
        return view('panelAdmin');
    }

    public function reportesAdmin()
    {
        return view('reportesAdmin');
    }

}
