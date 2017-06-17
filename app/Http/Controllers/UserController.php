<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$currentUser = app('Illuminate\Contracts\Auth\Guard')->user();

    	$posts = \App\Post::all();

    	return view('user.index',compact('currentUser','posts'));
    }

    public function postToFeed(Request $request)
	{	
	  $user = Auth::user();

	  return $user;

	  $message = $user->messages()->create([
	    'content' => $request->input('content')
	  ]);

	  return ['status' => 'Message Sent!'];
	}
}
