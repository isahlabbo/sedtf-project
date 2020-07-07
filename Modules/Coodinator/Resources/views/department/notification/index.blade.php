@extends('coodinator::layouts.master')
@section('title')
    SEDTF {{currentSession()->name}} sent notifications page
@endsection
@section('page-content')
<div class="col-md-1"></div>
<div class="col-md-10">
	
    <div class="card shadow">
    	<h4 class="text text-danger center">{{currentSession()->name}} Sent Notifications</h4>
    	<div class="card-body">

    		<table class="table">
                <thead>
                    <tr>
                        <th>Message</th>
                        <th>Sent To</th>
                        <th>Nottification Type</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach(currentSession()->notifications as $notification)
                    <tr>
                        <td>{{$notification->comment}}</td>
                        <td>{{$notification->notificationTo->name}}</td>
                        <td>{{$notification->notificationType->name}}</td>
                        <td>{{$notification->created_at}}</td>
                        <td>{{$notification->updated_at}}</td>
                        <td>
                            <a href="{{route('coodinator.notification.delete',[$notification->id])}}"><button class="btn bt-color-3" onclick="return confirm('Are you sure you want to delete this notification ?')">Delete</button></a>
                        </td>
                        <td>
                            <a href="{{route('coodinator.notification.edit',[$notification->id])}}"><button class="btn bt-color-2">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>      
            </table>
    	</div>
    </div>
</div>    
@endsection

