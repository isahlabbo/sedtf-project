<?php

namespace Modules\Coodinator\Http\Controllers\Programme;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Student\Entities\Application;
use App\Http\Controllers\Coodinator\CoodinatorBaseController;

class ApplicationController extends CoodinatorBaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('coodinator::department.programme.application.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('coodinator::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function review($applicationId)
    {
        $application = Application::find($applicationId);
        if(is_null($application)){
            return back()->withWarning('Invalid ApplicationID');
        }
        return view('coodinator::department.programme.application.view',['application'=>$application]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function approve(Request $request, $applicationId)
    {
        $application = Application::find($applicationId);
        if(is_null($application)){
            return back()->withWarning('Invalid ApplicationID');
        }
        $admissionNo = $application->programme->generateAdmissionNo($request->schedule);
        $data = $application->data();
        $data['schedule'] = $request->schedule;
        $data['admissionNo'] = $admissionNo;
        $student = $application->programme->registerNewStudent($data);
        return redirect()->route('coodinator.student.view.biodata',[$student->id])
        ->withSuccess($student->admission
        ->admission_no.' was registered successfully for '.$student->admission->programme->name.' Batch '.$student->batch().' '.$student->admission->year);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
