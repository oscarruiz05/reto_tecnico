<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionsController;
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

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::post('/register-user', [HomeController::class, 'store'])->name('store.user');
Route::get('/play', [QuestionsController::class, 'index'])->name('play');
Route::post('/game', [QuestionsController::class, 'startGame']);
Route::post('/game/validar', [QuestionsController::class, 'validarRespuestas']);
Route::post('/game/success', [QuestionsController::class, 'ganador']);
