@extends('layouts.master')
                          
@section('content')

<h1>Review a Restaurant</h1>

<form action='http://localhost/COMP484-Project-4/public/restaurants/createreview' method="POST">
{{csrf_field()}}
  <div class="form-group">
    <label for="tagline">Put your tagline</label>
    <input type="text" name="tagline">
    <br><br\>
    <label for="description">Review Description</label>
    <input type="description" name="description">
    <br><br\>
    <label for="rating">Give it a rating</label>
    <input type="text" name="rating">
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
  </input>
</form>
@endsection