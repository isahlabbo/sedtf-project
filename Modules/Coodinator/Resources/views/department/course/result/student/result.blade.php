@extends('layouts.result')

@section('page-content')
	<div class="table-responsive">
		@if($registration != null)
             <div class="alert alert-danger">There is no course registration foun for this student</div>
        @else
	    <div class="col-md-12 text-center"><br><br>
	    	<table>
	    		<tr>
	    			<td>NAME</td>
	    			<td>
	    				{{strtoupper($registration->sessionRegistration->student->first_name)}} {{strtoupper($registration->sessionRegistration->student->middle_name)}}
    		            {{strtoupper($registration->sessionRegistration->student->last_name)}}
    	            </td>
	    		</tr>
	    		<tr>
	    			<td>PROGRAMME</td>
	    			<td>{{strtoupper($registration->sessionRegistration->student->admission->programme->name)}}</td>
	    		</tr>
	    		<tr>
	    			<td>ADMISSION NO</td>
	    			<td>{{strtoupper($registration->sessionRegistration->student->admission->admission_no)}}</td>
	    		</tr>
	    	</table>
	    </div>
		<table class="table table-bordered table-striped" >
            @include('coodinator::department.course.result.student.table.header')
            @include('coodinator::department.course.result.student.table.body')
		</table>
		@endif
	</div>
@endsection