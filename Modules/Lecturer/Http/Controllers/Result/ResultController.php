<?php

namespace Modules\Lecturer\Http\Controllers\Result;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Coodinator\Entities\Course;
use App\Http\Controllers\Lecturer\LecturerBaseController;

class ResultController extends LecturerBaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('lecturer::result.index');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function searchResult(Request $request)
    {
        $request->validate([
           'session'=>'required',
           'course'=>'required'
        ]); 
        $results = [];
        $course = Course::find($request->course);
        foreach ($course->courseRegistrations->where('session_id',$request->session) as $course_registration) {
            $results[] = $course_registration->result;
        }
        
        session(['results'=>$results]);
        return redirect()->route('lecturer.result.show');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function showResult()
    {
        return view('lecturer::result.show');
    }


}
