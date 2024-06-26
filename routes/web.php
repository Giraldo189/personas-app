<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\MunicipioController;
use App\Models\Municipio;
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
    return view('welcome');
});

Route::get('/comunas',[ComunaController::class,'index'])->name('comunas.index');
Route::post('/comunas',[ComunaController::class,'store'])->name('comunas.store');
Route::get('/comunas/create',[ComunaController::class,'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}',[ComunaController::class,'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}',[ComunaController::class,'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit',[ComunaController::class,'edit'])->name('comunas.edit');

// Ruta de los Municipios 
Route::get('/municipios',[MunicipioController::class,'index'])->name('municipio.index');
Route ::post('/municipios',[MunicipioController::class,'store'])->name('municipios.store');
Route ::get('/municipios/create',[MunicipioController::class,'create'])->name('municipios.create');
Route ::put('/municipios/{municipio}',[MunicipioController::class,'update'])->name('municipios.update');
Route ::get('/municipios/{municipio}/edit',[MunicipioController::class,'edit'])->name('municipios.edit');
Route ::delete('/municipios/{municipio}',[MunicipioController::class,'destroy'])->name('municipios.destroy');