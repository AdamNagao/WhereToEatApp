@extends('layouts.master')
                          
@section('content')

	<?php
	 if(Auth::check()){
	 $user = Auth::user();
	 echo "<p>Hello, {$user->name}, you're an admin</p>";
	 echo "Here is the User List";
	 }
	?>

	@foreach($users as $user)
		<div class="card">
      		<div class="card-block">
              <h4 class="card-title">
                  {{$user->name}}
              </h4>
      		</div>
      		<div class="card-block">
        		<p>{{$user->email}}</p>
        		<?php
        			$user_id = $user->id;
        			if($user->admin==1){
        				echo "Admin Permissions";
        			} else {
        				echo "Reviewer Permissions";
        			}
        		?>

        		<a href='http://localhost/COMP484-Project-4/public/userlist/{{$user_id}}'>Change permissions</a>
      		</div>
    	</div>
  @endforeach
@endsection

@section('sidecontent')
	<br></br>
	<a href="{{ url('/restaurants/create') }}">Add a Restaurant</a>
    <br></br>
	<a href="{{ url('/') }}">Home</a>
	<br></br>
    <a href="{{ url('/myprofile') }}">My Profile</a>
@endsection