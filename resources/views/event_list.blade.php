@extends('layouts.base')

@section('content')
   
    <table class="table">
        <thead>
            <th>Events</th>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    
                    
                    <td>
                        <H1>{{$event->name}}</H1>
                        <img src="{{$event->photo}}" alt="foto">
                        <h2>{{$event->event_start}}</h2>
                        <h2>{{$event->event_end}}</h2>
                        <h2>{{$event->available_tickets}}</h2>
                        <h2>{{$event->location}}</h2>
                        <h2>{{$event->price}}</h2>
                        <h2>{{$event->description}}</h2>

                        <a class = "bi bi-plus" href="/template" id="button2">ticket</a>

                    </td>
                    
                   
                </tr>
                 
                
            @endforeach

        </tbody>
    </table>



@endsection
