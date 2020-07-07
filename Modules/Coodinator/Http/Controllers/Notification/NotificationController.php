<?php

namespace Modules\Coodinator\Http\Controllers\Notification;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Coodinator\CoodinatorBaseController;
use Modules\Coodinator\Entities\NotificationType;
use Modules\Coodinator\Entities\NotificationTo;
use Modules\Coodinator\Entities\Notification;

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

        return view('coodinator::department.notification.create',['types'=>NotificationType::all(),'tos'=>NotificationTo::all()]);
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
            'notification_type'=>'required'
        ]);

        Notification::firstOrCreate([
            'notification_to_id'=>$request->notification_to,
            'notification_type_id'=>$request->notification_type,
            'session_id'=>currentSession()->id,
            'comment'=>$request->notification,
        ]);

        return back()->withSuccess('Notification sent successfully');
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
            'notification_type'=>'required'
        ]);

        Notification::find($notificationId)->update([
            'notification_to_id'=>$request->notification_to,
            'notification_type_id'=>$request->notification_type,
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
