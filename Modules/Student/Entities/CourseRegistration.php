<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class CourseRegistration extends BaseModel
{

    public function course()
    {
    	return $this->belongsTo('Modules\Coodinator\Entities\Course');
    }

    public function result()
    {
    	return $this->hasOne(Result::class);
    }

    public function remark()
    {
    	return $this->belongsTo(Remark::class);
    }

    public function semesterRegistration()
    {
        return $this->belongsTo(SemesterRegistration::class);
    }

    public function repeatCourse()
    {
        return $this->hasOne(RepeatCourse::class);
    }

    public function admission()
    {
        return $this->belongsTo('Modules\Coodinator\Entities\Admission');
    }
    
    public function session()
    {
        return $this->belongsTo('Modules\Coodinator\Entities\Session');
    }

    public function programme()
    {
        return $this->belongsTo('Modules\Coodinator\Entities\Programme');
    }
    
}
