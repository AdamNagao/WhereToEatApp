@extends('layouts.master')
                          
@section('content')

<h3>Reviews for Restaurant</h3>
@foreach($reviews as $review)
 <div class="card">
      <div class="card-block">

              <h4 class="card-title">
                  {{$review->tagline}}
              </h4>
              <p>Rating:{{$review->rating}}</p>
      </div>
      <div class="card-block">
        <p>{{$review->description}}</p>
    
      </div>
    </div>
  @endforeach
@endsection

@section('sidecontent')
<p>

@if(Auth::check())
  <br></br>
   <a class='card-link' href='http://localhost/COMP484-Project-4/public/restaurants/createreview/{{$review->id}}'>Add Review</a>
@endif
  <br></br>
  <a class="card-link" href='http://localhost/COMP484-Project-4/public/restaurants'>View Restaurants</a>
  <br></br>
  <a class="card-link" href='http://localhost/COMP484-Project-4/public/'>Home</a>
</p>
@endsection
