<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\MedaljaController;
use App\Http\Controllers\SportistaController;
use App\Http\Controllers\SportoviController;
use App\Http\Resources\SportistiCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/**
 * GET /sportisti - vrati mi sve sportiste iz baze - metoda index iz kontrolera
 * GET /sportisti/{id} - vrati sportistu sa datim id - jem - show iz kontrolera
 * POST /politicians - kreiraj novog politicara podacima iz tela zavteva - store
 * PUT /politicians/{id} - izmeni politicara sa datim id - jem podacima iz tela zavteva - update
 * DELETE /politicians/{id} - obrisi politicara sa datim id - jem iz baze - destroy
 */

Route::post('/registracija', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/sportisti', [SportistaController::class, 'index']);

// Route::put('/sportovi', SportoviController::class, 'store');

// Route::resource('sportisti', SportistaController::class);
// Route::resource('sportovi', SportoviController::class);

Route::get('/reprezentacije/{id_zemlje}', [SportistaController::class, 'reprezentacije']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });



    Route::resource('/sportisti', SportistaController::class)->only(['delete','create','update']);
    Route::resource('sportovi', SportoviController::class);

    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout']);


});
