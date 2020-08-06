@extends('examofficer::layouts.master')

@section('page-content')
<div class="col-md-12">
    <br>
    <div class="card shadow">
        <div class="card-header shadow bt-color-1">
            <b class="" >General Notification !!!</b> 
        </div>
        <div class="card-body">
            <div class="row">
                @foreach(currentSession()->notifications->where('notification_to_id', 2) as $notification)
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
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow">
        <div class="card-header shadow bt-color-1">
            <b class="" >{{currentSession()->name}} Un Approved Results</b> 
        </div>
        <div class="card-body">
            <div class="row">
                @foreach(programmes() as $programme)
                    @foreach($programme->unApprovedResults() as $upload)
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-header bt-color-2">
                                {{$upload->session->name}} {{$upload->lecturerCourse->course->code}} Results Uploaded at {{$upload->created_at}}
                            </div>
                            <div class="card-body">
                                <button class="btn bt-color-1 shadow"><a href="{{route('exam.officer.result.course.review',[$upload->id])}}" style="color: white">Review This Result</a></button>
                                <button class="btn bt-color-3 shadow">{{count($upload->lecturerCourseResultUploadFiles)}} Attempts</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
