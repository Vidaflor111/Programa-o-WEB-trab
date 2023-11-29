<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\EventoController;
use App\Http\Controllers\RabbitMQController;
Route::get('/',[EventoController::class, 'index']);
Route::get('/enviar-mensagem', [RabbitMQController::class, 'enviarMensagem']);
Route::get('/eventos/cadastrar',[EventoController::class, 'cadastrar'])->middleware('auth');
Route::get('/cadastrar-conta', [EventoController::class, 'cadastrarConta']);
Route::get('/eventos', [EventoController::class, 'eventos']);
Route::get('/entrar', [EventoController::class, 'entrar']);
Route::get('/eventos/{id}', [EventoController::class, 'show']);

Route::post('/eventos',[EventoController::class, 'store']);
Route::post('/eventos/entrar/{id}',[EventoController::class, 'joinEvent'])->middleware('auth');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
