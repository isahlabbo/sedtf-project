@extends('examofficer::layouts.master')

@section('title')
{{currentSession()->name}} Uploade result files
@endsection

@section('page-content')
<div class="col-md-12">
    <br>
    <div class="card shadow">
        <div class="card-header shadow bt-color-1">
            <b class="" >{{currentSession()->name}} Uploade result files</b> 
        </div>
        <div class="card-body">
            <div class="row">
               @foreach(currentSession()->lecturerCourseResultUploads as  $upload)

                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-header bt-color-2">
                                {{$upload->lecturerCourse->course->code}}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($upload->lecturerCourseResultUploadFiles as $file)
                                        <div class="col-md-2">
                                            <a href="#" class="h3" title="uploaded at {{$file->created_at}}"><i class="fa fa-file"></i></a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                   
               @endforeach
            </div>
        </div>
    </div>
</div>
@endsection<