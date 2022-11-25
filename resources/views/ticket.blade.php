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
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route ('createTicket')}}">
       @csrf
        <div class="form-group">
          <label for="owner">Eigenaar</label>
          <input type="text" id="owner" name="owner" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="qr">QR code</label>
          <input type="text" id="qr" name="qr" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="event">Evenement</label>
          <input type="text" id="event" name="event" class="form-control" required="">
        </div>
       
        
        
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
    </div>
  </div>
</div>  

@endsection