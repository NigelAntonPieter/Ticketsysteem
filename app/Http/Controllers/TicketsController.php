<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketsController extends Controller
{
    public function viewtemplate(){
        return view('ticket');
    }

    public function createTickets(Request $request){
        $request;
        $newTicket = new Ticket();
        $newTicket->owner = $request->input('owner');
        $newTicket->qr = $request->input('qr');
        $newTicket->event = $request->input('event');
        $newTicket->save();

        return redirect() ->route('home');
    }

    public function editTicket(Request $request, $Ticketid)
    {
        $ticket = Ticket::findorFail($Ticketid);
        $ticket->qr=$request->input ('qr');
        $ticket->save();
    }

    public function viewTicket($Ticketid)
    {
        $ticket = Ticket::findorfail($Ticketid);

        return view('ticket',[
            'ticket' => $ticket
        ]);
    }

    
    public function delete($Ticketid)
    {
        $ticket = Ticket::findorFail($Ticketid);
        $ticket->delete();

        return redirect('admin');
    }
}
