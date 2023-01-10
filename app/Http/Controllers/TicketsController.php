<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
x

class TicketsController extends Controller
{
    public function viewtemplate(){
        return view('ticket');
    }

    public function viewbuy(){
        return view ('buy');
    }

    

    public function createTickets(Request $request, $event_id){
        $request;
        $newTicket = new Ticket();
        $newTicket->owner = $request->input('owner');
        $newTicket->qr_hash = Str ::
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
