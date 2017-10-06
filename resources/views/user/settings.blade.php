@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/settings/profile" method="POST">
        {{ csrf_field() }}
        <div class="panel panel-default">
            <div class="panel-heading">Profile</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">    
                            <div class="panel-body">
                                
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input class="form-control" value="{{$user->name}}" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input class="form-control" value="{{$user->email}}" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="">Job position</label>
                                    <input class="form-control" value="{{$user->job_position}}" name="job_position">
                                </div>
                                <div class="form-group">
                                    <label for="">Info</label>
                                    <input class="form-control" value="{{$user->info}}" name="info">
                                </div>
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Mobile Number</label>
                                    <input class="form-control" value="{{$user->mobile_number}}" name="mobile_number">
                                </div>
                                <div class="form-group">
                                    <label for="">Home Number</label>
                                    <input class="form-control" value="{{$user->home_number}}" name="home_number">
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <textarea class="form-control" name="address" rows="4">{{$user->address}}</textarea> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-8">
                            <div class="panel-body">
                                <div class="form-group pull-right">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>       

        <!-- <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                        <div class="panel-heading">Contact Info</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="">Mobile Number</label>
                                <input class="form-control" value="{{$user->mobile_number}}" name="mobile_number">
                            </div>
                            <div class="form-group">
                                <label for="">Home Number</label>
                                <input class="form-control" value="{{$user->home_number}}" name="home_number">
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea class="form-control" name="address">{{$user->address}}</textarea> 
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
            </div>
        </div> -->
    </form>
</div>
@endsection