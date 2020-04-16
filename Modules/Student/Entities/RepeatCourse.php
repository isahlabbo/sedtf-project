<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class RepeatCourse extends BaseModel
{
    public function course()
    {
    	return $this->belongsTo('Modules\Coodinator\Entities\Course');
    }

    public function student()
    {
    	return $this->belongsTo(Student::class);
    }

    public function session()
    {
    	return $this->belongsTo('Modules\Coodinator\Entities\Session');
    }
}
