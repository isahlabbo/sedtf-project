<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class Notification extends BaseModel
{
    public function notificationType()
    {
        return $this->belongsTo(NotificationType::class);
    }

    public function notificationTo()
    {
        return $this->belongsTo(NotificationTo::class);
    }

    public function notificationTitle()
    {
        return $this->belongsTo(NotificationTitle::class);
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
