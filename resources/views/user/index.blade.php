@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <div class="avatar text-center">
                        <img src="{{$currentUser->img_path}}" alt="" height="100" class="img-circle">
                    </div>
                    
                    <p class="p-name">{{$currentUser->name}}</p>
                    <p>{{$currentUser->info}}</p>
                    <p>{{$currentUser->job_position}}</p>
                    
                </div>   
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Contact Info</div>
                <div class="panel-body">
                    <p>{{$currentUser->email}}</p>
                    <p>{{$currentUser->mobile_number}}</p>
                    <p>{{$currentUser->home_number}}</p>
                    <p>{{$currentUser->address}}</p>
                </div> 
            </div>
        </div>
        <div class="col-md-9">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="/profile">Profile</a></li>
              <li role="presentation"><a href="#">Profile</a></li>
              <li role="presentation"><a href="#">Messages</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection