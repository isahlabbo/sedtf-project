@extends('layouts.result')

@section('page-content')
<div class="text text-center">
	SOKOTO EDUCATION DEVELOPMENT TRUST FUND (SEDTF)
	<br>
	SHEHU SHAGARI COMPUTER TRAINING INSTITUTE (SSCTI)
	<br>
	{{strtoupper($programme->name)}} 
	<br>
	BATCH {{$batch}} WAVE RESULTS OF 
	<br>
	{{$session->name}} SESSION
	<br><br>
</div>
<div class="table-responsive table-condenced">
<table class="table table-bordered">
    @include('coodinator::department.course.result.student.table.wave.header')
	<tbody>
	@foreach($registrations as $registration)
        @foreach($registration->semesterRegistrations->where('semester_id',request()->route('semester_id')) as $registration)
            @include('coodinator::department.course.result.student.table.wave.row')
        @endforeach
	@endforeach
    </tbody>
</table>
{{ $registrations->links() }}
</div>
@endsection