<?php

namespace Modules\ExamOfficer\Http\Controllers\Course;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Coodinator\Entities\Course;
use Modules\Coodinator\Entities\Programme;
use Modules\Lecturer\Entities\Lecturer;
use Modules\Lecturer\Entities\LecturerCourse;
use App\Http\Controllers\ExamOfficer\ExamOfficerBaseController;

class CourseAllocationController extends ExamOfficerBaseController
{
    public function index()
    {
        return view('examofficer::course.courseAllocation.index',[
            'route'=>'exam.officer.department.course.allocation.search'
        ]);
    }

    public function register(Request $request)
    {
        $request->validate(['lecturer'=>'required']);
        
        if($this->courseHasAllocation($request->all())){
            $allocation = $this->getLecturerCourse($request->all());
            if($allocation->lecturer->id != $request->lecturer){
                $allocation->update(['is_active'=>0]);
                $this->createNewAllocation($request->all());
            }else{
                session()->flash('error',['The allocation already exist please choose another lecturer for the re allocation']);
            }
        }else{
            $this->createNewAllocation($request->all());
        }

        if(!session('error')){
            session()->flash('message','The course allocation is updated successfully');
        }

        return back();
    }

    public function searchCourses(Request $request)
    {
        $request->validate(['programme'=>'required']);
        return redirect()->route('exam.officer.department.course.allocation.view',$request->programme);
        
    }
    public function viewCourses($programmeId)
    {
        return view('examofficer::course.courseAllocation.register',[
            'route'=>'exam.officer.department.course.allocation.register',
            'programme'=>Programme::find($programmeId)
        ]);
    }
    public function createNewAllocation(array $data)
    {
        LecturerCourse::create([
            'course_id'=> $data['course'],
            'lecturer_id'=>$data['lecturer'],
            'from' => time()
        ]);
    }

    public function getLecturerCourse(array $data)
    {
        return $course_lecturer = LecturerCourse::where(['course_id'=>$data['course'],'is_active'=>1])->first();
    }

    public function courseHasAllocation(array $data)
    {
        if(!Course::find($data['course'])->courseLecturer()){
            return false;
        }

        return true;
    }
}
