<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;

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

    public function editProjects($id){

    	$user = Auth::user();

    	$project = Project::where('id',$id)->firstOrFail();

    	if($user->id === $project->user_id)
    	{
    		return $project->user_id;
    	}
    	else{
    		return "error";
    	}

    	
    }

}
