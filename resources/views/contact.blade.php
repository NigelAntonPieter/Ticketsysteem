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
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route ('createContacts')}}">
       @csrf
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" id="first_name" name="first_name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" id="last_name" name="last_name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="number">Number</label>
          <input type="text" id="number" name="number" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="description">Beschrijving</label>
          <input type="textbox" id="description" name="description" class="form-control" required="">
        </div>
        
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
    </div>
  </div>
</div>  

@endsection