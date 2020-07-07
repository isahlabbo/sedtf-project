<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class Notification extends BaseModel
{
    public function notificationType()
    {
        return $this->belongsTo(Notification::class);
    }

    public function notificationTo()
    {
        return $this->belongsTo(NotificationTo::class);
    }

    public function lecturerCourseResultUploadNotification()
    {
        return $this->hasOne('Modules\Lecturer\Entities\LecturerCourseResultUploadNotification');
    }

    public static function send(array $data)

    {

        $this->firstOrCreate([
            'notification_to_id'=>$data['notification_to'],
            'notification_type_id'=>2,
            'comment'=>$data['notification'],
        ]);
        
    }
    
}
