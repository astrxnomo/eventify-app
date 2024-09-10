<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte del Ticket</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .header { text-align: center; margin-bottom: 20px; }
        .details { margin-bottom: 20px; }
        .details p { margin: 5px 0; }
        .title { font-size: 24px; font-weight: bold; }
        .subtitle { font-size: 18px; }
        .section-title { font-size: 20px; margin-top: 20px; font-weight: bold; }
        .separator { margin-top: 20px; border-top: 1px solid #000; }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="title">Ticket para {{ $event->name }}</h1>
        <p class="subtitle">Fecha de Inicio: {{ $event->start_date->format('d-m-Y H:i:s') }}</p>
        <p class="subtitle">Fecha de Finalización: {{ $event->end_date->format('d-m-Y H:i:s') }}</p>
    </div>
    <div class="details">
        <h2 class="section-title">Detalles del Ticket</h2>
        <p><strong>Ubicación:</strong> {{ $event->location->address }}, {{ $event->location->city }}, {{ $event->location->region }}, {{ $event->location->country }}</p>
        <p class="separator"></p>
        <p><strong>Precio por Ticket:</strong> ${{ number_format($event->price, 2) }}</p>
        <p class="separator"></p>
        <p><strong>Cantidad Comprada:</strong> {{ $ticket->quantity }}</p>
        <p><strong>Total:</strong> ${{ number_format($total, 2) }}</p>
        <p class="separator"></p>
        <p><strong>Comprador:</strong> {{ $user->name }} ({{ $user->email }})</p>
    </div>
</body>
</html>
