<?php

namespace Modules\Coodinator\Http\Controllers\Notification;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Coodinator\CoodinatorBaseController;
use Modules\Coodinator\Entities\NotificationType;
use Modules\Coodinator\Entities\NotificationTitle;
use Modules\Coodinator\Entities\NotificationTo;
use Modules\Coodinator\Entities\Notification;
use Modules\Coodinator\Entities\Admission;
use Modules\Lecturer\Entities\Staff;

class NotificationController extends CoodinatorBaseController
{
    
    public function index()
    {
        return view('coodinator::department.notification.index');
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {

        return view('coodinator::department.notification.create',[
            'types'=>NotificationType::all(),
            'titles'=>NotificationTitle::all(),
            'tos'=>NotificationTo::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function send(Request $request)
    {
        $request->validate([
            'notification'=>'required|string',
            'notification_to'=>'required',
            'notification_type'=>'required',
            'notification_title'=>'required'
        ]);
        
        $notification = Notification::create([
            'notification_to_id'=>$request->notification_to,
            'notification_type_id'=>$request->notification_type,
            'notification_title_id'=>$request->notification_title,
            'session_id'=>currentSession()->id,
            'comment'=>$request->notification,
        ]);

        if(isset($request->programme)){
            $notification->update(['programme_id'=>$request->programme]);
        }

        if(isset($request->admissionNo)){
            $notification->update(['student_id'=>$this->getStudent($request->admissionNo)->id]);
        }

        if(isset($request->staffId)){
            $notification->update(['lecturer_id'=>$this->getLecturer($request->staffId)->id]);
        }

        return back()->withSuccess('Notification sent successfully');
    }

    public function getStudent($admissionNo)
    {
        return Admission::where('admission_no',$admissionNo)->first()->student;
    }

    public function getLecturer($staffId)
    {
        return Staff::where('staffID',$staffId)->first()->lecturer;
    }

    

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($notificationId)
    {
        return view('coodinator::department.notification.edit',[
            'types'=>NotificationType::all(),
            'tos'=>NotificationTo::all(),
            'notification'=>Notification::find($notificationId)]
        );
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $notificationId)
    {
        $request->validate([
            'notification'=>'required|string',
            'notification_to'=>'required',
            'notification_type'=>'required',
            'notification_title'=>'required'
        ]);

        Notification::find($notificationId)->update([
            'notification_to_id'=>$request->notification_to,
            'notification_type_id'=>$request->notification_type,
            'notification_title_id'=>$request->notification_title,
            'session_id'=>currentSession()->id,
            'comment'=>$request->notification,
        ]);

        return back()->withSuccess('Notification updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function delete($notificationId)
    {
        Notification::find($notificationId)->update();

        return back()->withSuccess('Notification deleted successfully');
    }
}
