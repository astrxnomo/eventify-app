<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\location;
use App\Models\statu;
use App\Models\User;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Permite mostrar los eventos en la vista explore
        $events=Event::all();
        
        return view('explore')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Va a la vista crear_eventos
        $status=statu::all();
        $locations=location::all();
        $categories=category::all();
        return view('dashboard.event-create',compact('status','locations','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Toma los datos registrados en la vista para almacenarlos en la BD
        
        
        $event=new Event();
        $event->user_id =$request->user()->id;
        $event->statu_id=$request->input('statu_id');
        $event->location_id=$request->input('location_id');
        $event->category_id=$request->input('category_id');
        $event->name=$request->input('name');
        $event->description=$request->input('descri');
        $event->img_url=$request->input('url');
        $event->capacity=$request->input('capacity');
        $event->price=$request->input('price');
        $event->start_date=$request->input('inicio');
        $event->end_date=$request->input('fin');
        $event->create_date=now();
        $event->save();
        return redirect()->route('dashboard.events');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //Muestra los detalles de un evento
        
        return view('dashboard.event-detail',['event'=>$event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Se utiliza para consultar los datos a editar
        
        $event=Event::find($id);
        $status=statu::all();
        $locations=location::all();
        $categories=category::all();
        //return view('dashboard.event-edit')->with('event',$event);
        return view('dashboard.event-edit', compact('event','status','locations','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Se hace el update en la BD
        $event=Event::find($id);
        $event->user_id =$request->user()->id;
        $event->statu_id=$request->input('statu_id');
        $event->location_id=$request->input('location_id');
        $event->category_id=$request->input('category_id');
        $event->name=$request->input('name');
        $event->description=$request->input('descri');
        $event->img_url=$request->input('url');
        $event->capacity=$request->input('capacity');
        $event->price=$request->input('price');
        $event->start_date=$request->input('inicio');
        $event->end_date=$request->input('fin');
        $event->save();
        return redirect()->route('dashboard.events');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Para eliminar un resgistro en base a su id
        $event=Event::find($id);
        $event->delete();
        //return redirect()->route('dashboard.events');
        //return view('dashboard.events', compact('event'));
        return to_route('dashboard.events')->with('status','event deleted');
    }

    public function myEvents()
    {
        //funcion para vincular a los usuarios con sus respectivos eventos creados
        // Obtener el usuario autenticado
        $user = auth()->user();
        // Obtener los eventos del usuario
        $events = $user->events;
        

        // Retornar la vista con los eventos
        return view('dashboard.events', compact('events'));
    }
}
