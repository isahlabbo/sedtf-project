@extends('coodinator::layouts.master')

@section('title')
    {{currentSession()->name}} SEDTF Registered and updated prpgrammes
@endsection

@section('page-content')
    @include('coodinator::department.programme.application.pertial.index')   
@endsection