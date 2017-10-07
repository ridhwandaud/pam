@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
	                    <h3 class="panel-title">Edit Task</h3>
	                </div>
	                <div class="panel-body">
	                	<form action="/edit/{{$task->id}}" method="POST">
	                		{{ csrf_field() }}
	                		<div class="form-group">
	                			<label for="task_name">Task Name</label>
   								<input type="name" class="form-control" name="task_name" value="{{$task->task_name}}">
	                		</div>		
	                		<div class="form-group">
	                			<label for="task_type">Task Type</label>
   								<input type="name" class="form-control" name="task_type" value="{{$task->task_type}}">
	                		</div>	
							<div class="form-group">
	                			<label for="task_deadline">Task Deadline</label>
   								<input type="name" class="form-control" name="task_deadline" value="{{$task->task_deadline}}">
	                		</div>
							<div class="form-group">
	                			<label for="task_priority">Task Priority</label>
   								<input type="name" class="form-control" name="task_priority" value="{{$task->task_priority}}">
	                		</div>
	                		<div class="col-md-6 text-center">
	                			<a class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
	                		</div>
	                		<div class="col-md-6 text-center">
	                			<button type="submit" class="btn btn-primary">Edit</button>
	                		</div>			                		
	                	</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection