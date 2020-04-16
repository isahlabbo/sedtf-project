@extends('examofficer::layouts.master')

@section('title')
    SEDTF student registration
@endsection

@section('page-content')
    @include('coodinator::department.admission.pertials.register')
@endsection

@section('scripts')
    <script src="{{asset('js/imagePreview.js')}}"></script>
    <script src="{{asset('js/Ajax/address.js')}}"></script>
@endsection