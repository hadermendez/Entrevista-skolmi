<?php

namespace App\Http\Controllers;

use App\Models\Programas;
use App\Http\Requests\StoreProgramasRequest;
use App\Http\Requests\UpdateProgramasRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $programas = Programas::all();

        return $programas;
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programas =DB::table('programas')->get();
        return view('programa.create',[
            'programas' => $programas
        ]);
    }
    public function save(Request $request)
    {

        $fecha = date('Y-m-d H:i:s');

         $inscripcion = DB::table('inscripciones')->insert([
            'beneficiario' => $request->input('nombre'),
            'fecha' =>$fecha,
            'programa_id' =>$request->input('programa')
        ]);

        return redirect()->action('\App\Http\Controllers\ProgramasController@show')->with('status','Inscripcion creada');;
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProgramasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgramasRequest $request)
    {
               $programa = Programas::create($request->all());
                return $programa;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function show(Programas $programas)
    {
        $programas =DB::table('programas')->get();

        return view('programa.index',[
            'programas' => $programas
        ]);
    }


    public function detail($id)
    {
        $programa =DB::table('programas')->where('id_programa','=',$id)->first();

        return view('programa.detail',[
            'programa' => $programa
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function edit(Programas $programas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgramasRequest  $request
     * @param  \App\Models\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgramasRequest $request, Programas $programas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programas $programas)
    {
        //
    }
}
