<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\Location;
use App\Models\statu;
use App\Models\Status;
use App\Models\User;

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
        //funcion para vincular a los usuarios con sus respectivos eventos creados
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
        //Toma los datos registrados en la vista para almacenarlos en la BD

        $location = new Location;
        $location->country = $request->eventCountry;
        $location->city = $request->eventCity;
        $location->region = $request->eventRegion;
        $location->address = $request->eventAddress;


        $event = new Event;
        $event->name = $request->eventName;
        $event->category()->associate($request->input('eventCategory'));
        $event->start_date = $request->eventStartDate;
        $event->end_date = $request->eventEndDate;
        $event->description = $request->eventDescription;
        $event->capacity = $request->eventCapacity;
        $event->price = $request->eventPrice;
        $path = $request->file('eventImage')->store('images', 'public'); $event->img_url = $path;
        $event->user_id = auth()->id();

        if ($event->capacity > 0) {
            $event->status_id = 1;
        } else {
            $event->status_id = 2;
        }
        if ($request->hasFile('eventImage')) {
            $path = $request->file('eventImage')->store('events', 'public'); // Guarda la imagen en 'storage/app/public/events'
            $event->img_url = $path; // Guarda el nombre del archivo en la base de datos
        }

        $location->save();
        $event->location_id = $location->id;

        $event->save();

        return redirect()->route('dashboard.events.index')->with('success', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('event', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Se utiliza para consultar los datos a editar
        
        $event=Event::find($id);
        
        $status=Status::all();
        $locations=location::all();
        $categories=category::all();
        $location = Location::find($event->location_id);
        //return view('dashboard.event-edit')->with('event',$event);
        //return view('dashboard.events.index', compact('event','status','locations','categories'));
        return view('dashboard.events.event-edit',compact('event','status','locations','categories','location'));;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Se hace el update en la BD
        //Se hace el update en la BD
        $event=Event::find($id);
        $event->user_id =$request->user()->id;
        $event->status_id=$request->input("eventStatus");
        $event->category_id=$request->input("eventCategory");
        $event->name=$request->input("eventName");
        $event->description=$request->input("eventDescription");
        $event->img_url=$request->input("eventImage");
        $event->capacity=$request->input("eventCapacity");
        $event->price=$request->input("eventPrice");
        $event->start_date=$request->input("eventStartDate");
        $event->end_date=$request->input("eventEndDate");
        
         // Find or create the associated location
        $location = Location::find($event->location_id);

        if (!$location) {
            $location = new Location();
        }

        if ($request->hasFile('eventImage')) {
            $path = $request->file('eventImage')->store('events', 'public'); // Guarda la imagen en 'storage/app/public/events'
            $event->img_url = $path; // Guarda el nombre del archivo en la base de datos
        }

        // Update location fields
        $location->country = $request->input("eventCountry");
        $location->region = $request->input("eventRegion");
        $location->city = $request->input("eventCity");
        $location->address = $request->input("eventAddress");

        // Save the location
        $location->save();

        // Associate the updated location with the event
        $event->location_id = $location->id;

        // Save the event
        $event->save();





        
        return redirect()->route('dashboard.events.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        //$location = Location::findOrFail($event->location_id);

        //$event->delete();
        //$location->delete();

        //return redirect()->route('dashboard.events.index')->with('success', 'Event deleted successfully');

        $event->delete();

        return redirect()->route('dashboard.events.index');
    }

}
