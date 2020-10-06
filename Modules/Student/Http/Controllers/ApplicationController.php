<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\QualificationType;
use Modules\Student\Entities\MaritalStatus;
use Modules\Student\Entities\Application;
use Modules\Student\Entities\Sponsor;
use Modules\Lecturer\Entities\Gender;
use Modules\Lecturer\Entities\Religion;
use Modules\Coodinator\Entities\Programme;
use Modules\Coodinator\Entities\Lga;
use Modules\Coodinator\Entities\State;
use Modules\Coodinator\Services\Admission\FileUpload;

class ApplicationController extends Controller
{
    use FileUpload;
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create($programmeId)
    {
        $programme = Programme::find($programmeId);
        if(is_null($programme)){
            return back()->withWarning('invalid programme ID');
        }

        if($programme->application_status == 0){
            return back()->withWarning('sorry application for this programme is currently close');
        }

        return view('student::application.create',[
            'programme'=>$programme,
            'qualifications'=>QualificationType::all(),
            'states'=>State::all(),
            'maritalStatuses'=>MaritalStatus::all(),
            'genders'=>Gender::all(),
            'religions'=>Religion::all()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function register(Request $request, $programmeId)
    {
        $lga = Lga::find($request->lga);
        $programme = Programme::find($programmeId);
        $address = $lga->addresses()->firstOrCreate(['address'=>$request->address]);
        
        $application = $address->applications()->create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'other_name'=>$request->other_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'gender_id'=>$request->gender,
            'religion_id'=>$request->religion,
            'session_id'=>currentSession()->id,
            'marital_status_id'=>$request->marital_status,
            'date_of_birth'=>$request->date_of_birth,
            'programme_id'=>$programmeId,
            'application_no'=>$programme->generateApplicationNo(),
            'image'=>$this->storeFile($request->image,'Images/Applications/'),
            ]);
        $sponsor = Sponsor::firstOrCreate([
            'name'=>$request->sponsor_name,
            'address'=>$request->sponsor_address,
            ]);
            
        $application->update(['sponsor_id'=>$sponsor->id]);
        
        foreach ($request->subjects as $subjectKey => $subjectValue) {
            foreach ($request->grades as $gradeKey => $gradeValue) {
                if ($subjectKey == $gradeKey) {
                    $application->applicationQualifications()->firstOrCreate([
                        'qualification_type_subject_id'=>$subjectValue,
                        'grade'=>$gradeValue,
                        'year'=>$request->year,
                    ]);
                }
            }
        }
        return redirect()->route('programme.application.slip',[$application->programme->id,$application->id])->withSuccess('Application submitted successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function slip($programmeId, $applicationId)
    {
        $application = Application::find($applicationId);
        if(is_null($application)){
            return back()->withWarning('invalid application ID');
        }
        return view('student::application.slip',['application'=>$application]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('student::edit');
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
