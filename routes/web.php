<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','\App\Http\Controllers\ProgramasController@create');
Route::get('/programas','\App\Http\Controllers\ProgramasController@show');
Route::get('/programas/detail/{id?}','\App\Http\Controllers\ProgramasController@detail');
Route::get('/programas/crear','\App\Http\Controllers\ProgramasController@create');
Route::post('/programas/save','\App\Http\Controllers\ProgramasController@save');





