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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/peliculas',[App\Http\Controllers\PeliculaController::class, 'index'])->name('peliculas');
Route::post('/subirPelicula',[App\Http\Controllers\PeliculaController::class,'subirPelicula'])->name('subirPelicula');
Route::get('/pelicula/{ruta}',[App\Http\Controllers\PeliculaController::class,'mostrarPelicula']);
Route::get('/peliculas/{id}',[App\Http\Controllers\PeliculaController::class,'pagina']);