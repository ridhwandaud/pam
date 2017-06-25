@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4>{{$project->project_name}}</h4>
				<div>
					<p>{{$project->project_location}}</p>
					<p>{{$project->project_type}}</p>
				</div>
			</div>
		</div>
	</div>
@endsection