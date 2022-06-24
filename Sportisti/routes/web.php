<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\MedaljaController;
use App\Http\Controllers\PocetnaController;
use App\Http\Controllers\SportistaController;
use App\Http\Controllers\SportoviController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;

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

/**
 * Logovanje
 */
Route::get('/', [AuthController::class, 'loginView']);
Route::get('/login', [AuthController::class, 'loginView']);
Route::get('/registracija', [AuthController::class, 'registracijaView']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/pocetna', [PocetnaController::class, 'pocetnaView']);

/**
 * Sprotisti
 */
Route::get('/sportisti', [SportistaController::class, 'all']);
Route::get('/sportisti/{id}/edit', [SportistaController::class, 'edit']);
Route::post('/sportisti/{id}/edit', [SportistaController::class, 'update']);
Route::get('/sportisti/{id}/delete',[SportistaController::class,'delete']);
Route::post('/sportisti', [SportistaController::class, 'create']);


/**
 * Sportovi
 */
Route::get('/sportovi', [SportoviController::class, 'all']);
Route::get('/sportovi/{id}/edit', [SportoviController::class, 'edit']);
Route::post('/sportovi', [SportoviController::class, 'create']);
Route::post('/sportovi/{id}', [SportoviController::class, 'update']);

/**
 * Medalje
 */

Route::get('/sportisti/{id}/dodaj-medalju', [MedaljaController::class, 'edit']);
Route::post('/sportisti/{id}/dodaj-medalju', [MedaljaController::class, 'create']);

// Route::get('/sportovi', function () {
//     //
// })->middleware('auth');