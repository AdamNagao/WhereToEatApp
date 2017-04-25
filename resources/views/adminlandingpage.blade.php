@extends('layouts.master')
                          
@section('content')
 <p>Admin Home</p>

	<?php
	 if(Auth::check()){
	 $user = Auth::user();
	 echo "<p>Hello, {$user->name}, you're an admin</p>";
	 }
	?>

	<a href="{{ url('/restaurants') }}">View some Restaurants</a>
@endsection

@section('sidecontent')
	<br></br>
	<a href="{{ url('/restaurants/create') }}">Add a Restaurant</a>
	<br></br>
	<a href='http://localhost/COMP484-Project-4/public/userlist'>
    	View the User List
  	</a> 
  	<br></br>
    <a href="{{ url('/myprofile') }}">My Profile</a>
@endsection