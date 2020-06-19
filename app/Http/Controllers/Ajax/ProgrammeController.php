<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Department\Entities\Course;
use Modules\Coodinator\Entities\Programme;
use Modules\Coodinator\Entities\ProgrammeSchedule;

class ProgrammeController extends Controller
{

    public function getDepartmentCourses($departmentId)
    {
        return response()->json(Course::where('department_id',$departmentId)->pluck('code','id'));
    }

    public function getProgrammeCourses($programmeId)
    {
        return response()->json(Course::where('programme_id',$programmeId)->pluck('code','id'));
    }

    public function getProgrammeSchedules($programme_id)
    {
        $schedules = null;
        if($this->hasMorningSchedule($programme_id) && $this->hasEveningSchedule($programme_id)){
            $schedules = ['1'=>'MORNING','2'=>'EVENING'];
        }else if($this->hasMorningSchedule($programme_id)){
            $schedules = ['1'=>'MORNING'];
        }else if($this->hasEveningSchedule($programme_id)){
            $schedules = ['2'=>'EVENING'];
        }else{
            $schedules = [];
        }
        
        return response()->json(($schedules));
    }

    public function hasMorningSchedule($programme_id)
    {
        $flag = false;
        foreach (ProgrammeSchedule::where('programme_id', $programme_id)->get() as $programmeSchedule) {
            if($programmeSchedule->schedule_id == 1){
                $flag = true;
            }
        }
        return $flag;
    }

    public function hasEveningSchedule($programme_id)
    {
        $flag = false;
        foreach (ProgrammeSchedule::where('programme_id', $programme_id)->get() as $programmeSchedule) {
            if($programmeSchedule->schedule_id == 2){
                $flag = true;
            }
        }
        return $flag;
    }

    public function getProgrammeBatches($programmeId)
    {
        $programme = Programme::find($programmeId);
        switch ($programme->batches) {
            case '1':
                $batches = ['A'];
                break;

            case '2':
                $batches = ['A','B'];
                break;

            case '3':
                $batches = ['A','B','C'];
                break;

            case '4':
                $batches = ['A','B','C','D'];
                break;    
            default:
                $batches = [];
                break;
        }
        return response()->json(($batches));
    }

    public function getProgrammeSemesters($programmeId)
    {
        $programme = Programme::find($programmeId);
        switch ($programme->semesters) {
            case '1':
                $batches = ['1'=>'First'];
                break;

            case '2':
                $batches = ['1'=>'First','2'=>'Second'];
                break;

            case '3':
                $batches = ['1'=>'First','2'=>'Second','3'=>'Third'];
                break;
   
            default:
                $batches = [];
                break;
        }
        return response()->json(($batches));
    }
}
