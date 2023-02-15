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

Route::get('/actualizaciones/{version_id?}', function ($version_id = null) {
    $versiones = [
        'version 1.0',
        'version 2.0',
        'version 3.0',
        'version 4.0',
        'version 5.0',
    ];
    
    if(!empty($version_id)) {
        $version = $versiones[$version_id];
    } else {
        $version = null;
    }

    return view('paginas.historico-actualizaciones', compact('versiones','version')); 
        /*-> with([
        'primer_version' => $version_uno, 
        'segunda_version' => $version_dos]);*/
});