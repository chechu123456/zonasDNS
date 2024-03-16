<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DominioController;

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
    return view('inicio');
});

Route::get('/configuracion', function () {
    return view('configuracion');
});
Route::get('/masivo', function () {
    return view('masivo');
});

Route::get('/manual', function () {
    return view('manual');
})->name('manual');

Route::get('/checkeado', function () {
    return view('checkeado');
});

Route::get('/historial', function () {
    return view('checkeado');
});

Route::controller(DominioController::class)->group(function(){
    Route::post('consultarDominio', 'index')->name('consultarDominio.index');
    Route::post('consultarDominio/guardar', 'guardar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
