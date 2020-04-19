<?php

namespace Modules\Lecturer\Entities;

use App\BaseModel;

class LecturerCourse extends BaseModel
{
    public function lecturer()
    {
    	return $this->belongsTo(Lecturer::class);
    }

    public function course()
    {
    	return $this->belongsTo('Modules\Coodinator\Entities\Course');
    }
    
    public function lecturerCourseResultUploads()
    {
        return $this->hasMany(LecturerCourseResultUpload::class);
    }
    public function hasUploadedCurrentSessionResult()
    {
        $flag = false;
        foreach($this->lecturerCourseResultUploads->where('session_id',currentSession()->id) as $upload){
            $flag = true;
        }
        return $flag;
    }
}
