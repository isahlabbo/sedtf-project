<?php

namespace Modules\Lecturer\Entities;

use App\BaseModel;

class LecturerCourseResultUploadFile extends BaseModel
{
    public function lecturerCourseResultUpload()
    {
    	return $this->belongsTo(lecturerCourseResultUpload::class);
    }
}
