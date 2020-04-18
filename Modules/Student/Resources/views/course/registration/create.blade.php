@extends('student::layouts.master')

@section('page-content')
<div class="col-md-12">
	<div class="card shadow">
		<div class="card-header text text-center shadow h3 bt-color-1">{{student()->admission->programme->name}} {{currentSession()->name}} Session Courses</div>
		<div class="card-body table-responsive">
			<form action="{{route('student.course.registration.courses.register')}}" method="post">
				@csrf
				@include('student::course.registration.pertials.courses')
				<br>
				@include('student::course.registration.pertials.carryOver')

				<button class="btn btn-block bt-color-1 shadow">Register</button>
			</form>
	    </div>
    </div>
</div>
@endsection
