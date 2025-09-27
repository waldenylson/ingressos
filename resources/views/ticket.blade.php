<!-- resources/views/tickets/ticket.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingresso</title>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #2b1e4a;
      display: flex;
      justify-content: center;
      padding: 20px;
    }

    .ticket {
      width: 320px;
      background: linear-gradient(to bottom, #e73c7e, #6c5ce7);
      color: white;
      border-radius: 20px;
      overflow: hidden;
      padding: 20px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    .title {
      font-family: 'Great Vibes', cursive;
      font-size: 2.5rem;
      margin: 0 0 15px 0;
      font-weight: 400;
      text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
    }

    .ballet-name {
      font-family: 'Great Vibes', cursive;
      font-size: 1.5rem;
      margin: 0 0 15px 0;
      font-weight: 400;
      text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
    }

    .qr-code {
      background: white;
      display: inline-block;
      padding: 10px;
      border-radius: 10px;
    }

    .ticket-code {
      font-size: 0.8em;
      margin-top: 5px;
      color: #f1f1f1;
    }

    .divider {
      margin: 20px 0;
      border-top: 1px dashed rgba(255, 255, 255, 0.6);
    }

    .info {
      text-align: left;
      font-size: 0.9em;
    }

    .info-item {
      display: flex;
      align-items: center;
      margin: 8px 0;
    }

    .info-item img {
      width: 20px;
      margin-right: 8px;
    }

    .rating {
      margin-top: 20px;
      font-size: 1.2em;
    }
  </style>
</head>

<body>
  <div class="ticket">
    <div class="title">{{ $event }}</div>

    <div class="qr-code">
      <img src="data:image/png;base64,{{ $qrCode }}" alt="QR Code" width="200">
    </div>
    <div class="ticket-code">{{ $uuid }}</div>

    <div class="divider"></div>

    <div class="info">
      <div class="info-item">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/calendar.png" alt="Data">
        <span>15/11/2025</span>
      </div>
      <div class="info-item">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/marker.png" alt="Local">
        <span>Teatro Barreto Júnior</span>
      </div>
    </div>

    <div class="rating">
      <span>⭐⭐⭐⭐⭐</span><br />
      <span class="ballet-name">Le Corsaire Ballet®</span>
    </div>
  </div>
</body>

</html>