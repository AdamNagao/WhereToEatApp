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


        <?php

          if(Auth::check()){
            $user = Auth::user();
            if($user->admin==1){
               echo "<a class='card-link' href='http://localhost/COMP484-Project-4/public/restaurants/{{$restaurant->id}}'>Edit Restaurant</a>";
            }
           }  

           $reviews = App\Review::first();

            if(!empty($reviews)){
              echo "<a class='card-link' href='http://localhost/COMP484-Project-4/public/restaurants/reviewscreen/{$restaurant->id}'>Restaurant Reviews</a>";
            } else {
              echo "No Reviews exist for this Restaurant";
              echo "<a class='card-link' href='http://localhost/COMP484-Project-4/public/restaurants/createreview/{restaurant_id}'> Create a Review</a>";
              
            }
        ?>




      </div>
    </div>
  @endforeach
@endsection

