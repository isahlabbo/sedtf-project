<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class Schedule extends BaseModel
{

    public function admissions()
    {
    	return $this->hasMany('Modules\Coodinator\Entities\Admission');
    }

    public function programmeSessionAdmissions()
    {
    	return $this->hasMany('Modules\Coodinator\Entities\ProgrammeSessionAdmission');
    }

    public function reservedProgrammeSessionAdmissions()
    {
    	return $this->hasMany('Modules\Coodinator\Entities\ReservedProgrammeSessionAdmission');
    }

    public function programmeSchedules()
    {
    	return $this->hasMany('Modules\Coodinator\Entities\ProgrammeSchedule');
    }

}
