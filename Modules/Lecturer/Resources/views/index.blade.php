@extends('lecturer::layouts.master')

@section('page-content')
<div class="col-md-12">
    <br>
    <div class="card shadow">
        <div class="card-header shadow bt-color-1">
            <b class="" >General Notification !!!</b> 
        </div>
        <div class="card-body">
            <div class="row">
                @foreach(currentSession()->notifications->where('notification_to_id', 1)->where('lecturer_id',null) as $notification)
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-header bt-color-2">
                                {{$notification->notificationType->name}}
                            </div>
                            <div class="card-body">
                                {{substr($notification->comment,0,30)}}... <a href="#" data-toggle="modal" data-target="#notification_{{$notification->id}}" class="text text-primary">Read More</a>
                                @include('coodinator::department.notification.read')
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach(lecturer()->notifications->where('session_id', currentSession()->id) as $notification)
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
            <b class="" >{{currentSession()->name}} Uploaded Result Notifications</b> 
        </div>
        <div class="card-body">
            <div class="row">
            @foreach(lecturer()->lecturerCourses
                ->where('is_active',1) as $lecturerCourse)
                @foreach($lecturerCourse->lecturerCourseResultUploads as $upload)
                    @if($upload->lecturerCourseResultUploadNotifications)
                        @foreach($upload->lecturerCourseResultUploadNotifications as $notification)
                        <div class="col-md-4">
                            <div class="card shadow">
                                <div class="card-header bt-color-2">
                                    {{$upload->lecturerCourse->course->code}} Results Notification
                                </div>
                                <div class="card-body">
                                    {{$notification->notification->comment}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                @endforeach
            @endforeach    
            </div>
        </div>
    </div>
</div>
@endsection
