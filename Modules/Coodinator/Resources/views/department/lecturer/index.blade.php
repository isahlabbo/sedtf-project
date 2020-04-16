@extends('coodinator::layouts.master')

@section('title')
    Available staffs in College
@endsection

@section('page-content')
	@if($staffs)
	<div class="col-md-12">
	<div class="table-responsive" >
	    <table class="table">
	     	<thead>
	     		<tr>
	     			<th>S/N</th>
	     			<th>Name</th>
	     			<th>Email</th>
	     			<th>Phone</th>
	     			<th>Employed at</th>
	     			<th>Years Since Employed</th>
	     			<th></th>
	     			<th></th>
	     		</tr>
	     	</thead>
	     	<tbody>
	     		@foreach($staffs as $staff)
	     		    @if($staff->lecturer)
		     		<tr>
		     			<td>{{$loop->index+1}}</td>
		     			<td>{{$staff->first_name.' '.$staff->last_name}}</td>
		     			<td>{{$staff->email}}</td>
		     			<td>{{$staff->phone}}</td>
		     			<td>{{$staff->employed_at}}</td>
		     			<td>{{$staff->lecturer->duration()}}</td>
		     			<td>
		     				<button class="button-fullwidth cws-button bt-color-1 btn-block" data-toggle="modal" data-target="#edit_{{$staff->lecturer->id}}">
		     					Edit
		     				</button>
		     			</td>
		     			<td>
		     				<button class="button-fullwidth cws-button bt-color-1 btn-block" data-toggle="modal" data-target="#lecturer_{{$staff->lecturer->id}}">
		     					Make Appointment
		     				</button>
		     			</td>
		     		</tr>
		     		@include('coodinator::department.lecturer.edit')
		     		@include('coodinator::department.lecturer.appointment')
		     		@endif
	     		@endforeach
	     	</tbody>
	    </table>
	</div>
    </div>
	@else
		<div class="alert alert-danger">
			No staff record available in College
		</div>
	@endif   
@endsection