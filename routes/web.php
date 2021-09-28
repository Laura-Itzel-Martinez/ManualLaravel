<?php

use App\Http\Controllers\BaseDatos;
use App\Http\Controllers\Controladores;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\Instalacion;
use App\Http\Controllers\Rutas;
use App\Http\Controllers\Vistas;
use App\Http\Controllers\VistasBlade;
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

Route::get('/' , [Inicio::class, 'Inicio']);
Route::get('/instalacion' , [Instalacion::class, 'Instalacion']);
Route::get('/baseDatos' , [BaseDatos::class, 'BaseDatos']);
Route::get('/controladores' , [Controladores::class, 'Controladores']);
Route::get('/rutas' , [Rutas::class, 'Rutas']);
Route::get('/vistas' , [Vistas::class, 'Vistas']);
Route::get('/vistasBlade' , [VistasBlade::class, 'VistasBlade']);

