@extends('layouts.result')

@section('title')
    SEDTF {{$session->name}} {{$batch}} {{$programme->name}} AB FORMAT result
@endsection
@section('page-content')
<div class="text text-center">
	SOKOTO EDUCATION DEVELOPMENT TRUST FUND (SEDTF)
	<br>
	SHEHU SHAGARI COMPUTER TRAINING INSTITUTE (SSCTI)
	<br>
	{{strtoupper($programme->name)}} 
	<br>
	BATCH {{$batch}} RESULTS OF 
	<br>
	{{$session->name}} SESSION
	<br><br>
	
</div>
<div class="table-responsive table-condenced">
<table class="table table-bordered">
        @include('coodinator::department.course.result.student.table.header')
	<tbody>
	@foreach($registrations as $registration)
        @foreach($registration->semesterRegistrations->where('semester_id',request()->route('semester_id')) as $registration)
            @include('coodinator::department.course.result.student.table.row')
        @endforeach
	@endforeach
    </tbody>
</table>
{{ $registrations->links() }}
</div>
@endsection