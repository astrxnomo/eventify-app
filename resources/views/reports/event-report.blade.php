<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte del Evento</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .header { text-align: center; margin-bottom: 20px; }
        .details { margin-bottom: 20px; }
        .details p { margin: 20px 0; }
        .title { font-size: 24px; font-weight: bold; }
        .subtitle { font-size: 18px; }
        .section-title { font-size: 20px; margin-top: 20px; font-weight: bold; }
        .event-image { margin-top: 10px; }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="title">{{ $event->name }}</h1>
        @if($event->img_url)
            <div class="event-image">
                <img src="{{ public_path('storage/' . $event->img_url) }}" alt="Imagen del Evento" style="max-width: 100%; height: auto;">
            </div>
        @endif
        <p class="subtitle"><strong>Fecha de Inicio:</strong> {{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y H:i') }}</p>
        <p class="subtitle"><strong>Fecha de Finalización:</strong> {{ \Carbon\Carbon::parse($event->end_date)->format('d/m/Y H:i') }}</p>
    </div>
    <div class="details">
        <h2 class="section-title">Detalles del Evento</h2>
        <p><strong>Ubicación:</strong> {{ $event->location->address }}, {{ $event->location->city }}, {{ $event->location->region }}, {{ $event->location->country }}</p>
        <p><strong>Descripción:</strong> {{ $event->description }}</p>
        <p><strong>Capacidad:</strong> {{ $event->capacity }}</p>
        <p><strong>Precio:</strong> ${{ number_format($event->price, 2) }}</p>
    </div>
</body>
</html>

