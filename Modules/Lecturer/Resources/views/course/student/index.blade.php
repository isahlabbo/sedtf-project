@extends('lecturer::layouts.master')

@section('page-content')
<div class="col-md-3"></div>
<div class="col-md-6">
    <br>
	<div class="card shadow">
		<div class="card-header h3 bt-color-1 shadow">Search Students</div>
		<div class="card-body">
			<form action="{{route('lecturer.courses.students.search')}}" method="post" enctype="multipart/form-data">
				@csrf
		    	@include('lecturer::result.pertials.course')
				<br>
		    	@include('lecturer::result.pertials.programme')
		    	<br>
		    	@include('lecturer::result.pertials.session')
		    	<br>
		    	<select class="form-control" name="specification">
		    		<option value="">Specification</option>
	                <option value="1">
	                	Available Students
	                </option>
	                <option value="2">
	                	Registered Students
	                </option>
		    	</select><br>
		    	<button class="btn btn-block bt-color-1">Search Students</button>
		    </form>
		</div>
	</div>
</div> 
@endsection
