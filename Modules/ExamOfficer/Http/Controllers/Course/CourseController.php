<?php

namespace Modules\ExamOfficer\Http\Controllers\Course;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Coodinator\Entities\Course;
use Modules\Coodinator\Entities\Programme;
use App\Http\Controllers\ExamOfficer\ExamOfficerBaseController;

class CourseController extends ExamOfficerBaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('examofficer::course.index',['route'=>[
                'edit'=>'exam.officer.department.course.edit',
                'delete'=>'exam.officer.department.course.delete',
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('examofficer::course.create',['route'=>'exam.officer.department.course.register']);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        $course = Course::firstOrCreate([
            'code'=>$request->code,
            'title'=>$request->title,
            'semester_id'=>$request->semester,
            'unit'=>$request->unit
        ]);
        $course->programmeCourses()->firstOrCreate(['programme_id'=>$request->programme]);
        session()->flash('message','Course is created successfully');
        return redirect()->route('exam.officer.department.course.index',['route'=>[
                'edit'=>'exam.officer.department.course.edit',
                'delete'=>'exam.officer.department.course.delete',
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($course_id)
    {
        return view('examofficer::course.edit',['route'=>'exam.officer.department.course.update','course'=>Course::find($course_id)]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $course_id)
    {
        $programme = Programme::find($request->programme);
        $course = Course::find($course_id);
        if($course->courseProgramme()->id != $programme->id){
            foreach ($course->programmeCourses as $programmeCourse) {
                $programmeCourse->update(['programme_id'=>$prgramme->id]);
            }
        }
        $course->update([
            'code'=>$request->code,
            'title'=>$request->title,
            'semester_id'=>$request->semester,
            'unit'=>$request->unit
        ]);
        
        
        session()->flash('message','Course is updated successfully');
        return redirect()->route('exam.officer.department.course.index',['route'=>[
                'edit'=>'exam.officer.department.course.edit',
                'delete'=>'exam.officer.department.course.delete',
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function delete($course_id)
    {
        $errors = [];
        $course = Course::find($course_id);
        //check if this course is not allocated to any lecturer
        if($course->lecturerCourseAllocation){
            $errors[] = 'Sorry this course is already been allocated to some lecturer to delete it you have to delete the allocation';
        }
        if($course->departmentCourses){
            $errors[] = 'Sorry this course is already been assigned to some department to delete it you have to delete the department course assignment';
        }
        if(empty($errors)){
            $course->delete();
            session()->flash('message','Course is deleted successfully');
        }else{
            session()->flash('error',$errors);
        }
        return redirect()->route('exam.officer.department.course.index',['route'=>[
                'edit'=>'exam.officer.department.course.edit',
                'delete'=>'exam.officer.department.course.delete',
            ]
        ]);
    }
}
