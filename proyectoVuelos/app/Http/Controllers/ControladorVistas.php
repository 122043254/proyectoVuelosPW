<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistrar;
use App\Http\Requests\validadorLogin;
use App\Http\Requests\validadorRecuperacion;
use App\Http\Requests\validadorHoteles;
use App\Http\Requests\validadorVuelos;


class ControladorVistas extends Controller
{
    //
    public function paginaprincipal()
    {
        return view('paginaprincipal');
    }

    public function busquedaHoteles()
    {
        return view('busquedaHoteles');
    }

    public function reservacionesHoteles()
    {
        return view('reservacionesHoteles');
    }

    public function busquedaVuelos()
    {
        return view('busquedaVuelos');
    }

    public function reservacionesVuelos()
    {
        return view('reservacionesVuelos');
    }

    public function politicasCancelacion()
    {
        return view('politicasCancelacion');
    }

    public function gestionVyHAdmin()
    {
        return view('gestionVyHAdmin');
    }

    public function iniciosesion()
    {
        return view('iniciosesion');
    }

    public function panelAdmin()
    {
        return view('panelAdmin');
    }

    public function registro()
    {
        return view('registro');
    }

    public function reportesAdmin()
    {
        return view('reportesAdmin');
    }

    public function recuperacionContrasenas()
    {
        return view('recuperacionContrasena');
    }

    public function perfilUsuario()
    {
        return view('perfilUsuario');
    }

    //FUNCIONES VALIDACION
    public function procesoInicioSesion(validadorLogin $requestIS)
    {
        $validacion = $requestIS->validated();
        session()->flash('exito','Inicio de sesión exitoso');
        return to_route('rutaIniciosesion');
    }

    public function procesoRegistro(validadorRegistrar $requestR)
    {
        $validacion2 = $requestR->validated();
        session()->flash('exito','Registro exitoso');
        return to_route('rutaRegistro');
    }

    public function procesoRecuperacionContrasena(validadorRecuperacion $requestRC)
    {
        $validacion3 = $requestRC->validated();
        session()->flash('exito','Se envio un correo de recuperación de contraseña');
        return to_route('rutaRecuperacionContrasena');
    }

    public function procesarReservacionHotel(validadorHoteles $requestRH)
    {
        $validacion4 = $requestRH->validated();
        session()->flash('exito','Reservación exitosa');
        return to_route('rutaReservacionesHoteles');
    }

    public function procesarReservacionVuelo(validadorVuelos $requestRV)
    {
        $validacion5 = $requestRV->validated();
        session()->flash('exito','Reservación exitosa');
        return to_route('rutaReservacionesVuelos');
    }

}
