<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/iniciar_sesion', function () {

    return view('iniciar_sesion');

})->name('iniciar_sesion');

Route::get('/asignar_cita', function () {

    return view('citas.asignarcitas');
    
})->name('asignar_cita');
