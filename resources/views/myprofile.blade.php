@extends('layouts.master')
                          
@section('content')
	<h3>Your Profile Page</h3>

	<?php
	 if(Auth::check()){
	 	$user = Auth::user();
	 	echo "<p>Hello, {$user->name}</p>";

	 	if($user->admin == 1){
	 		echo "<p>Permissions: You have Admin permissions!</p>";
	 	} else {
	 		echo "<p>Permissions: You have Reviewer permissions!</p>";
	 	}

	 	echo "<p>Email: $user->email</p>";
	 	echo "<p>Account created at: $user->created_at</p>";
	 	echo "<p>Account last updated at: $user->updated_at</p>";
	 }
	?>


@endsection
@section('sidecontent')
	<br></br>
    <a href="{{ url('/') }}">Home</a>
   	<br></br>
    <a href="{{ url('passwords/reset') }}">Reset Password</a>
@endsection