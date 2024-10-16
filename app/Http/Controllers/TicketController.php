<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function store(Request $request, $eventId) {
        $event = Event::findOrFail($eventId);

        if ($event->available_tickets < $request->quantity) {
            return back()->withErrors(['message' => 'Not enough tickets available.']);
        }

        Ticket::create([
            'user_id' => auth()->id(),
            'event_id' => $eventId,
            'quantity' => $request->quantity,
        ]);

        $event->available_tickets -= $request->quantity;
        $event->save();

        return redirect()->route('user.tickets')->with('success', 'Tickets purchased successfully.');
    }

    public function index() {
        $tickets = Ticket::where('user_id', auth()->id())->get();
        return view('user.tickets.index', compact('tickets'));
    }
}
