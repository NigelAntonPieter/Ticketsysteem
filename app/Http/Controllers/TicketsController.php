<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class TicketsController extends Controller
{
    public function viewtemplate(){
        $event = Event::all();
        
        return view('ticket',[
            'events' => $event
        ]);
    }

    public function viewTicket()
    {
        $tickets = Ticket::all();
        $event = Event::all();

        return view('view-ticket',[
            'tickets' => $tickets,
            'events' => $event
        ]);
    }

    public function viewbuy(){
        return view ('buy');
    }

    

    public function createTickets(Request $request){

        $tickets = Ticket::all();
        $request;
        $newTicket = new Ticket();
        $newTicket->user_id = Auth::user()->id;
        $newTicket->qr_hash = Str::random(50);
        $newTicket->event_id = $request->input('event');
        $newTicket->save();

        return redirect('view-ticket');
    }

    public function editTicket(Request $request, $Ticketid)
    {
        $ticket = Ticket::findorFail($Ticketid);
       
        $ticket->save();
    }

   

    
    public function delete($Ticketid)
    {
        $ticket = Ticket::findorFail($Ticketid);
        $ticket->delete();

        return redirect('view-ticket');
    }
}
