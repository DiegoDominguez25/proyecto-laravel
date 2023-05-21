<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PinturaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\CategoriaController;

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
    return view('auth.login');
});

Route::get('/contacto', [PaginaController::class, 'contacto']);

Route::post('/recibe-form-contacto', [PaginaController::class, 'recibeFormContacto']);

Route::get('/actualizaciones/{version_id?}', [PaginaController::class, 'actualizaciones']);

Route::get('/precios/{cupon_id?}', [PaginaController::class, 'precios']);

Route::resource('pintura', PinturaController::class);

Route::post('archivo',[ArchivoController::class, 'store'])->name('archivo.store');

Route::get('archivo/{archivo}/descargar',[ArchivoController::class, 'descargar'])->name('archivo.descargar');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
