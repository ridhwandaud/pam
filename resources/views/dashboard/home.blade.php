@extends('layouts.app')

@section('content')
<nav class="navbar navbar">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li class="active">
                    Project
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
                    <a class="list-group-item active" href="">Project</a>
                    <a class="list-group-item" href="">Warehouse</a>
                    <a class="list-group-item" href="">Human Resource</a>
                    
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="panel panel-default" style="padding: 20px 30px;">
                <div class="panel-heading">
                    <h3 class="panel-title">Project</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ref No</th>
                            <th>Project Name</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Person In Charge</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                        <tr>
                            <td>{{$project->id}}</td>
                            <td>{{$project->project_name}}</td>
                            <td>{{$project->project_type}}</td>
                            <td>{{$project->project_location}}</td>
                            <td>{{$project->project_pic}}</td>
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
                <button class="btn btn-success" data-toggle="modal" data-target="#projectModal">Create new Project</button>
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
        <h4 class="modal-title" id="myModalLabel">Create a new Project</h4>
      </div>
      <div class="modal-body">
        <form action="/projects" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Project Name</label>
                <input class="form-control" type="text" name="project_name">
            </div>
            <div class="form-group">
                <label for="">Project Type</label>
                <input class="form-control" type="text" name="project_type">
            </div>
            <div class="form-group">
                <label for="">Location</label>
                <input class="form-control" type="text" name="project_location">
            </div>
            <div class="form-group">
                <label for="">Person In Charge</label>
                <input class="form-control" type="text" name="project_pic">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Create a new Project</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
@endsection
