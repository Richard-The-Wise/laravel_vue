<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;

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
//Route::get('paises_list',[\App\Http\Controllers\PaisController::class,'index']);
Route::get('/paises/show',[\App\Http\Controllers\PaisController::class,'index']);
Route::post('/paises/create',[\App\Http\Controllers\PaisController::class,'store']);
Route::post('/clientes/create',[\App\Http\Controllers\ClienteController::class,'store']);
Route::get('estados/show',[\App\Http\Controllers\EstadoController::class,'index']);


Route::get('/', function () {
    return view('welcome');




});
