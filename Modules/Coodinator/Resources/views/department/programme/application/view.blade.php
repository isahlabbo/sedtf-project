@extends('coodinator::layouts.master')

@section('title')
SEDTF {{$application->first_name}} {{$application->first_name}} {{$application->other_name}} application review
@endsection

@section('page-content')
    @include('coodinator::department.programme.application.pertial.view')   
@endsection
