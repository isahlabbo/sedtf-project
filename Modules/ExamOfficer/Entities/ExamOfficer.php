<?php

namespace Modules\ExamOfficer\Entities;

use Illuminate\Support\Carbon;
use Modules\Coodinator\Entities\Session;
use Modules\Lecturer\Entities\Staff;
use Modules\Coodinator\Entities\Lga;
use Modules\Coodinator\Entities\State;
use Modules\Coodinator\Entities\Programme;
use Modules\Coodinator\Entities\Admission;
use Illuminate\Notifications\Notifiable;
use Modules\Lecturer\Entities\Gender;
use Modules\Lecturer\Entities\Religion;
use Modules\Coodinator\Entities\Semester;
use Modules\Student\Entities\Schedule;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ExamOfficer extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
    	'email',
    	'password',
    	'lecturer_id',
    	'from',
    	'to',
    	'coodinator_id'
    ];

    public function lecturer()
    {
        return $this->belongsTo('Modules\Lecturer\Entities\Lecturer');
    }

    public function coodinator()
    {
        return $this->belongsTo('Modules\Coodinator\Entities\Coodinator');
    }

    public function states()
    {
        return State::all();
    }

    public function lgas()
    {
        return Lga::all();
    }

    public function duration()
    {
        $start = Carbon::now();
        if($this->to){
            $start = Carbon::parse($this->to);
        }
        $count = Carbon::parse($this->from)->diffInYears($start);
       
        return $count;
    }

    

    public function sessions()
    {
        return Session::all();
    }

    public function staffs()
    {
        return Staff::all();
    }

    public function semesters()
    {
        return Semester::all();
    }
    
    public function genders()
    {
        return Gender::all();
    }

    public function religions()
    {
        return Religion::all();
    }

    public function programmes()
    {
        return Programme::all();
    }
    public function myCoursesId()
    {
        $ids = [];
        foreach($this->lecturer->lecturerCourses as $lecturer_course){
            if($lecturer_course->is_active == 1){
               $ids[] = $lecturer_course->course->id;
            }
        }
        return $ids;
    }

    public function schedules()
    {
        return Schedule::all()->where('id','>','1');
    }

    public function admissions()
    {
        $admissions = [];
        foreach(Admission::where('session_id',currentSession()->id)->get() as $admission){
           $admissions[] = $admission;
        }
        return $admissions;
    }
}
