<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class Session extends BaseModel
{
    public function admissions()
    {
    	return $this->hasMany(Admission::class);
    }

    public function graduatedStudents()
    {
        $students = [];
        foreach($this->sessionRegistrations->where('programme_id',$this->programme) as $sessionRegistration){
            if($sessionRegistration->student->graduatedAt($this)){
                $students[] = $sessionRegistration->student;
            }
        }
        return $students;
    }

    public function spilledStudents()
    {
        $students = [];
        foreach($this->sessionRegistrations->where('programme_id',$this->programme) as $sessionRegistration){
            if($sessionRegistration->student->spillededAt($this)){
                $students[] = $sessionRegistration->student;
            }
        }
        return $students;
    }

    public function sessionRegistrations()
    {
        return $this->hasMany('Modules\Student\Entities\SessionRegistration');
    }
}
