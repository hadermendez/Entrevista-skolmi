<h1>Programas</h1>

@if(session('status'))
    <div id="mensaje">
        {{session('status')}}
    </div>
@endif

@foreach($programas as $programa)
    <li>
        <a href="{{ action('\App\Http\Controllers\ProgramasController@detail',[ 'id' => $programa->id_programa])}}">
            {{ $programa->nombre}}
        </a>
    </li>
@endforeach
