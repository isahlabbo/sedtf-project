@extends('coodinator::layouts.master')
@section('title')
    coodinator create new admission page
@endsection

@section('page-content')
    @include('coodinator::department.admission.pertials.create')
@endsection

@section('scripts')
    <script src="{{asset('js/Ajax/schedule.js')}}"></script>
@endsection