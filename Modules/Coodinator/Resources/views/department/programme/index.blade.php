@extends('coodinator::layouts.master')

@section('title')
    Available staffs in College
@endsection

@section('page-content')
	@if($programmes)
	<div class="col-md-12">
	<div class="table-responsive" >
	    <table class="table">
	     	<thead>
	     		<tr>
	     			<th>Name</th>
	     			<th>Type</th>
	     			<th>Fee</th>
	     			<th>Duration</th>
	     			<th>About</th>
	     			<th>Code</th>
	     			<th>No Of Schedule</th>
	     			<th>Batches in Year</th>
	     			<th>No Of semesters</th>
	     			<th>
	     				<button class="btn bt-color-3 btn-block" data-toggle="modal" data-target="#newProgramme">
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
		     			<td>{{$programme->duration}} Months</td>
		     			<td>{{$programme->about}}</td>
		     			<td>{{$programme->code}}</td>
		     			<td>{{count($programme->programmeSchedules)}}</td>
		     			<td>{{$programme->batches}}</td>
		     			<td>{{$programme->semesters}}</td>
		     			
		     			<td>
		     				<button class="btn bt-color-1 btn-block" data-toggle="modal" data-target="#edit_{{$programme->id}}">
		     					Edit
		     				</button>
		     			</td>
		     			<td>
		     				<a href="{{route('coodinator.programme.delete',[$programme->id])}}" class="btn bt-color-2 btn-block" onclick="return confirm('Are you sur you want to delete this programme')">
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