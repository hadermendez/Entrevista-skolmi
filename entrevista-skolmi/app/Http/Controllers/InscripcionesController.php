<?php

namespace App\Http\Controllers;

use App\Models\Inscripciones;
use App\Http\Requests\StoreInscripcionesRequest;
use App\Http\Requests\UpdateInscripcionesRequest;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripciones = Inscripciones::all();

        return $inscripciones;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInscripcionesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInscripcionesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscripciones  $inscripciones
     * @return \Illuminate\Http\Response
     */
    public function show(Inscripciones $inscripciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscripciones  $inscripciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscripciones $inscripciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInscripcionesRequest  $request
     * @param  \App\Models\Inscripciones  $inscripciones
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInscripcionesRequest $request, Inscripciones $inscripciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscripciones  $inscripciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscripciones $inscripciones)
    {
        //
    }
}
