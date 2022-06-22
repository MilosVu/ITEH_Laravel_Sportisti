<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\PocetnaController;
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


Route::get('/', [AuthController::class, 'loginView']);

Route::get('/login', [AuthController::class, 'loginView']);

Route::get('/registracija', [AuthController::class, 'registracijaView']);

Route::get('/pocetna', [PocetnaController::class, 'pocetnaView']);