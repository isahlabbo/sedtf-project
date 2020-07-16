
@if(count($students)> 0)
<div class="col-md-12">
	<div class="card">
		<div class="card-body">
			<div class="col-md-12 text-center"><br><br>
		    	SOKOTO EDUCATION DEVELOPMENT TRUST FUND<br>
                {{strtoupper($programme->name)}}
		    	<br>
		    	LIST OF GRADUATED STUDENTS IN, {{$session->name}} SESSION
		    	<br>
                
		    	<br>
		    </div>
			<div class="table-responsive">
				<table class="table">
				    <thead>
				     	<tr>
				     		<td>S/N</td>
				     		<td>First Name</td>
				     		<td>Last Name</td>
				     		<td>Admission No</td>
				     		<td>Phone</td>
				     		<td>Re Register Courses</td>
				     	</tr>
				    </thead>
				    <tbody>
				    	@foreach($students as $student)
			            <tr>
				     		<td>{{$loop->index+1}}</td>
				     		<td>{{strtoupper($student->first_name)}}</td>
				     		<td>{{strtoupper($student->last_name)}}</td>
				     		<td>{{$student->admission->admission_no}}</td>
				     		<td>{{$student->phone}}</td>
				     		<td>
				     			@foreach($student->currentLevelReRegisterCoursesAt($session) as $course)
				     			{{$course->code}}<br>
				     			@endforeach
				     		</td>
				     	</tr>
				    	@endforeach
				    </tbody>
			    </table>
			</div>
		</div>
	</div>
</div>
@else
<div class="col-md-12">
	<div class="alert alert-danger">Sorry there is no spill over students found at {{$session->name}} Session</div>
</div>
@endif
