<?php

namespace Modules\Lecturer\Entities;

use Illuminate\Support\Carbon;
use Modules\Admin\Entities\Session;
use Modules\Coodinator\Entities\Programme;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lecturer extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'from',
        'email',
        'phone',
        'password',
        'staff_id',
        'admin_id',
        'real_pass'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function programmes()
    {
        return Programme::all();
    }
    
    public function lecturerNotifications()
    {
        return $this->hasMany(LecturerNotification::class);
    }
    
    public function lecturerCourses()
    {
        return $this->hasMany(LecturerCourse::class);
    }

    public function notifications()
    {
        return $this->hasMany('Modules\Coodinator\Entities\Notification');
    }

    public function duration()
    {
        if(!$this->to){
            $this->to = Carbon::now();
        }
        $count = Carbon::parse($this->from)->diffInYears($this->to);
        $year = 'Year';
        if($count > 1){
            $year = 'Years';
        }
        return $count.' '.$year;
    }

    public function sessions()
    {
        return Session::all();
    }

    public function lecturerAvailableCourses()
    {
        $courses = [];
        foreach ($this->lecturerCourses as $lecturer_course) {
            if($lecturer_course->is_active == 1 && $lecturer_course->lecturer_course_status_id == 1){
                $courses[] = $lecturer_course;
            }
        }
        return $courses;
    }

    public function hasValidExamOfficerAppointment()
    {
        $status = false;    
        // foreach ($this->departmentalAppointments as $appointment) {
        //     if($appointment->appointment_id == 1 && $appointment->is_active == 1){
        //         $status = true;
        //     }
        // }
        return $status;
    }

}
