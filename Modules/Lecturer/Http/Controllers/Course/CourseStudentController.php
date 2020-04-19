<?php

namespace Modules\Lecturer\Http\Controllers\Course;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Student\Entities\Student;
use Modules\Coodinator\Entities\Course;
use Modules\Coodinator\Entities\Programme;
use App\Http\Controllers\Lecturer\LecturerBaseController;

class CourseStudentController extends LecturerBaseController
{
    public $students;

    public function index()
    {
        
        return view('lecturer::course.student.index');
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function availableStudents()
    {
      
        return view('lecturer::course.student.available_student',['students'=>session('students')]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function registeredStudents()
    {
        return view('lecturer::course.student.registered_student',['student_courses'=>session('students')]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'session'=>'required',
            'programme'=>'required',
            'specification'=>'required',
            'course'=>'required'
        ]);
        $course = Course::find($request->course);
        $students = [];
        switch ($request->specification) {
            case '1':
                //get all the available students for this course
                foreach (Programme::find($request->programme)->admissions->where('session_id',$request->session) as $admission){
                    $students[] = $admission->student;
                }
                
                session(['students'=>$students]);
                $route = "lecturer.courses.students.available";
                $message = count($students).' Available Student Found for '.$course->code.' in '.currentSession()->name.' Session';
                break;
            
            default:
                //get all the registered students for this course
                foreach ($course->courseRegistrations->where('session_id',currentSession()->id) as $course_registration) {
                    if($course_registration->semesterRegistration->sessionRegistration->student->admission->programme->id == $request->programme){
                        $students[] = $course_registration->semesterRegistration->sessionRegistration->student;
                    }
                }
                
                $route = "lecturer.courses.students.registered";
                session(['students'=>$students]);
                $message = count($students).' Registered Student Found for '.$course->code.' in '.currentSession()->name.' Session';
                break;
        }
        session()->flash('message', $message);
        return redirect()->route($route);
    }
}
