@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="/settings/profile" method="POST">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">
                        <div class="avatar text-center">
                            <img src="/{{$user->img_path}}" alt="" height="100" class="img-circle">
                            <!-- <input type="file" name="img_path" value="upload new picture"> -->
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" value="{{$user->name}}" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" value="{{$user->email}}" name="email">
                        </div>
                        
                        <p>{{$user->job_position}}</p>
                        <p>{{$user->info}}</p>
                    </div>   
                </div>
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
                    <button class="btn btn-primary">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection