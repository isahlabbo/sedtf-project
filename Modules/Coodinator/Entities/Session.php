<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class Session extends BaseModel
{
    public function admissions()
    {
    	return $this->hasMany(Admission::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function graduatedStudents($programme)
    {

        $students = [];
        foreach($this->sessionRegistrations->where('programme_id',$programme->id) as $sessionRegistration){
            if($sessionRegistration->student->graduatedAt($this)){
                $students[] = $sessionRegistration->student;
            }
        }
        return $students;
    }

    public function spilledStudents($programme)
    {
        $students = [];
        foreach($this->sessionRegistrations->where('programme_id',$programme->id) as $sessionRegistration){
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
