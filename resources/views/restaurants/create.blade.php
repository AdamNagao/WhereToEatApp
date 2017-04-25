@extends('layouts.master')
                          
@section('content')

<h1>Add a Restaurant</h1>

<form action='http://localhost/COMP484-Project-4/public/restaurants' method="POST">
{{csrf_field()}}
  <div class="form-group">
    <label for="name">Restaurant Name</label>
    <input type="text" name="name">
    <br><br\>
    <label for="description">Restaurant Description</label>
    <input type="text" name="description">
    <br><br\>
    <label for="streetaddress">Street Address</label>
    <input type="text" name="streetaddress">
    <br><br\>
    <label for="city">City</label>
    <input type="text" name="city">
    <br><br\>
    <label for="state">State</label>
    <input type="text" name="state">
    <br><br\>
    <label for="website">Website</label>
    <input type="text" name="website">
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
  </input>
</form>
@endsection