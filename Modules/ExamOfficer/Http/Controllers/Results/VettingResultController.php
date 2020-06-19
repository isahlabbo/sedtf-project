<?php

namespace Modules\ExamOfficer\Http\Controllers\Results;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Coodinator\Entities\Session;
use Modules\Coodinator\Entities\Programme;
use Modules\Coodinator\Services\Vetting\GenerateVettableResult;
use App\Http\Controllers\ExamOfficer\ExamOfficerBaseController;


class VettingResultController extends ExamOfficerBaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('examofficer::result.vetting.index',['route'=>'exam.officer.result.vetting.search','programmes'=>Programme::all(),'sessions'=>Session::all()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function search(Request $request)
    {
        $request->validate([
            'session'=>'required',
            'programme'=>'required',
            'batch'=>'required',
            'semester'=>'required',
            'paginate'=>'required'
        ]);

        session(['course_registrations'=>$request->all()]);
        return redirect()->route('exam.officer.result.vetting.view',[$request->semester]);
        
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $registration_id)
    {
        //
    }

    public function edit($registration_id)
    {
        # code...
    }

    public function view()
    {
        if(session('course_registrations')){
            
            $vetting = new GenerateVettableResult(session('course_registrations'));

            return view('coodinator::department.course.result.vetting.print',[
                'registrations'=>$vetting->results, 
                'programme'=>Programme::find(session('course_registrations')['programme']),
                'batch'=>session('course_registrations')['batch'],
                'session'=>Session::find(session('course_registrations')['session']),
            ]);
        }
        return redirect()->route('exam.officer.result.vetting.index');
        
    }
}
