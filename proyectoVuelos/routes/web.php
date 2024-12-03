<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HotelesController;
use App\Http\Controllers\VuelosController;
use App\Http\Controllers\ReservacionesVuelosController;
use App\Http\Controllers\ReservacionesHotelesController;

/*Route::get('/', [ControladorVistas::class, 'paginaprincipal'])->name('rutaPaginaprincipal');*/
Route::get('/politicasCancelacion', [ControladorVistas::class, 'politicasCancelacion'])->name('rutaPoliticasCancelacion');
Route::get('/iniciosesion', [ControladorVistas::class, 'iniciosesion'])->name('rutaIniciosesion');
Route::get('/registro', [ControladorVistas::class, 'registro'])->name('rutaRegistro');
Route::get('/recuperacionContrasena', [ControladorVistas::class, 'recuperacionContrasenas'])->name('rutaRecuperacionContrasena');
Route::get('/perfilUsuario', [ControladorVistas::class, 'perfilUsuario'])->name('rutaPerfilUsuario');
Route::get('/panelAdmin', [ControladorVistas::class, 'panelAdmin'])->name('rutaPanelAdmin');
Route::get('/gestionVyHAdmin', [ControladorVistas::class, 'gestionVyHAdmin'])->name('rutaGestionVyHAdmin');
Route::get('/reportesAdmin', [ControladorVistas::class, 'reportesAdmin'])->name('rutaReportesAdmin');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [ControladorVistas::class, 'paginaprincipal'])->name('rutaPaginaprincipal');
    Route::resource('usuarios', UsuarioController::class);
    Route::get('reservaciones', [UsuarioController::class, 'reservaciones'])->name('usuario.reservaciones');
    Route::get('carrito', [UsuarioController::class, 'carrito'])->name('usuario.carrito');
});

//RUTAS USUARIOS
Route::resource('usuarios', UsuarioController::class);

//RUTAS HOTELES
Route::resource('hoteles', HotelesController::class);

//RUTAS 
Route::resource('vuelos', VuelosController::class);

//RUTAS RESERVACIONES VUELOS
Route::resource('reservacionesVuelos', ReservacionesVuelosController::class);
Route::get('/reservarVuelo', [ReservacionesVuelosController::class, 'reservarVuelo'])->name(('rutaReservacionesVuelos'));

//RUTAS RESERVACIONES HOTELES
Route::resource('reservacionesHoteles', ReservacionesHotelesController::class);
Route::get('/reservarHotel', [ReservacionesHotelesController::class, 'reservarHotel'])->name('rutaReservacionesHoteles');


/*Auth::routes();*/

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
