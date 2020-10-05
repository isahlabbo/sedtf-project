<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class Application extends BaseModel
{
    public function address(Type $var = null)
    {
        return $this->belongsTo(Address::class);
    }

    public function gender()
    {
        return $this->belongsTo('Modules\Lecturer\Entities\Gender');
    }

    public function programme()
    {
        return $this->belongsTo('Modules\Coodinator\Entities\Programme');
    }

    public function maritalStatus()
    {
        return $this->belongsTo(MaritalStatus::class);
    }

    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class);
    }

    public function applicationQualifications()
    {
        return $this->hasMany(ApplicationQualification::class);
    }

    public function qualificationName()
    {
        foreach ($this->applicationQualifications as $applicationQualification) {
            return $applicationQualification->qualificationTypeSubject->qualificationType->name;
        }
    }

}
