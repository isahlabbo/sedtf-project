<?php

namespace Modules\Lecturer\Entities;

use App\BaseModel;

class LecturerCourseResultUpload extends BaseModel
{
    public function lecturerCourse()
    {
    	return $this->belongsTo('Modules\Lecturer\Entities\LecturerCourse');
    }
    
    public function lecturerCourseResultUploadNotifications()
    {
    	return $this->hasMany('Modules\Lecturer\Entities\LecturerCourseResultUploadNotification');
    }

    public function session()
    {
    	return $this->belongsTo('Modules\Coodinator\Entities\Session');
    }

    public function results()
    {
    	return $this->hasMany('Modules\Student\Entities\Result');
    }

    public function lecturerCourseResultUploadFiles()
    {
        return $this->hasMany(LecturerCourseResultUploadFile::class);
    }

    public function numberOfAs()
    {
    	return count($this->results->where('grade','A'));
    }

    

    public function numberOfBs()
    {
    	return count($this->results->where('grade','B'));
    }


    public function numberOfCs()
    {
    	return count($this->results->where('grade','C'));
    }


    public function numberOfDs()
    {
    	return count($this->results->where('grade','D'));
    }

    public function numberOfEs()
    {
    	return count($this->results->where('grade','E'));
    }

    public function numberOfFs()
    {
    	return count($this->results->where('grade','F'));
    }

    
}
