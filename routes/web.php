<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TicketController;


// Route::get('/', function () {
//     return Inertia::render('welcome');
// })->name('home');

Route::get('/', function () {
  return view('index');
})->name('index');

Route::get('/buy', function () {
  return view('buy');
})->name('buy');

// ------------------ Pedidos ------------------
Route::get('/orders', [OrderController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::post('/orders', [OrderController::class, 'store']); // Criar pedido e gerar ingressos

// ------------------ Ingressos ------------------
Route::get('/tickets', [TicketController::class, 'index']); // Listar todos os ingressos
Route::get('/teste', [TicketController::class, 'teste']); // Listar todos os ingressos
Route::get('/tickets/{id}/show', [TicketController::class, 'showTicket']); // Listar um ingressos
Route::patch('/tickets/{id}/cancel', [TicketController::class, 'cancel']); // Cancelar ingresso

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
