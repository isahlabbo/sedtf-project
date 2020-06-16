@extends('coodinator::layouts.master')
@section('title')
    coodinator edit admission page
@endsection

@section('page-content')
    @include('coodinator::department.admission.pertials.register')
@endsection

@section('scripts')
    <script src="{{asset('js/Ajax/address.js')}}"></script>
    <script src="{{asset('js/imagePreview.js')}}"></script>
@endsection