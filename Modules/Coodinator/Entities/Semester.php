<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class Semester extends BaseModel
{
    public function courses()
    {
    	return $this->hasMany(Course::class);
    }

    public function semesterRegistrations()
    {
    	return $this->hasMany('Modules\Student\Entities\SemesterRegistration');
    }
}
