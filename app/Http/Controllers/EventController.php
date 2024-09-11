<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Location;
use App\Models\Status;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Barryvdh\DomPDF\Facade\Pdf;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showHome()
    {
        $events = Event::orderBy('created_at', 'desc')->get();
        return view('home', compact('events'));
    }

    public function showMyEvents()
    {
        // Obtener el usuario autenticado
        $user = auth()->user();
        // Obtener los eventos del usuario
        $events = $user->events;

        // Retornar la vista con los eventos
        return view('dashboard.events.events-management', compact('events'));
    }

    public function showExplore()
    {
        $events = Event::orderBy('created_at', 'desc')->get();
        return view('explore', compact('events'));
    }

    public function create()
    {
        $categories = Category::all();
        $event = new Event;

        return view('dashboard.events.event-create', compact('event', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // Crear la ubicación y guardar los datos básicos
        $location = new Location;
        $location->country = $request->eventCountry;
        $location->city = $request->eventCity;
        $location->region = $request->eventRegion;
        $location->address = $request->eventAddress;

        // Obtener la dirección del evento
        $fullAddress = $location->address . ', ' . $location->city;

        // Inicializar el cliente HTTP de Guzzle
        $client = new Client();

        
        // Llamada a la API de Nominatim con el User-Agent
        $url = "https://nominatim.openstreetmap.org/search?q=" . urlencode($fullAddress) . "&format=json&limit=1";
        $response = $client->request('GET', $url, [
            'headers' => [
            'User-Agent' => 'eventify-app'  
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        if (!empty($data)) {
            $location->latitude = $data[0]['lat'];
            $location->longitude = $data[0]['lon'];
        } else {
            $location->latitude = null;
            $location->longitude = null;
        }
        

        // Guardar la ubicación para obtener el ID
        $location->save();

        // Crear el evento
        $event = new Event;
        $event->name = $request->eventName;
        $event->category()->associate($request->input('eventCategory'));
        $event->start_date = $request->eventStartDate;
        $event->end_date = $request->eventEndDate;
        $event->description = $request->eventDescription;
        $event->capacity = $request->eventCapacity;
        $event->price = $request->eventPrice;

        // Guardar la imagen
        if ($request->hasFile('eventImage')) {
            $path = $request->file('eventImage')->store('images', 'public');
            $event->img_url = $path;
        }

        $event->user_id = auth()->id();

        // Determinar el estado del evento
        if ($event->capacity > 0) {
            $event->status_id = 1; // Asignar estado de evento activo
        } else {
            $event->status_id = 2; // Asignar estado de evento sin cupo
        }

        // Asignar la ubicación al evento
        $event->location_id = $location->id;

        // Guardar el evento
        $event->save();

        return redirect()->route('events.index')->with('success', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        // Se construye la dirección completa para la geocodificación
        $address = "{$event->location->address}, {$event->location->city}, {$event->location->region}, {$event->location->country}";

        // Realizamos una solicitud HTTP a la API de Nominatim para obtener las coordenadas
        $coordinates = $this->getCoordinates($event->location->address, $event->location->city, $event->location->region, $event->location->country);

        // Pasan coordenadas a la vista
        return view('event', compact('event', 'coordinates'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::find($id);
        $status = Status::all();
        $locations = Location::all();
        $categories = Category::all();
        $location = Location::find($event->location_id);

        return view('dashboard.events.event-edit', compact('event', 'status', 'locations', 'categories', 'location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Se hace el update en la BD
        $event = Event::find($id);
        $event->user_id = $request->user()->id;
        $event->status_id = $request->input("eventStatus");
        $event->category_id = $request->input("eventCategory");
        $event->name = $request->input("eventName");
        $event->description = $request->input("eventDescription");
        $event->capacity = $request->input("eventCapacity");
        $event->price = $request->input("eventPrice");
        $event->start_date = $request->input("eventStartDate");
        $event->end_date = $request->input("eventEndDate");

        // Find or create the associated location
        $location = Location::find($event->location_id);

        if (!$location) {
            $location = new Location();
        }

        // Si se sube una nueva imagen, la actualiza
        if ($request->hasFile('eventImage')) {
            if ($event->img_url) {
                Storage::delete('public/' . $event->img_url);
            }
            $path = $request->file('eventImage')->store('events', 'public');
            $event->img_url = $path;
        }

        //Validar si la direccion ha cambiado
        $addressChanged=$location->address !== $request->input('eventAddress') || $location->city !== $request->input('eventCity');

        //Actualizar los campos de la ubicacion
        $location->country = $request->input('eventCountry');
        $location->city = $request->input('eventCity');
        $location->region = $request->input('eventRegion');
        $location->address = $request->input('eventAddress');

        //Si la direccion ha cambiado,hacer la geocodificacion
        if ($addressChanged) {
            $fullAddress = $location->address . ', ' . $location->city ;
            
            
            $client = new Client();
            $url = "https://nominatim.openstreetmap.org/search?q=" . urlencode($fullAddress) . "&format=json&limit=1";
            
            
            $response = $client->request('GET', $url, [
                'headers' => [
                    'User-Agent' => 'eventify-app'  
                ]
            ]);
                
            $data = json_decode($response->getBody(), true);
    
            if (!empty($data)) {
                $location->latitude = $data[0]['lat'];
                $location->longitude = $data[0]['lon'];
            } else {
                $location->latitude = null;
                $location->longitude = null;
            }
            
        }

        // Save the location
        $location->save();

        // Associate the updated location with the event
        $event->location_id = $location->id;

        // Save the event
        $event->save();

        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index');
    }

    /**
     * Get coordinates from address using Nominatim API.
     */
    private function getCoordinates($address, $city, $region, $country)
    {
        $fullAddress = "{$address}, {$city}, {$region}, {$country}";
        $response = Http::get('https://nominatim.openstreetmap.org/search', [
            'q' => $fullAddress,
            'format' => 'json',
            'limit' => 1
        ]);

        if ($response->successful() && count($response->json()) > 0) {
            $data = $response->json()[0];
            return [
                'lat' => $data['lat'],
                'lon' => $data['lon']
            ];
        }
        return null;
    }


    public function downloadEventReport(Event $event)
    {
        $data = compact('event');
        // Generacion el PDF
        $pdf = Pdf::loadView('reports.event-report', $data);
        // Descargar el PDF
        return $pdf->download('event-' . $event->id . '.pdf');
    }

}
