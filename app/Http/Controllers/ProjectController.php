<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function postProjects(Request $request){

    	$input = $request->all();

    	$user = Auth::user();

	  	$project = $user->projects()->create([
	    	'project_name' => $input['project_name'],
	    	'project_type' => $input['project_type'],
	    	'project_location' => $input['project_location'],
	    	'project_pic' => $input['project_pic']
	  	]);

	  	return back();

    }

}
