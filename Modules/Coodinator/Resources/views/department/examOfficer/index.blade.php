@extends('coodinator::layouts.master')

@section('title')
    Available Exam Officers in College
@endsection

@section('page-content')
	@if($examOfficers)
	    <table class="table">
	     	<thead>
	     		<tr>
	     			<th>S/N</th>
	     			<th>Name</th>
	     			<th>Email</th>
	     			<th>Phone</th>
	     			<th>Password</th>
	     			<th>Appointed at</th>
	     			<th>Year Since Appointment</th>
	     			<th>Status</th>
	     			<th></th>
	     		</tr>
	     	</thead>
	     	<tbody>
	     		@foreach($examOfficers as $examOfficer)
		     		<tr>
		     			<td>{{$loop->index+1}}</td>
		     			<td>{{$examOfficer->lecturer->staff->first_name.' '.$examOfficer->lecturer->staff->last_name}}</td>
		     			<td>{{$examOfficer->email}}</td>
		     			<td>{{$examOfficer->lecturer->staff->phone}}</td>
		     			<td>{{$examOfficer->real_pass}}</td>
		     			<td>{{$examOfficer->from}}</td>
		     			<td>{{$examOfficer->duration()}}</td>
		     			<td>
                            @if($examOfficer->is_active == 1)
                                {{'Active'}}
                            @else
                                {{'Not Active'}}
                            @endif
		     			</td>
		     			<td>
		     				<a href="{{route('coodinator.exam.officer.revoke',[$examOfficer->id])}}">
		     					<button class="button-fullwidth cws-button bt-color-1 ">
			     					{{$examOfficer->is_active == 1 ? 'Revoke' : 'Activate'}} Exam Officer
			     				</button>
		     				</a>
		     			</td>
		     		</tr>
	     		@endforeach
	     	</tbody>
	    </table>
	@else
		<div class="alert alert-danger">
			No Exam Officers record available in College
		</div>
	@endif   
@endsection