<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\VehiculoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('/marca', MarcaController::class);

//Route marca
Route::get('/api-marca', [MarcaController::class, 'index']);
Route::post('/api-marca', [MarcaController::class, 'store']);
Route::put('/api-marca/{id}', [MarcaController::class, 'update']);
Route::delete('/api-marca/{id}', [MarcaController::class, 'destroy']);
Route::get('/api-marca/{id}', [MarcaController::class, 'show']);


//Route vehiculo
Route::get('/api-vehiculo', [VehiculoController::class, 'index']);
Route::post('/api-vehiculo', [VehiculoController::class, 'store']);
Route::put('/api-vehiculo/{id}', [VehiculoController::class, 'update']);
Route::delete('/api-vehiculo/{id}', [VehiculoController::class, 'destroy']);
Route::get('/api-vehiculo/{id}', [VehiculoController::class, 'show']);
