<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
class ReviewsController extends Controller
{
    public function index($id){
    	$reviews = Review::where('restaurant_id',$id)->get();

        if(!empty($reviews)){
            return view('restaurants.reviewindex',compact('reviews'));
        } else {
            return view('restaurants.createreview');
        }
        

    }
    
    public function create(){
    	return view('restaurants.createreview');
    }

    public function store(Request $request){
    	$data=$request->all();

    	Review::create($data);

    	return redirect('/restaurants/reviewscreen/{restaurant_id}');
    }
}
