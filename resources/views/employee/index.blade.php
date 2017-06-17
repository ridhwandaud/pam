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
                    <span class="label label-danger">Offline</span>
                    <!-- <span class="label label-success">Online</span> -->
                    <p>{{$currentUser->job_position}}</p>
                    <p>{{$currentUser->info}}</p>
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
            <div class="tabs">
                <ul class="nav nav-tabs">
                  <li role="presentation"><a href="/profile">Feed</a></li>
                  <li role="presentation" class="active"><a href="/employee">Users</a></li>
                  <li role="presentation"><a href="#">Messages</a></li>
                </ul>
                <div class="tab-content">
                    <div class="row">
                        @foreach($users as $user)
                        <div class="col-md-4">
                             <div class="panel panel-default feed">
                                <div class="panel-body">
                                    <div class="feed-user">
                                        <img class="img_thumbnail" src="{{$user->img_path}}" height="50">                            
                                        <p class="feed-name">{{$user->name}}</p>
                                        <span class="label label-danger pull-right">Offline</span>
                                        <p>{{$user->updated_at->diffForHumans()}}</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection