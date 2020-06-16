<?php

namespace Modules\Coodinator\Entities;

use Illuminate\Support\Carbon;
use Illuminate\Notifications\Notifiable;
use Modules\Coodinator\Entities\Semester;
use Modules\Lecturer\Entities\Staff;
use Modules\Lecturer\Entities\Gender;
use Modules\Lecturer\Entities\Religion;
use Modules\Student\Entities\Schedule;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Coodinator extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
    	'email',
    	'password',
    	'admin_id',
    	'phone',
    	'from',
    	'to',
        'is_active',
    	'real_pass'
    ];

    public function staff()
    {
        return $this->belongsTo('Modules\Staff\Entities\Staff');
    }

    public function examOfficers()
    {
        return $this->hasMany('Modules\ExamOfficer\Entities\ExamOfficer');
    }

    public function admissions()
    {
        return $this->hasMany(Admission::class);
    }

    public function duration()
    {
        $start = Carbon::now();
        if($this->to){
            $start = Carbon::parse($this->to);
        }
        $count = Carbon::parse($this->from)->diffInMonths($start);
        $month = 'Month';
        if($count > 1){
            $month = 'Months';
        }
        return $count.' '.$month;
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

    public function states()
    {
        return State::all();
    }

    public function lgas()
    {
        return Lga::all();
    }

    public function schedules()
    {
        return Schedule::all()->where('id','>','1');
    }

}
