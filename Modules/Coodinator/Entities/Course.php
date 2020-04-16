<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class Course extends BaseModel
{
    public function programmeCourses()
    {
    	return $this->hasMany(ProgrammeCourse::class);
    }

    public function semester()
    {
    	return $this->belongsTo(Semester::class);
    }

    public function lecturerCourses()
    {
    	return $this->hasMany('Modules\Lecturer\Entities\LecturerCourse');
    }

    public function courseProgramme()
    {

    	$programme = null;
    	foreach ($this->programmeCourses as $programmeCourse) {
    		$programme = $programmeCourse->programme;
    	}

    	return $programme;
    }

    public function courseLecturer()
    {
        foreach ($this->lecturerCourses->where('is_active',1) as $lecturerCourse) {
            return $lecturerCourse->lecturer;
        }
    }
}
