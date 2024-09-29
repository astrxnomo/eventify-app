<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use App\Models\Location;
use App\Models\Status;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;


class EventApiController extends Controller
{
    // Listar todos los eventos
    public function index()
    {
        // Recuperamos los eventos con las relaciones necesarias
        $events = Event::with(['category', 'location', 'user', 'status'])->get();
        return response()->json($events, 200);
    }

    // Mostrar un evento por ID
    public function show($id)
    {
        $event = Event::with(['category', 'location', 'user', 'status'])->find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        return response()->json($event, 200);
    }

    // Crear un nuevo evento
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'capacity' => 'required|integer',
            'price' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'category_id' => 'required|exists:categories,id',
            'location_id' => 'required|exists:locations,id',
            'status_id' => 'required|exists:statuses,id',
            'user_id' => 'nullable|exists:users,id',
            'img_url' => 'nullable|string',
        ]);

        // Crear evento
        $event = Event::create($validatedData);

        return response()->json($event, 201); // 201 Created
    }

    // Actualizar un evento existente
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'capacity' => 'sometimes|required|integer',
            'price' => 'sometimes|required|integer',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'sometimes|required|date|after_or_equal:start_date',
            'category_id' => 'sometimes|required|exists:categories,id',
            'location_id' => 'sometimes|required|exists:locations,id',
            'status_id' => 'sometimes|required|exists:statuses,id',
            'user_id' => 'nullable|exists:users,id',
            'img_url' => 'nullable|string',
        ]);

        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        // Actualizar el evento con los datos validados
        $event->update($validatedData);

        return response()->json($event, 200); // 200 OK
    }

    // Eliminar un evento
    public function destroy($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->delete();

        return response()->json(['message' => 'Event deleted'], 200);
    }
}
