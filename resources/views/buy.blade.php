@extends('layouts.base')

@section('content')
<table class="table">
        <thead>
            <th>Ticket van evenement</th>
        </thead>
        <tbody>
            <div class="row row-cols-4">
                @foreach ($events as $event)
                
                    <div class="card m-10" style="width: 18rem;">
                        <img src="{{$event->photo}}" alt="foto" class="event_foto">
                        <div class="card-body">
                            <h5 class="card-title">{{$event->name}}</h5>
                            
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item">{{$event->available_tickets}}</li>
                            
                            <li class="list-group-item">€{{$event->price}}</li>
                            
                        </ul>
                        <div class="card-body">
                        <a class = "bi bi-plus" href="/buy_tickets" id="button2">ticket</a>
                        </div>
                    </div>
                    @endforeach
            </div>
        </tbody>
    </table>

@endsection