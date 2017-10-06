<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Task;

class TaskController extends Controller
{
    public function postTasks(Request $request){

    	$input = $request->all();

    	$user = Auth::user();

	  	$task = $user->tasks()->create([
	    	'task_name' => $input['task_name'],
	    	'task_type' => $input['task_type'],
	    	'task_deadline' => $input['task_deadline'],
	    	'task_priority' => $input['task_priority']
	  	]);

	  	return back();

    }

    public function editTask($id){

    	$user = Auth::user();

        try{
            $project = Project::where('id',$id)->firstOrFail();

            if($user->id === $project->user_id)
            {
                return view('projects.edit',compact('project'));
            }
            else{
                $error_msg  = 'You do not have access to this project';
                return view('projects.error',compact('error_msg'));
            }
        }catch(\Exception $e){
            $error_msg  = 'Project not found';
            return view('projects.error',compact('error_msg'));                 
        }
    	

    	
    }

}
