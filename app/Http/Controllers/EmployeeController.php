<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$currentUser = app('Illuminate\Contracts\Auth\Guard')->user();

    	$users = \App\User::all();

    	return view('employee.index',compact('currentUser','users'));
    }
}
