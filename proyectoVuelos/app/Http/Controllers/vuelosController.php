<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorVuelos;
use App\Models\vuelos;
use Illuminate\Http\Request;

class VuelosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulta= vuelos::all();
        return view('busquedaVuelos',['vuelos'=>$consulta]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorVuelos $request)
    {
        $addvuelo = new vuelos;
        $addvuelo->origen = $request->input('origen');
        $addvuelo->destino = $request->input('destino');
        $addvuelo->fechaSalida = $request->input('fechaSalida');
        $addvuelo->fechaLlegada = $request->input('fechaLlegada');
        $addvuelo->horaSalida = $request->input('horaSalida');
        $addvuelo->horaLlegada = $request->input('horaLlegada');
        $addvuelo->save();

        $msj = $request->input('origen');
        session()->flash('exito', $msj);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(vuelos $vuelos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vuelos $vuelos)
    {
        $vuelos = vuelos::findOrFail($vuelos);
        return view('editarVuelos', compact('vuelos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorVuelos $request, vuelos $vuelos)
    {
        $vuelos = vuelos::findOrFail($vuelos);
        $vuelos->origen = $request->input('origen');
        $vuelos->destino = $request->input('destino');
        $vuelos->fechaSalida = $request->input('fechaSalida');
        $vuelos->fechaLlegada = $request->input('fechaLlegada');
        $vuelos->horaSalida = $request->input('horaSalida');
        $vuelos->horaLlegada = $request->input('horaLlegada');
        $vuelos->save();
        $msj = $request->input('origen');
        session()->flash('exito', 'Se actualizo el vuelo: '.$msj);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vuelos $vuelos)
    {
        $vuelos = vuelos::findOrFail($vuelos);
        $vuelos->delete();
        session()->flash('exito', 'Vuelo borrado');
        return redirect()->back();
    }
}
