@extends('layouts.base')

@section('content')
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route ('createEvent')}}" enctype="multipart/form-data">
       @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="image">Foto</label>
          <input type="file" id="image" name="image" class="form-control" accept="image/jpg , image/gif, image/jpeg" >
        </div>
        <div class="form-group">
          <label for="event_start">Begin datum</label>
          <input type="date" id="event_start" name="event_start" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="event_end">Ein datum</label>
          <input type="date" id="event_end" name="event_end" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="available_tickets">Maximale Tickets</label>
          <input type="number" id="available_tickets" name="available_tickets" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="location">Plaats</label>
          <input type="text" id="location" name="location" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="price">prijs</label>
          <input type="number" id="price" name="price" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="preorder_price">Preoder prijs</label>
          <input type="number" id="preorder_price" name="preorder_price" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="description">Beschrijving</label>
          <textarea id="description" name="description" class="form-control" rows="4"></textarea>
        </div>
        
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
    </div>
  </div>
</div>  

@endsection