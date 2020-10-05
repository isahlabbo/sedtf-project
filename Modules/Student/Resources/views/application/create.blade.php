@extends('layouts.minimal')
@section('title')
   SEDTF {{currentSession()->name}} {{$programme->name}} Application Form
@endsection
@section('page-content')
<div class="row">
    <div class="col-md-1"></div>
	<div class="col-md-10">
    <br>
		<div class="card shadow">
        <div class="card-header bt-color-1 h3">{{currentSession()->name}} {{$programme->name}} Application Form</div>
            <div class="card-body shadow">
                @include('student::application.form')
            </div>    
        </div>    
    </div>    
</div>    
@endsection

@section('scripts')
    <script src="{{asset('js/Ajax/address.js')}}"></script>
    <script src="{{asset('js/Ajax/qualification.js')}}"></script>
    <script src="{{asset('js/imagePreview.js')}}"></script>
@endsection