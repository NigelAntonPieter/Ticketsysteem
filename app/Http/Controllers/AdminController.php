<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function viewEvent()
    {
        return view('event');
    }
    
    // public function admin(Request $request){
    //     $request;
    //     $newEvent = new Event();
    //     $newEvent->name = $request->input('name');
    //     $newEvent->photo = $request->input('photo');
    //     $newEvent->event_start = $request->input('event_start');
    //     $newEvent->event_end = $request->input('event_end');
    //     $newEvent->available_tickets = $request->input('available_tickets');
    //     $newEvent->location = $request->input('location');
    //     $newEvent->price = $request->input('price');
    //     $newEvent->preorder_price = $request->input('preorder_price');
    //     $newEvent->description = $request->input('description');
    //     $newEvent->save();


    //     return redirect() ->route('home');
    

    public function admin(){
        $event = Event::all();
        
        return view('admin' , [
            'events' =>$event
        ]);
}
}


