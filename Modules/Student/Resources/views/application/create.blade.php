@extends('layouts.minimal')

@section('page-content')
<div class="row">
	<div class="col-sm-12">
		<div class="card-box">
            @include('student::application.form')
        </div>    
    </div>    
</div>    
@endsection