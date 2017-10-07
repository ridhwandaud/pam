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

    public function getTask($id){

    	$user = Auth::user();

        try{
            $task = Task::where('id',$id)->firstOrFail();

            if($user->id === $task->user_id)
            {
                return view('task.edit',compact('task'));
            }
            else{
                $error_msg  = 'You do not have access to this project';
                return view('task.error',compact('error_msg'));
            }
        }catch(\Exception $e){
            $error_msg  = 'Task not found';
            return view('task.error',compact('error_msg'));                 
        }
    
    }

    public function editTask(Request $request, $id){

        $input = $request->all();

        $task = Task::where('id',$id)->firstOrFail();

        $task->task_name = $input['task_name'];

        $task->task_type = $input['task_type'];

        $task->task_deadline = $input['task_deadline'];

        $task->task_priority = $input['task_priority'];

        $task->save();

        return back();


    }

}
