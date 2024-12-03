<?php

namespace App\Http\Controllers;

use App\Models\reservacionesHoteles;
use Illuminate\Http\Request;

class ReservacionesHotelesController extends Controller
{
    public function reservarHotel()
    {
        return view('reservacionesHoteles');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(reservacionesHoteles $reservacionesHoteles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservacionesHoteles $reservacionesHoteles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservacionesHoteles $reservacionesHoteles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservacionesHoteles $reservacionesHoteles)
    {
        //
    }
}
