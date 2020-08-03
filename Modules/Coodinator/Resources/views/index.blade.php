@extends('coodinator::layouts.master')

@section('page-content')
<div class="col-md-12">
    <br>
    <div class="card shadow">
        <div class="card-header shadow bt-color-1">
            <b class="" >General Notification !!!</b> 
        </div>
        <div class="card-body">
            <div class="row">
                @foreach(currentSession()->notifications as $notification)
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-header bt-color-2">
                                {{$notification->notificationTitle->name}}
                            </div>
                            <div class="card-body">
                                {{substr($notification->comment,0,30)}}... <a href="#" data-toggle="modal" data-target="#notification_{{$notification->id}}" class="text text-primary">Read More</a>
                                @include('coodinator::department.notification.read')
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow">
        <div class="card-header shadow bt-color-1">
            <b >{{currentSession()->name}} Un Approved Results</b> 
        </div>
        <div class="card-body">
            
        </div>
    </div>
</div>    
@endsection
