<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

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

Route::get('Inicio',[PersonasController::class,'Home']);
Route::get('Persona',[PersonasController::class,'Index']);
Route::post('Persona/Registrar',[PersonasController::class,'Save']);
Route::get('Edicion{Id}',[PersonasController::class,'EdicionPerson']);
Route::post('Persona/Edicion{Id}',[PersonasController::class,'ActualizarPerson']);