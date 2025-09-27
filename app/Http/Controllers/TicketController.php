<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;

class TicketController extends Controller
{
  /**
   * Lista todos os ingressos
   */
  public function index()
  {
    $tickets = Ticket::with('order')->get();
    return response()->json($tickets);
  }

  /**
   * Valida um ingresso pelo QR Code
   */
  public function validateTicket(Request $request)
  {
    $request->validate([
      'qr_code' => 'required|string'
    ]);

    $ticket = Ticket::where('qr_code', $request->qr_code)->first();

    if (!$ticket) {
      return response()->json([
        'success' => false,
        'message' => 'Ingresso não encontrado'
      ], 404);
    }

    if ($ticket->status !== 'valid') {
      return response()->json([
        'success' => false,
        'message' => 'Ingresso inválido ou já utilizado'
      ], 400);
    }

    // Marcar como usado
    $ticket->update(['status' => 'used']);

    return response()->json([
      'success' => true,
      'message' => 'Ingresso validado com sucesso',
      'ticket'  => $ticket
    ]);
  }

  /**
   * Cancela um ingresso
   */
  public function cancel($id)
  {
    $ticket = Ticket::find($id);

    if (!$ticket) {
      return response()->json([
        'success' => false,
        'message' => 'Ingresso não encontrado'
      ], 404);
    }

    if ($ticket->status === 'used') {
      return response()->json([
        'success' => false,
        'message' => 'Não é possível cancelar um ingresso já utilizado'
      ], 400);
    }

    $ticket->update(['status' => 'canceled']);

    return response()->json([
      'success' => true,
      'message' => 'Ingresso cancelado com sucesso',
      'ticket'  => $ticket
    ]);
  }

  public function showTicket($id)
  {
    // $ticket = Ticket::findOrFail($id);
    $uuid = Str::uuid()->toString();
    $event = 'Clássicos da Disney'; // já que só tem um evento

    $logoPath = public_path('logo.png');

    // Carrega o logo
    $original = imagecreatefrompng($logoPath);
    $width = imagesx($original);
    $height = imagesy($original);

    // Novo diâmetro (logo + borda maior)
    $padding = 30; // aumenta o raio do círculo
    $newDiameter = max($width, $height) + ($padding * 2);

    // Cria imagem com fundo transparente
    $circleImg = imagecreatetruecolor($newDiameter, $newDiameter);
    imagesavealpha($circleImg, true);
    $transparent = imagecolorallocatealpha($circleImg, 0, 0, 0, 127);
    imagefill($circleImg, 0, 0, $transparent);

    // Desenha círculo branco maior
    $white = imagecolorallocate($circleImg, 255, 255, 255);
    imagefilledellipse($circleImg, $newDiameter / 2, $newDiameter / 2, $newDiameter, $newDiameter, $white);

    // Coloca o logo no centro do círculo
    $dstX = ($newDiameter - $width) / 2;
    $dstY = ($newDiameter - $height) / 2;
    imagecopy($circleImg, $original, $dstX, $dstY, 0, 0, $width, $height);

    // Salva temporariamente
    $borderedPath = storage_path('app/public/logo_circle.png');
    imagepng($circleImg, $borderedPath);

    // Libera memória
    imagedestroy($original);
    imagedestroy($circleImg);

    // Gera QR Code com círculo branco e logo
    $qrCode = base64_encode(
      QrCode::format('png')
        ->size(300)
        ->merge($borderedPath, 0.3, true) // pode aumentar para 0.4 se quiser maior
        ->errorCorrection('H')
        ->generate($uuid)
    );



    return view('ticket')->with(compact('uuid', 'event', 'qrCode'));
  }

  public function teste()
  {
    return view('teste');
  }
}
