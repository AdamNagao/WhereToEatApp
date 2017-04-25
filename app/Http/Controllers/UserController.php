<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
Use App\User;

class UserController extends Controller
{
    public function index(){
    	$users = User::all();
        
        return view('/userlist',compact('users'));
    }

    public function update(Request $request,$id){
        
    	$user=User::where('id',$id)->first();

    	if($user->admin == 1){
    		$user->admin = 0;
    		$user->save();
    	} else {
    		$user->admin = 1;
    		$user->save();
    	}
  
       
    	return redirect('/userlist');

    }

     public function changepassword(Request $request,$id){
        
        $user=User::where('id',$id)->first();

        $request->user()->fill([
            'password' => Hash::make($request->input('password'))
        ])->save();

        return redirect('/myprofile');

    }

}
