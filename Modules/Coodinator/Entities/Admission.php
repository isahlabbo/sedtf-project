<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;
use Modules\Lecturer\Entities\Tribe;
use Modules\Lecturer\Entities\Gender;
use Modules\Lecturer\Entities\Religion;
use Modules\Coodinator\Services\Admission\AfterAdmission;
use Modules\Coodinator\Services\Admission\AdmissionHasDetail;
use Modules\Coodinator\Services\Admission\CanUpdateAdmission as UpdateAble;
class Admission extends BaseModel
{
    use AfterAdmission, AdmissionHasDetail, UpdateAble;

    public function programme()
    {
    	return $this->belongsTo(Programme::class);
    }

    public function session()
    {
    	return $this->belongsTo(Session::class);
    }

    public function coodinator()
    {
    	return $this->belongsTo(Coodinator::class);
    }

    public function student()
    {
    	return $this->hasOne('Modules\Student\Entities\Student');
    }

    public function application()
    {
    	return $this->belongsTo('Modules\Student\Entities\Application');
    }

    public function schedule()
    {
        return $this->belongsTo('Modules\Student\Entities\Schedule');
    }

    public function courseRegistrations()
    {
        return $this->hasMany('Modules\Student\Entities\CourseRegistration');
    }

    public function genders()
    {
        return Gender::all();
    }

    public function religions()
    {
        return Religion::all();
    }

    public function tribes()
    {
        return Tribe::all();
    }
    
}
