<?php

namespace Modules\ExamOfficer\Http\Controllers\Results;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Coodinator\Entities\NotificationType;

class ResultCommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment'=>'required',
            'notificationType'=>'required',
            ]);
        
        $notificationType = NotificationType::find($request->notificationType);    
        $notification = $notificationType->notifications()->firstOrCreate(['comment'=>$request->comment]);
        $notification->lecturerCourseResultUploadNotification()->firstOrCreate([
            'lecturer_course_result_upload_id'=>$request->upload]);
        session()->flash('message','Comment notification is successfully sent to tyhe lecturer account');
        return redirect()->route('exam.officer.result.course.review',[$request->upload]);

    }

    
}
