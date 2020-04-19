<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class Notification extends BaseModel
{
    public function notificationType()
    {
        return $this->belongsTo(Notification::class);
    }

    public function lecturerCourseResultUploadNotification()
    {
        return $this->belongsTo('Modules\Lecturer\Entities\LecturerCourseResultUploadNotification');
    }
}
