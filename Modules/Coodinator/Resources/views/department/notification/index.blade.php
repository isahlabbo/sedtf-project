@extends('coodinator::layouts.master')
@section('title')
    SEDTF {{currentSession()->name}} sent notifications page
@endsection
@section('page-content')
<div class="col-md-1"></div>
<div class="col-md-10">
	<br>
    <div class="card shadow">
    	<h4 class="text text-danger center">{{currentSession()->name}} Sent Notifications</h4>
    	<div class="card-body">
    		<table class="table">
                <tbody>
                @foreach(currentSession()->notifications as $notification)
                    <tr>
                        <td>{{$notification->comment}}</td>
                        <td>{{$notification->notificationTo->name}}</td>
                        <td>{{$notification->notificationType->name}}</td>
                        <td>{{$notification->created_at}}</td>
                        <td>{{$notification->updated_at}}</td>
                    </tr>
                @endforeach
                </tbody>      
            </table>
    	</div>
    </div>
</div>    
@endsection

