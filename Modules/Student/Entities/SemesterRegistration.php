<?php

namespace Modules\Student\Entities;

use App\BaseModel;
use Modules\Coodinator\Services\Results\Student\ResultGeneralRemark;
use Modules\Student\Services\Traits\Student\HasGradePointCalculator as Calculator;

class SemesterRegistration extends BaseModel
{
	use ResultGeneralRemark, Calculator;

    public function sessionRegistration()
    {
    	return $this->belongsTo(SessionRegistration::class);
    }

    
    
    public function courseRegistrations()
    {
    	return $this->hasMany(CourseRegistration::class);
    }

    public function semester()
    {
    	return $this->belongsTo('Modules\Coodinator\Entities\Semester');
    }

    

}
