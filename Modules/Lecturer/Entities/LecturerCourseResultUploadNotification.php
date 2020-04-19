<?php

namespace Modules\Lecturer\Entities;

use App\BaseModel;

class LecturerCourseResultUploadNotification extends BaseModel
{
    public function notification()
    {
        return $this->belongsTo('Modules\Coodinator\Entities\Notification');
    }

    public function lecturerCourseResultUpload()
    {
        return $this->belongsTo(LecturerCourseResultUpload::class);
    } 
}
