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

Route::get('/', function () {
    return view('perfectbody');
});
Route::get('encuesta-prioritaria', function () {
    return view('encuesta_prioritaria');
});

Route::get('encuesta-hospitalizacion', function () {
    return view('encuesta_hospitalizacion');
});

Route::get('encuesta-cirugia', function () {
    return view('encuesta_cirugia');
});

Route::get('plantilla', function () {
    return view('encuestas_plantilla');
});

