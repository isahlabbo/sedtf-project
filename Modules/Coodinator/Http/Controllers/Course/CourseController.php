<?php

namespace Modules\Coodinator\Http\Controllers\Course;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Coodinator\Entities\Course;
use App\Http\Controllers\Coodinator\CoodinatorBaseController;

class CourseController extends CoodinatorBaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('coodinator::department.course.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('coodinator::department.course.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        $course = headOfDepartment()->department->courses()->create([
            'code'=>$request->code,
            'title'=>$request->title,
            'level_id'=>$request->level,
            'semester_id'=>$request->semester,
            'unit'=>$request->unit
        ]);
        headOfDepartment()->department->departmentCourses()->create(['course_id'=>$course->id]);
        session()->flash('message','Course is created successfully');
        return redirect()->route('department.course.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $course_id
     * @return Response
     */
    public function edit($course_id)
    {
        return view('coodinator::department.course.edit',['course'=>Course::find($course_id)]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $course_id
     * @return Response
     */
    public function update(Request $request, $course_id)
    {
        $course = Course::find($course_id);
        $course->update([
            'code'=>$request->code,
            'title'=>$request->title,
            'semester_id'=>$request->semester,
            'unit'=>$request->unit
        ]);
        return redirect()->route('coodinator.course.index')->withSuccess('Course Updated');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $course_id
     * @return Response
     */
    public function delete($course_id)
    {
        $errors = null;
        $course = Course::find($course_id);
        //check if this course is not allocated to any lecturer
        if($course->lecturerCourseAllocation){
            $error = 'Sorry this course is already been allocated to some lecturer to delete it you have to delete the allocation';
        }
        if($course->departmentCourses){
            $error = 'Sorry this course is already been assigned to some department to delete it you have to delete the department course assignment';
        }
        if(empty($errors)){
            foreach ($course->programmeCourses as $programmeCourse) {
                $programmeCourse->delete();
            }
            $course->delete();
            return redirect()->route('coodinator.course.index')->withSuccess('Course Deleted');
        }else{
            return redirect()->route('coodinator.course.index')->withWarning($error);
        }
    }
}
