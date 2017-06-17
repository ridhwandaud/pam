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
                  <li role="presentation" class="active"><a href="/profile">Feed</a></li>
                  <li role="presentation"><a href="#">Profile</a></li>
                  <li role="presentation"><a href="#">Messages</a></li>
                </ul>
                <div class="tab-content">
                    <div class="row">
                        <div class="col-md-12">
                             <form action="">
                                <input class="form-control" type="text" placeholder="Ask anything here @ for tag someone">
                            </form>
                        </div>
                    </div>
                   
                </div>
                <div class="panel panel-default feed hide">
                    <div class="panel-body">
                        <div class="feed-user">
                            <img class="img_thumbnail" src="{{$currentUser->img_path}}" height="50">
                            <p class="feed-name">{{$currentUser->name}}</p>
                            <p>{{$currentUser->created_at}}</p>
                        </div>
                        
                        <p class="feed-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante metus, vulputate eu tempus sit amet, consequat vitae ligula. Etiam nulla neque, mollis sit amet dui sed, suscipit faucibus diam. Suspendisse eu dolor non quam venenatis pharetra. Donec euismod id purus pulvinar commodo. Suspendisse dapibus commodo malesuada. Nullam pulvinar velit ac orci ultrices molestie. Etiam sit amet lorem non elit iaculis pretium vel quis enim. Nunc vel bibendum quam, et maximus odio.</p>

                        <hr>

                        <div class="engagement">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <div class="glyphicon glyphicon-thumbs-up icon-like" aria-hidden="true"></div>
                                        </div>
                                        <div class="col-xs-1">
                                            <p>Like</p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-xs-3">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <div class="glyphicon glyphicon-comment icon-comment" aria-hidden="true"></div>
                                        </div>
                                        <div class="col-xs-1">
                                            <p>Comment</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="comment">
                            <div class="row">
                                <div class="col-md-1 col-xs-2">
                                    <img class="img_thumbnail" src="{{$currentUser->img_path}}" height="30">
                                </div>
                                <div class="col-md-11 col-xs-10">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            
                        </div>

                    </div> 
                </div>
                 <div class="panel panel-default feed hide">
                    <div class="panel-body">
                        <div class="feed-user">
                            <img class="img_thumbnail" src="{{$currentUser->img_path}}" height="50">
                            <div class="glyphicon glyphicon-bullhorn icon-announcement" aria-hidden="true"></div>
                            
                            <p class="feed-name">{{$currentUser->name}}</p>
                            <p>{{$currentUser->created_at}}</p>
                        </div>
                        
                        <p class="feed-text alert alert-success" role="alert">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante metus, vulputate eu tempus sit amet, consequat vitae ligula. Etiam nulla neque, mollis sit amet dui sed, suscipit faucibus diam. Suspendisse eu dolor non quam venenatis pharetra. Donec euismod id purus pulvinar commodo. Suspendisse dapibus commodo malesuada. Nullam pulvinar velit ac orci ultrices molestie. Etiam sit amet lorem non elit iaculis pretium vel quis enim. Nunc vel bibendum quam, et maximus odio.
                        </p>
                        
                    </div> 
                </div>

                @foreach($posts as $post)
                <div class="panel panel-default feed">
                    <div class="panel-body">
                        <div class="feed-user">
                            <img class="img_thumbnail" src="{{$post->user->img_path}}" height="50">                            
                            <p class="feed-name">{{$post->user->name}}</p>
                            <p>{{$post->created_at->diffForHumans()}}</p>
                        </div>
                        <p class="feed-text" role="alert">
                            {{$post->content}}
                        </p>
                    </div> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection