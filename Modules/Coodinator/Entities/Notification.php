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
}
