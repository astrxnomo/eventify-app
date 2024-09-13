<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function showMyTickets()
    {
        $tickets = Ticket::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view ('dashboard.tickets.tickets-management', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
    */

    public function store(Request $request)
    {
        $event = Event::find($request->event_id);

        if ($event->capacity < $request->quantity || $event->capacity == 0) {
            return redirect()->back()->with('error', 'No hay tickets disponibles');
        }

        $ticket = new Ticket;
        $ticket->quantity = $request->quantity;
        $ticket->event_id = $request->event_id;
        $ticket->user_id = auth()->id();
        $ticket->save();

        $event->capacity -= $request->quantity;
        $event->attendees += $request->quantity;

        if ($event->capacity == 0) {
            $event->status_id = 2;
        }

        $event->save();

        return redirect()->back()->with('success', 'Ticket comprado con éxito! Gracias por tu compra');
    }
    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }


    /**
     * reporte PDF del ticket.
     */
    public function generateTicket($id)
    {
        $ticket = Ticket::with('event')->findOrFail($id);
        $event = $ticket->event;
        $user = $ticket->user;

        // Convertir las fechas a Carbon
        $event->start_date = Carbon::parse($event->start_date);
        $event->end_date = Carbon::parse($event->end_date);

        // Calcula el total
        $total = $ticket->quantity * $event->price;

        // Genera el PDF
        $pdf = PDF::loadView('reports.ticket-report', compact('ticket', 'event', 'user', 'total'));

        return $pdf->download('ticket.pdf');
    }

}
