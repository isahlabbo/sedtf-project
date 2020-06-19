@extends('layouts.result')

@section('page-content')

	<div class="table-responsive">
		@if($registration->batch == null)
             <div class="alert alert-danger">There is no course registration foun for this student</div>
        @else
	    <div class="col-md-12"><br>
	    	<table>
	    		<tr>
	    			<td>NAME</td>
	    			<td>
	    				{{strtoupper($registration->student->first_name)}} {{strtoupper($registration->student->middle_name)}}
    		            {{strtoupper($registration->student->last_name)}}
    	            </td>
	    		</tr>
	    		<tr>
	    			<td>PROGRAMME</td>
	    			<td>{{strtoupper($registration->student->admission->programme->name)}}</td>
	    		</tr>
	    		<tr>
	    			<td width="200">ADMISSION NO</td>
	    			<td>{{strtoupper($registration->student->admission->admission_no)}}</td>
	    		</tr>
	    	</table>
	    </div><br>

		<table class="table table-bordered table-striped" >
            @include('coodinator::department.course.result.student.table.header')
            @include('coodinator::department.course.result.student.table.body')
		</table>
		@endif
	</div>
@endsection