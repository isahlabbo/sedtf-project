@extends('examofficer::layouts.master')

@section('page-content')
    @include('coodinator::department.course.result.vetting.form')
@endsection

@section('scripts')
    <script src="{{asset('js/Ajax/batches.js')}}"></script>
    <script src="{{asset('js/Ajax/semesters.js')}}"></script>
@endsection