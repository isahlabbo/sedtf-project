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
}
