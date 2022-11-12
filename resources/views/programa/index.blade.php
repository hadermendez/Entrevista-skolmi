
<a href="{{ action('\App\Http\Controllers\ProgramasController@create')}}">
  Crear Inscripcion
</a>
<br>
<a href="{{ action('\App\Http\Controllers\InscripcionesController@show')}}">
    Ver Inscripcion
</a>
@if(session('status'))
    <div id="mensaje">
        {{session('status')}}
    </div>
@endif
@if(isset($programas))
    <h1>Programas</h1>

    @foreach($programas as $programa)

    <li>
        <a href="{{ action('\App\Http\Controllers\ProgramasController@detail',[ 'id' => $programa->id_programa])}}">
            {{ $programa->nombre}}
        </a>
    </li>
@endforeach
@elseif(isset($inscripciones))
    <h1>Inscripciones</h1>

    @foreach($inscripciones as $inscripcion)
        <li>
            Nombre: {{ $inscripcion->beneficiario}}
            <a href="{{ action('\App\Http\Controllers\InscripcionesController@edit',
                        [ 'id' => $inscripcion->id_inscripcion])}}">Editar  </a>
            <a href="{{ action('\App\Http\Controllers\InscripcionesController@delete',
                        [ 'id' => $inscripcion->id_inscripcion])}}">Eliminar  </a>
        </li>

    @endforeach

@endif



