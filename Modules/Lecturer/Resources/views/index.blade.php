@extends('lecturer::layouts.master')

@section('page-content')
<div class="col-md-12">
    <br>
    <div class="card shadow">
        <div class="card-header shadow bt-color-1">
            <b class="" >Notification !!!</b> 
        </div>
        <div class="card-body">
            
        </div>
    </div>
    <br>
    <div class="card shadow">
        <div class="card-header shadow bt-color-1">
            <b class="" >{{currentSession()->name}} Un Approved Results</b> 
        </div>
        <div class="card-body">
            
        </div>
    </div>
</div>
@endsection
