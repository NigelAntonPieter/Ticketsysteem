@extends('layouts.base')

@section('content')
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
   <a class = "bi bi-plus" href="/event" id="button">Maak nieuwe Event aan</a>

<table class="table">
        <thead>
            <th>Events</th>
            <th>Start datum</th>
            <th>Eind datum</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    
                    
                    <td>{{$event->name}}</td>
                    <td>{{$event->event_start}}</td>
                    <td>{{$event->event_end}}</td>
                    <td>
                        <h3><a class ="bi-trash" id="delete" href={{route('delete_event', $event->id)}}>delete event</a></h3>
                        <h3><a class ="bi bi-pencil-square" id="change" href={{route('edit_event', $event->id)}}>change event</a></h3>
                    </td>
                    
                   
                </tr>
                 
                
            @endforeach

        </tbody>
    </table>

@endsection
