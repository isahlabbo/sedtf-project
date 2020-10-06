@extends('coodinator::layouts.master')

@section('title')
    {{currentSession()->name}} SEDTF Registered and updated prpgrammes
@endsection

@section('page-content')
	@if($programmes)
	
	<div class="col-md-12 card shadow">
	<div class="card-header">{{currentSession()->name}} SEDTF Registered and updated prpgrammes</div>
	<div class="table-responsive card-body" >
	    <table class="table">
	     	<thead>
	     		<tr>
	     			<th>Name</th>
	     			<th>Type</th>
	     			<th>Fee</th>
	     			<th>Application</th>
	     			<th>Duration</th>
	     			<th>About</th>
	     			<th>Code</th>
	     			<th>No Of Schedule</th>
	     			<th>Batches in Year</th>
	     			<th>No Of semesters</th>
	     			<th>
	     				<button class="btn bt-color-3" data-toggle="modal" data-target="#newProgramme">
		     				New Programme
		     			</button>
		     			@include('coodinator::department.programme.create')
		     		</th>
	     		</tr>
	     	</thead>
	     	<tbody>
	     		@foreach($programmes as $programme)
	     		    
		     		<tr>
		     			<td>{{$programme->name}}</td>
		     			<td>{{$programme->programmeType->name}}</td>
		     			<td>{{$programme->fee}}</td>
		     			<td>{{$programme->application_status == 0 ? 'Not Active' : 'Active'}}</td>
		     			<td>{{$programme->duration}} Months</td>
		     			<td>{{$programme->about}}</td>
		     			<td>{{$programme->code}}</td>
		     			<td>{{count($programme->programmeSchedules)}}</td>
		     			<td>{{$programme->batches}}</td>
		     			<td>{{$programme->semesters}}</td>
		     			
		     			<td>
		     				<button class="btn bt-color-1" data-toggle="modal" data-target="#edit_{{$programme->id}}">
		     					Edit
		     				</button>
		     				<a href="{{route('coodinator.programme.delete',[$programme->id])}}" class="btn bt-color-2" onclick="return confirm('Are you sur you want to delete this programme')">
		     					Delete
		     				</a>
		     			</td>
		     		</tr>
		     		@include('coodinator::department.programme.edit')
	     		@endforeach
	     	</tbody>
	    </table>
	</div>
    </div>
	@else
		<div class="alert alert-danger">
			No programme registered in College
		</div>
	@endif   
@endsection