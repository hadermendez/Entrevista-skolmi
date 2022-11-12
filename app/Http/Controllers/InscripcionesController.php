<?php

namespace App\Http\Controllers;

use App\Models\Inscripciones;
use App\Http\Requests\StoreInscripcionesRequest;
use App\Http\Requests\UpdateInscripcionesRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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



    public function delete($id)
    {
        $inscripciones = DB::table('inscripciones')->where('id_inscripcion',$id)->delete();
        return redirect()->action('\App\Http\Controllers\InscripcionesController@show')->with('status','Incripcion eliminada');

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
        $inscripciones =DB::table('inscripciones')->get();

        return view('programa.index',[
            'inscripciones' => $inscripciones
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscripciones  $inscripciones
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $inscripcion = DB::table('inscripciones')->where('id_inscripcion',$id)->first();

      return view('programa.create',[
            'inscripcion'=> $inscripcion
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInscripcionesRequest  $request
     * @param  \App\Models\Inscripciones  $inscripciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $inscripcion = DB::table('inscripciones')->where('id_inscripcion',$id)
            ->update([
                'beneficiario'=>$request->input('nombre'),
                'programa_id'=>$request->input('programa_id')
            ]);
        return redirect()->action('\App\Http\Controllers\InscripcionesController@show')
                                ->with('status','Incripcion Editada');

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
