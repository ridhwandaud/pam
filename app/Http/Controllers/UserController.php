<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$currentUser = app('Illuminate\Contracts\Auth\Guard')->user();

    	return view('user.index',compact('currentUser'));
    }
}
