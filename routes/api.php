<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;


Route::post('/tickets/validate', [TicketController::class, 'validateTicket']); // Validar ingresso por QR Code
