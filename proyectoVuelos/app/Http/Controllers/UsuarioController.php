<?php

namespace App\Http\Controllers;

use App\Models\Hoteles;
use App\Models\ReservacionesHoteles;
use App\Models\ReservacionesVuelos;
use App\Models\Usuario;
use App\Models\Vuelos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Mostrar todos los usuarios
    public function index()
    {
        $consulta = Usuario::all();
        return view('busquedaUsuarios', ['usuarios' => $consulta]);
    }

    // Crear nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $addusuario = new Usuario;
        $addusuario->nombre = $request->input('nombre');
        $addusuario->apellidos = $request->input('apellidos');
        $addusuario->telefono = $request->input('telefono');
        $addusuario->email = $request->input('email');
        $addusuario->password = bcrypt($request->input('password'));
        $addusuario->save();

        session()->flash('exito', 'Se guardó el usuario: ' . $request->input('nombre'));
        return redirect()->back();
    }

    // Editar usuario
    public function edit(Usuario $usuario)
    {
        return view('editarUsuario', compact('usuario'));
    }

    // Actualizar usuario
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email',
            'password' => 'nullable|min:8|confirmed',
        ]);

        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->telefono = $request->input('telefono');
        $usuario->email = $request->input('email');
        if ($request->input('password')) {
            $usuario->password = bcrypt($request->input('password'));
        }
        $usuario->save();

        session()->flash('exito', 'Se actualizó el usuario: ' . $request->input('nombre'));
        return redirect()->back();
    }

    // Eliminar usuario
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        session()->flash('exito', 'Usuario borrado');
        return redirect()->back();
    }

    // Mostrar las reservaciones del usuario
    public function reservaciones()
    {
        $reservaciones_vuelos = ReservacionesVuelos::where('usuario_id', Auth::id())->where('tipo', 'vuelo')->get();
        $reservaciones_hoteles = ReservacionesHoteles::where('usuario_id', Auth::id())->where('tipo', 'hotel')->get();
        return view('usuario.reservaciones', compact('reservaciones_vuelos', 'reservaciones_hoteles'));
    }

    // Mostrar el carrito de compras
    public function carrito()
    {
        $carrito = session()->get('carrito', []);
        return view('usuario.carrito', compact('carrito'));
    }

    // Agregar un elemento al carrito
    public function agregarAlCarrito(Request $request)
    {
        $carrito = session()->get('carrito', []);

        $item = [
            'id' => $request->id,
            'nombre' => $request->nombre,
            'tipo' => $request->tipo, // Puede ser 'vuelo' o 'hotel'
        ];

        $carrito[] = $item;
        session()->put('carrito', $carrito);

        return redirect()->route('carrito.index');
    }

}
