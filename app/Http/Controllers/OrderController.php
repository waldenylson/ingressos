<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
  /**
   * Cria um novo pedido e gera os ingressos com QR Codes personalizados.
   */
  public function store(Request $request)
  {
    // Validação dos dados recebidos
    $request->validate([
      'buyer_name'  => 'required|string|max:255',
      'buyer_email' => 'required|email',
      'quantity'    => 'required|integer|min:1'
    ]);

    // Criação do pedido
    $order = Order::create([
      'buyer_name'  => $request->buyer_name,
      'buyer_email' => $request->buyer_email,
      'quantity'    => $request->quantity
    ]);

    // Para cada ingresso comprado, gerar um QR Code
    for ($i = 0; $i < $request->quantity; $i++) {

      // Gerar código único (UUID)
      $qrCodeValue = Str::uuid()->toString();

      // Criar QR Code com logo central
      $qrImage = QrCode::format('png')
        ->size(300) // Tamanho do QR
        ->merge(public_path('logo.png'), 0.3, true) // Logo no centro (30% do QR)
        ->errorCorrection('H') // Alta tolerância para leitura
        ->generate($qrCodeValue); // Dados contidos no QR

      Ticket::create([
        'order_id' => $order->id,
        'qr_code'  => $qrCodeValue,  // Código para validação
        'ticket_price' => 39.00,     // Preço fixo do ingresso
      ]);
    }

    // Retornar resposta
    return response()->json([
      'success' => true,
      'message' => 'Pedido e ingressos gerados com sucesso',
      'order'   => $order->load('tickets')
    ], 201);
  }
}
