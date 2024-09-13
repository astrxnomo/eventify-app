// public/js/charts.js

document.addEventListener('DOMContentLoaded', function() {
    fetch('/chart-data')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Gráfico de resumen
            var resumen = {
                x: data.resumen.x,
                y: data.resumen.y,
                type: 'bar'
            };

            var layoutResumen = {
                xaxis: { title: 'Categoría' },
                yaxis: { title: 'Cantidad' }
            };

            Plotly.newPlot('chartResumen', [resumen], layoutResumen);

            // Gráfico de eventos con más asistentes
            var eventosConMasAsistentes = {
                x: data.eventosConMasAsistentes.map(evento => evento.name),
                y: data.eventosConMasAsistentes.map(evento => evento.attendees),
                type: 'bar'
            };

            var layoutEventosConMasAsistentes = {
                xaxis: { title: 'Eventos' },
                yaxis: { title: 'Asistentes' }
            };

            Plotly.newPlot('chartEventosConMasAsistentes', [eventosConMasAsistentes], layoutEventosConMasAsistentes);

            // Gráfico de eventos por categoría
            var eventosPorCategoria = {
                x: data.eventosPorCategoria.map(evento => evento.name),
                y: data.eventosPorCategoria.map(evento => evento.total),
                type: 'bar'
            };

            var layoutEventosPorCategoria = {
                xaxis: { title: 'Categoría' },
                yaxis: { title: 'Total de eventos' }
            };

            Plotly.newPlot('chartEventosPorCategoria', [eventosPorCategoria], layoutEventosPorCategoria);
        })
        .catch(error => console.error('Error fetching chart data:', error));
});
