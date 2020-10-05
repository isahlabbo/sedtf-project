<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;
use Modules\Coodinator\Services\Results\UnApprovedResult;
use Modules\Coodinator\Services\Admission\FileUpload;
use Modules\Coodinator\Services\Admission\CanAdmittStudent;
use Modules\Coodinator\Services\Admission\AdmissionNumberGenerator;

class Programme extends BaseModel
{
	use AdmissionNumberGenerator, CanAdmittStudent, FileUpload, UnApprovedResult;

    public function programmeCourses()
    {
    	return $this->hasMany(ProgrammeCourse::class);
    }

    public function programmeSchedules()
    {
    	return $this->hasMany(ProgrammeSchedule::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function programmeType()
    {
    	return $this->belongsTo(ProgrammeType::class);
    }

    public function applications()
    {
        return $this->hasMany('Modules\Student\Entities\Application');
    }

    public function admissions()
    {
    	return $this->hasMany(Admission::class);
    }

    public function programmeSessionAdmissions()
    {
    	return $this->hasMany(ProgrammeSessionAdmission::class);
    }

    public function reservedProgrammeSessionAdmissions()
    {
        return $this->hasMany(ReservedProgrammeSessionAdmission::class);
    }

    public function courseRegistrations()
    {
        return $this->belongsTo('Modules\Coodinator\Entities\CourseRegistration');
    }

    public function hasMorningSchedule()
    {
        $flag = false;
        foreach ($this->programmeSchedules->where('schedule_id',1) as $key => $value) {
            $flag = true;
        }
        return $flag;
    }

    public function hasEveningSchedule()
    {
        $flag = false;
        foreach ($this->programmeSchedules->where('schedule_id',2) as $key => $value) {
            $flag = true;
        }
        return $flag;
    }

    public function generateApplicationNo()
    {
        return $this->code.'_'
        .substr(date('Y'),2,2)
        .$this->getBatch()
        .$this->getApplicationCount();
    }

    public function getApplicationCount()
    {
        $count = 1;
        foreach ($this->applications->where(['session_id'=>currentSession()->id]) as $application) {
            $count +1;
        }
        return $count;
    }
}
