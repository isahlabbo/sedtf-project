@extends('examofficer::layouts.master')

@section('page-content')
<div class="col-md-12">
    <br>
    <div class="card shadow">
        <div class="card-header shadow">
            <b class="text text-danger" >Notification !!!</b> 
        </div>
        <div class="card-body">
            
        </div>
    </div>
    <br>
    <div class="card shadow">
        <div class="card-header shadow">
            <b class="text text-danger" >{{currentSession()->name}} Un Approved Results</b> 
        </div>
        <div class="card-body">
            
        </div>
    </div>
</div>
@endsection
