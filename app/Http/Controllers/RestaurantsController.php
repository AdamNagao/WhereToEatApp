<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Restaurant;

class RestaurantsController extends Controller
{
    public function index(){
    	$restaurants = Restaurant::all();
    	return view('restaurants.index',compact('restaurants'));
    }

    public function adminindex(){
        $restaurants = Restaurant::all();
        return view('restaurants.adminindex',compact('restaurants'));
    }
    public function create(){
    	return view('restaurants.create');
    }

    public function store(Request $request){
    	$data=$request->all();
    	Restaurant::create($data);
    	return redirect("/restaurants");
    }

    public function edit($id){
    	$restaurant= Restaurant::where('id',$id)->first();

    	return view('restaurants.edit')->with('restaurant',$restaurant);
    }

    public function update(Request $request,$id){
        
        $restaurant=Restaurant::where('id',$id)->first();

        $restaurant->update($request->all());
        
        return redirect("/restaurants");

    }

    public function logout() {
   		// logout and then redirect to the login page
   		Auth::logout();
   		return back();
	}

}
