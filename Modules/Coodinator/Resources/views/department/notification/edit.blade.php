@extends('coodinator::layouts.master')
@section('title')
    SEDTF send notification page
@endsection
@section('page-content')
<div class="col-md-3"></div>
<div class="col-md-6">
	<br>
    <div class="card shadow">
    	<h4 class="text text-danger center">Edit Notification</h4>
    	<div class="card-body">
    		<form method="post" action="{{route('coodinator.notification.update',[$notification->id])}}" enctype="multipart/form-data">
            		@csrf
            		
                    <div class="form-group">
                        <label class="text text-danger">To</label>
                        <select class="form-control" name="notification_to">
                            <option value="{{$notification->notificationTo->id}}">{{$notification->notificationTo->name}}</option>
                            @foreach($tos->where('id', '!=', $notification->notificationTo->id) as $to)
                                <option value="{{$to->id}}">{{$to->name}}</option>
                            @endforeach
                        </select>
                        @error('to')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="text text-danger">Notification Type</label>
                        <select class="form-control" name="notification_type">
                            <option value="{{$notification->notificationType->id}}">{{$notification->notificationTo->name}}</option>
                            @foreach($types->where('id', '!=', $notification->notificationType->id) as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="text text-danger">Message</label>
                        <textarea name="notification" class="form-control" cols="15" rows="4" placeholder="Type some text here...">{{$notification->comment}}</textarea>
                        @error('notification')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <button class="btn bt-color-1 btn-block">Update</button>
            	</form>
    	</div>
    </div>
</div>    
@endsection

