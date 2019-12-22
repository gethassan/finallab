<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
 use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
 use Validator;
  use Newsletter;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\order;
class usercont extends Controller
{
    //
    public function register(Request $request)
    {
    	  
    		user::create($request->all());
    		return redirect("index");
    	
       
    }
    public function order(Request $request)
    {
    	order::create($request->all());
    	return redirect("index");
    }

    public function billview()
    {
    	$data=order::all();
    	return view("bill",compact("data"));
    }


    // The blog post is valid...

}
