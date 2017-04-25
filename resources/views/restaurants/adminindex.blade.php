@extends('layouts.master')
                          
@section('content')
  @foreach($restaurants as $restaurant)
    <div class="card">
      <div class="card-block">
          <a href="#">
              <h4 class="card-title">
                  {{$restaurant->name}}
              </h4>
          </a>
      </div>
      <div class="card-block">
        <p>
          Description: {{$restaurant->description}}
        </p>
        <p>
          Street Address: {{$restaurant->streetaddress}}
        </p>
        <p>
          City: {{$restaurant->city}}
        </p>
        <p>
          State: {{$restaurant->state}}
        </p>
        <p>
          Website: {{$restaurant->website}}
        </p>
        <a class="card-link" href='http://localhost/COMP484-Project-4/public/restaurants/{{$restaurant->id}}'>
          Edit Restaurant
        </a>      
        <?php
        if(Auth::check()){
        $user = Auth::user();
        echo "<a class='card-link' href='http://localhost/COMP484-Project-4/public/restaurants/reviewscreen/{$restaurant->id}'>Review Restaurant</a>";
        }
        ?>
    
      </div>
    </div>
  @endforeach
@endsection

@section('sidecontent')
  <a class="card-link" href='http://localhost/COMP484-Project-4/public/restaurants/create'>
    Add a Restaurant
  </a> 
    <a href='http://localhost/COMP484-Project-4/public/userlist'>
    View the User List
  </a> 
@endsection

