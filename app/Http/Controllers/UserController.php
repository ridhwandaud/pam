<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$currentUser = app('Illuminate\Contracts\Auth\Guard')->user();

    	$posts = \App\Post::orderBy('created_at','desc')->get();

    	return view('user.index',compact('currentUser','posts'));
    }

    public function postToFeed(Request $request)
	{	

		$this->validate($request, [
	        'content' => 'required',
	    ]);


	  	$user = Auth::user();

	  	$message = $user->messages()->create([
	    	'content' => $request->input('content')
	  	]);

	  	return back();
	}

	public function getSettings()
	{
		$user = Auth::user();

		return view('user.settings',compact('user'));
	}

	public function postSettings(Request $request)
	{
		
		$user = Auth::user();

		$user->address = $request->get('address');

		$user->name = $request->get('name');

		$user->mobile_number = $request->get('mobile_number');

		$user->home_number = $request->get('home_number');

		$user->job_position = $request->get('job_position');

		$user->info = $request->get('info');

		$user->save();

		return back();
	}

	public function postAvatar()
	{
		$user = Auth::user();

		$img_path = request()->file('avatar')->storeAs('/public','asd');

		return $img_path;

		$user->img_path = $img_path;

		$user->save();

		return back();
	}
}
