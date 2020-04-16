<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;
use Modules\Coodinator\Services\Admission\FileUpload;
use Modules\Coodinator\Services\Admission\CanAdmittStudent;
use Modules\Coodinator\Services\Admission\AdmissionNumberGenerator;

class Programme extends BaseModel
{
	use AdmissionNumberGenerator, CanAdmittStudent, FileUpload;

    public function programmeCourses()
    {
    	return $this->hasMany(ProgrammeCourse::class);
    }

    public function programmeSchedules()
    {
    	return $this->hasMany(ProgrammeSchedule::class);
    }

    public function programmeType()
    {
    	return $this->belongsTo(ProgrammeType::class);
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
}
