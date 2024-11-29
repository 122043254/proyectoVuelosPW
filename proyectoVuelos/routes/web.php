<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/vuelos', function () {
    return view('vuelos');
});

Route::get('/reservaciones', function () {
    return view('Reservaciones');
});*/

Route::get('/',[ControladorVistas::class,'paginaprincipal'])->name('rutaPaginaprincipal');
Route::get('/busquedaHoteles',[ControladorVistas::class,'busquedaHoteles'])->name('rutaBusquedaHoteles');
Route::get('/reservacionesHoteles',[ControladorVistas::class,'reservacionesHoteles'])->name('rutaReservacionesHoteles');
Route::get('/busquedaVuelos',[ControladorVistas::class,'busquedaVuelos'])->name('rutaBusquedaVuelos');
Route::get('/reservacionVuelos',[ControladorVistas::class,'reservacionesVuelos'])->name('rutaReservacionesVuelos');
Route::get('/politicasCancelacion',[ControladorVistas::class,'politicasCancelacion'])->name('rutaPoliticasCancelacion');
Route::get('/gestionVyHAdmin',[ControladorVistas::class,'gestionVyHAdmin'])->name('rutaGestionVyHAdmin');
Route::get('/iniciosesion',[ControladorVistas::class,'iniciosesion'])->name('rutaIniciosesion');
Route::get('/panelAdmin',[ControladorVistas::class,'panelAdmin'])->name('rutaPanelAdmin');
Route::get('/registro',[ControladorVistas::class,'registro'])->name('rutaRegistro');
Route::get('/reportesAdmin',[ControladorVistas::class,'reportesAdmin'])->name('rutaReportesAdmin');
Route::get('/recuperacionContrasena',[ControladorVistas::class,'recuperacionContrasenas'])->name('rutaRecuperacionContrasena');
Route::get('/perfilUsuario',[ControladorVistas::class,'perfilUsuario'])->name('rutaPerfilUsuario');



//RUTAS POST
Route::post('/procesarInicioSesion',[ControladorVistas::class,'procesoInicioSesion']);
Route::post('/procesarRegistro',[ControladorVistas::class,'procesoRegistro']);
Route::post('/procesarRecuperacionContrasena',[ControladorVistas::class,'procesoRecuperacionContrasena']);
Route::post('/procesarReservacionHotel',[ControladorVistas::class,'procesarReservacionHotel']);
Route::post('/procesarReservacionVuelo',[ControladorVistas::class,'procesarReservacionVuelo']);


