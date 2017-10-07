@extends('layouts.app')

@section('content')
<nav class="navbar navbar-breadcrumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    Tasks
                </li>
            </ol>  
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="list-group">
                    <a class="list-group-item active" href="">Tasks</a>
                    <a class="list-group-item" href="">Schedule</a>
                    <a class="list-group-item" href="">Fitness</a>
                    
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="panel panel-default" style="padding: 20px 30px;">
                <div class="panel-heading">
                    <h3 class="panel-title">Tasks</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Deadline</th>
                            <th>Priority</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task_name}}</td>
                            <td>{{$task->task_type}}</td>
                            <td>{{$task->task_deadline}}</td>
                            <td>{{$task->task_priority}}</td>
                            <td><a href="/task/{{$task->id}}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 clearfix">
            <div class="pull-right">
                <button class="btn btn-primary" data-toggle="modal" data-target="#projectModal">Create new Task</button>
            </div>
        </div>
    </div>
</div>

<!-- Create Project Modal -->
<div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create a new Task</h4>
      </div>
      <div class="modal-body">
        <form action="/tasks" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Task Name</label>
                <input class="form-control" type="text" name="task_name">
            </div>
            <div class="form-group">
                <label for="">Task Type</label>
                <input class="form-control" type="text" name="task_type">
            </div>
            <div class="form-group">
                <label for="">Deadline</label>
                <input class="form-control" type="text" name="task_deadline">
            </div>
            <div class="form-group">
                <label for="">Priority</label>
                <input class="form-control" type="text" name="task_priority">
            </div>
            <!-- <div class="form-group">
                <label for="">Tag</label>
                <input class="form-control" type="text" name="task_tag">
            </div> -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Create a new Task</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
@endsection
