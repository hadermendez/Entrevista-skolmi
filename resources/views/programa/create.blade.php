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
<h1>Ingresar</h1>
<form action="{{ action('\App\Http\Controllers\ProgramasController@save') }}" method="POST" id="crear">
    {{ csrf_field() }}
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <br><label for="programa">Programa</label>
    <select name="programa">

            @foreach($programas as $programa)
            <option value={{ $programa->id_programa}}>
                {{ $programa->nombre}}
            </option>
            @endforeach
    </select>
    <br><input type="submit" value="guardar">
</form>
</html>
