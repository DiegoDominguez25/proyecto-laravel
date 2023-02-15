<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('paginas.contacto');
});

Route::get('/actualizaciones', function () {
    $version_uno = 'Versión 1.0';
    $version_dos = 'Versión 2.0';
    return view('paginas.historico-actualizaciones', compact('version_uno', 'version_dos')); 
        /*-> with([
        'primer_version' => $version_uno, 
        'segunda_version' => $version_dos]);*/
});