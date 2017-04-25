@extends('layouts.master')
                          
@section('content')
 <p>Home Page</p>

	<?php
	 if(Auth::check()){
	 $user = Auth::user();
	 echo "<p>Hello, {$user->name}</p>";
	 }
	?>

	<a href="{{url('/restaurants')}}">View some Restaurants</a>
@endsection

@section('sidecontent')
	<br></br>
    <a href="{{ url('/myprofile') }}">My Profile</a>
@endsection