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
	     			<th>No Of Schedule</th>
	     			<th>Batches in Year</th>
	     			<th>No Of semesters</th>
	     			<th>
	     				<button class="btn bt-color-3 btn-block">
		     				New Programme
		     			</button>
		     		</th>
	     		</tr>
	     	</thead>
	     	<tbody>
	     		@foreach($programmes as $programme)
	     		    
		     		<tr>
		     			<td>{{$programme->name}}</td>
		     			<td>{{$programme->programmeType->name}}</td>
		     			<td>{{count($programme->programmeSchedules)}}</td>
		     			<td>{{$programme->batches}}</td>
		     			<td>{{$programme->semesters}}</td>
		     			
		     			<td>
		     				<button class="btn bt-color-1 btn-block" data-toggle="modal" data-target="#">
		     					Edit
		     				</button>
		     			</td>
		     			<td>
		     				<button class="btn bt-color-2 btn-block">
		     					Delete
		     				</button>
		     			</td>
		     		</tr>
		     		
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