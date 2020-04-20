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
