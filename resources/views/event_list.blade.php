@extends('layouts.base')

@section('content')
   
    <table class="table">
        <thead>
            <th>Events</th>
        </thead>
        <tbody>
            <div class="row row-cols-4">
                @foreach ($events as $event)
                
                    <div class="card m-10" style="width: 18rem;">
                        <img src="{{$event->photo}}" alt="foto" class="event_foto">
                        <div class="card-body">
                            <h5 class="card-title">{{$event->name}}</h5>
                            <p class="card-text">{{$event->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{date_format(date_create($event->event_start), "d/M/Y")}} <T>
                            <M></M> {{date_format(date_create($event->event_end), "d/M/Y")}}</li>
                            <li class="list-group-item">{{$event->available_tickets}}</li>
                            <li class="list-group-item">{{$event->location}}</li>
                            <li class="list-group-item">€{{$event->price}}</li>
                            
                        </ul>
                        <div class="card-body">
                        <form action="{{ Route('createTicket') }}" method="POST">
                            @csrf
                            <input type="hidden" id="event" name="event" value="{{$event->id}}">
                            <button type="submit" class="btn btn-warning">Koop u ticket hier</button>

                        </form>
                        </div>
                    </div>
                    @endforeach
            </div>
        </tbody>
    </table>



@endsection
