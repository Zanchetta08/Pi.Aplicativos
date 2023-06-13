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
use App\Http\Controllers\VagaController;

Route::get('/', [TreinamentoController::class, 'index'])->middleware('auth');
Route::get('/treinamentos/criar', [TreinamentoController::class, 'create'])->middleware('auth');
Route::get('/treinamentos/{id}', [TreinamentoController::class, 'show'])->middleware('auth');
Route::post('/treinamentos', [TreinamentoController::class, 'store'])->middleware('auth');
Route::delete('/treinamentos/{id}', [TreinamentoController::class, 'destroy'])->middleware('auth');
Route::get('/treinamentos/edit/{id}', [TreinamentoController::class, 'edit'])->middleware('auth');
Route::put('/treinamentos/update/{id}', [TreinamentoController::class, 'update'])->middleware('auth');
Route::post('/treinamentos/join/{id}', [TreinamentoController::class, 'joinTreinamento'])->middleware('auth');
Route::delete('/treinamentos/leave/{id}', [TreinamentoController::class, 'leaveTreinamento'])->middleware('auth');

Route::get('/dashboard', [TreinamentoController::class, 'dashboard'])->middleware('auth');

Route::get('/vagas/criar', [VagaController::class, 'create'])->middleware('auth');
Route::get('/vagas', [VagaController::class, 'index'])->middleware('auth');
Route::get('/vagas/{id}', [VagaController::class, 'show'])->middleware('auth');
Route::post('/vagas', [VagaController::class, 'store'])->middleware('auth');
Route::delete('/vagas/{id}', [VagaController::class, 'destroy'])->middleware('auth');
Route::get('/vagas/edit/{id}', [VagaController::class, 'edit'])->middleware('auth');
Route::put('/vagas/update/{id}', [VagaController::class, 'update'])->middleware('auth');
Route::post('/vagas/join/{id}', [VagaController::class, 'joinVaga'])->middleware('auth');
Route::delete('/vagas/leave/{id}', [VagaController::class, 'leaveVaga'])->middleware('auth');


Auth::routes();

Route::get('/treinamentos/quiz/{id}', [TreinamentoController::class, 'quiz'])->middleware('auth');
Route::put('/treinamentos/quizUpdate/{id}', [TreinamentoController::class, 'quizUpdate'])->middleware('auth');

Route::get('/treinamentos/case1/{id}', [TreinamentoController::class, 'case1'])->middleware('auth');
Route::put('/treinamentos/case1Update/{id}', [TreinamentoController::class, 'case1Update'])->middleware('auth');

Route::get('/treinamentos/case2/{id}', [TreinamentoController::class, 'case2'])->middleware('auth');
Route::put('/treinamentos/case2Update/{id}', [TreinamentoController::class, 'case2Update'])->middleware('auth');
