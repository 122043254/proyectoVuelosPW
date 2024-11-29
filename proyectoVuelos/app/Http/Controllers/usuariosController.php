<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistrar;
use App\Http\Requests\validadorLogin;
use App\Http\Requests\validadorRecuperacion;

class usuariosController extends Controller
{
    public function iniciosesion()
    {
        return view('iniciosesion');
    }

    public function registro()
    {
        return view('registro');
    }

    public function recuperacionContrasenas()
    {
        return view('recuperacionContrasena');
    }

    //FUNCIONES VALIDACION
    public function procesoInicioSesion(validadorLogin $requestIS)
    {
        $validacion = $requestIS->validated();
        session()->flash('exito', 'Inicio de sesión exitoso');
        return to_route('rutaIniciosesion');
    }

    public function procesoRegistro(validadorRegistrar $requestR)
    {
        $validacion2 = $requestR->validated();
        session()->flash('exito', 'Registro exitoso');
        return to_route('rutaRegistro');
    }

    public function procesoRecuperacionContrasena(validadorRecuperacion $requestRC)
    {
        $validacion3 = $requestRC->validated();
        session()->flash('exito', 'Se envio un correo de recuperación de contraseña');
        return to_route('rutaRecuperacionContrasena');
    }
}
