<?php

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

use App\Http\Controllers\TreinamentoController;

Route::get('/', [TreinamentoController::class, 'index'])->middleware('auth');
Route::get('/treinamentos/criar', [TreinamentoController::class, 'create'])->middleware('auth');
Route::get('/treinamentos/{id}', [TreinamentoController::class, 'show'])->middleware('auth');
Route::post('/treinamentos', [TreinamentoController::class, 'store'])->middleware('auth');
Route::delete('/treinamentos/{id}', [TreinamentoController::class, 'destroy'])->middleware('auth');
Route::get('/treinamentos/edit/{id}', [TreinamentoController::class, 'edit'])->middleware('auth');
Route::put('/treinamentos/update/{id}', [TreinamentoController::class, 'update'])->middleware('auth');
Route::post('/treinamentos/join/{id}', [TreinamentoController::class, 'joinTreinamento'])->middleware('auth');
Route::get('/treinamentos/meus-treinamentos', [TreinamentoController::class, 'meusTreinamentos'])->middleware('auth');
Auth::routes();
