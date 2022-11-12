<?php
?><!-- HTML -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Entrevista-dev</title>


   <style>

   </style>
</head>
@if(isset($inscripcion) && is_object($inscripcion))
    <h1>Editar</h1>


@else
<h1>Ingresar</h1>

@endif

         <form action="{{ isset($inscripcion) ?
                        action('\App\Http\Controllers\InscripcionesController@update') :
                        action('\App\Http\Controllers\ProgramasController@save') }}"  method="POST" id="crear">

    {{ csrf_field() }}

             <label for="nombre">Nombre</label>
             <input type="text" name="nombre" value="{{isset($inscripcion)?$inscripcion->beneficiario : ''}}">
             <br>
             @if(isset($inscripcion) && is_object($inscripcion))
                 <input type="hidden" name="id" value="{{$inscripcion->id_inscripcion}}">
                 <input type="hidden" name="programa_id" value="{{$inscripcion->programa_id}}">
             @elseif(isset($programas))

             <label for="programa">Programa</label>
             <select name="programa">
                 @foreach($programas as $programa)
                     <option value={{ $programa->id_programa}}>
                         {{ $programa->nombre}}
                     </option>
                 @endforeach
                 @endif

             </select>





    <br><input type="submit" value="guardar">
</form>
</html>
