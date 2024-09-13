<?php
// app/Http/Controllers/ChartDataController.php
namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartDataController extends Controller
{
    public function getData()
    {
        $events = Event::count();
        $users = User::count();
        $tickets = Ticket::count();

        $eventosConMasAsistentes = Event::select('name', 'attendees')
            ->orderBy('attendees', 'desc')
            ->take(5)
            ->get();

        $eventosPorCategoria = Event::select('categories.name', DB::raw('count(events.id) as total'))
            ->join('categories', 'events.category_id', '=', 'categories.id')
            ->groupBy('categories.name')
            ->orderBy('total', 'desc')
            ->get();

        $data = [
            'resumen' => [
                'x' => ['Eventos', 'Usuarios', 'Tickets'],
                'y' => [$events, $users, $tickets]
            ],
            'eventosConMasAsistentes' => $eventosConMasAsistentes,
            'eventosPorCategoria' => $eventosPorCategoria
        ];

        return response()->json($data);
    }
}
