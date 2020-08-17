@extends('layouts.result')

@section('page-content')
    <div class="card">
    	<div class="card-header">
    		<div class="alert alert-success h4">Congratulation you have successfully graduated with  {{student()->generalRemarks()['remark']}}</div>
    	</div>
    	<div class="card-body">
    		
    		<table>
				<tr>
					<td class="strong">Name</td>
					<td>{{student()->first_name.' '.student()->middle_name.' '.student()->last_name}}</td>
				</tr>
				<tr>
					<td class="strong">Admission No</td>
					<td>{{student()->admission->admission_no}}</td>
				</tr>
				<tr>
					<td class="strong">programme</td>
					<td>{{student()->admission->programme->name}}</td>
				</tr>
				
			</table>
			
			<table class="table shadow">
				<head>
					<tr>
						<td>S/N</td>
						<td>Course Code</td>
						<td>Course Unit</td>
						<td>CA Score</td>
						<td>Exam Score</td>
						<td>Total Score</td>
						<td>Grade</td>
						
					</tr>
				</head>
				<tbody>
					@foreach(student()->sessionRegistrations as $sessionRegistration)
						@foreach($sessionRegistration->semesterRegistrations->where('cancelation_status',0) as $semester_registration)
							@foreach($semester_registration->courseRegistrations->where('cancelation_status',0) as $course_registration)    				
								@if($course_registration->result->approved())
								<tr>
									<td>{{$loop->index+1}}</td>
									<td>{{$course_registration->course->code}}</td>
									<td>{{$course_registration->course->unit}}</td>
									<td>
										{{$course_registration->result->ca}}
									</td>
									<td>
										{{$course_registration->result->exam}}
									</td>
									<td>
										{{$course_registration->result->accessment() + $course_registration->result->examination()}}
									</td>
									<td>
										{{$course_registration->result->grade}}
									</td>
									
								</tr>
								@endif
							@endforeach
						@endforeach
					@endforeach
                    <tr>
                    	<td></td>
                    	<td></td>
                    	<td></td>
                    	<td></td>
                    	<td></td>
                    	<td><b>C G P A</b></td>
                    	<td><b>{{number_format($sessionRegistration->sessionGrandPoints(),2)}}</b></td>
                    </tr>
				</tbody>
			</table>
    	</div>
    </div>
@endsection
