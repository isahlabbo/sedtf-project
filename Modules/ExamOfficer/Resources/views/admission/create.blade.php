@extends('examofficer::layouts.master')

@section('title')
    generate student admission number
@endsection

@section('page-content')
    @include('coodinator::department.admission.pertials.create')
@endsection

@section('scripts')
    <script src="{{asset('js/Ajax/schedule.js')}}"></script>
@endsection