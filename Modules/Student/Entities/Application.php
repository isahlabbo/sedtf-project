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

    public function admission()
    {
    	return $this->hasOne('Modules\Coodinator\Entities\Admission');
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

    public function data()
    {
        return [
            "first_name" => $this->first_name,
            "middle_name" => $this->other_name,
            "last_name" => $this->last_name,
            "gender" => $this->gender_id,
            "religion" => "1",
            "email" => $this->email,
            "phone" => $this->phone,
            "state" => $this->address->lga->state->id,
            "lga" => $this->address->lga->id,
            "address" => $this->address->address,
            "image" => $this->image,
            "application_id" => $this->id,
            "religion" => $this->religion_id,
        ];
  
    }

}
