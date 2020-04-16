<?php

namespace Modules\ExamOfficer\Http\Controllers\Admission;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Modules\Coodinator\Entities\Admission;
use Modules\Coodinator\Entities\Programme;
use App\Http\Controllers\ExamOfficer\ExamOfficerBaseController;

class AdmissionController extends ExamOfficerBaseController
{
   /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('examofficer::admission.index');
    }

    public function generateNumberIndex()
    {
        return view('examofficer::admission.create');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('examofficer::admission.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function generateNumber(Request $request)
    {

        $request->validate([
            'programme'=>'required',
        ]);
        
        $admissionNo = Programme::find($request->programme)->generateAdmissionNo($request->schedule);

        return redirect()->route('exam.officer.student.admission.register.generated.number.index',[str_replace('/','-',$admissionNo),$request->schedule]);
    }

    public function generatedNumberRegistration()
    {       
        return view('examofficer::.admission.register',[
            'admissionNo'=>str_replace('-','/',request()->route('admissionNo'))
        ]);
    }

    public function registerGeneratedNumber(AdmissionFormRequest $request)
    {
        $student = Programme::where('code',substr($request->admissionNo, 0, 3))->first()->registerNewStudent($request->all());
        return redirect()->route('exam.officer.student.view.biodata',[$student->id]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function revokeAdmission($admission_id)
    {
        Admission::find($admission_id)->revokeThisAdmission();

        return redirect()->route('exam.officer.student.admission.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($admission_id)
    {
        return view('examofficer::admission.edit',['admission'=>Admission::find($admission_id)]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $admission_id)
    {
        Admission::find($admission_id)->updateThisAdmission($request->all());

        return back();

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function delete($admission_id)
    {
        
        $admission = Admission::find($admission_id);
        $admission->reservedThisAdmissionNo();
        $admission->student->studentAccount->delete();
        $admission->student->delete();
        $admission->delete();

        session()->flash('message','Congratulation this admission is deleted successfully');
        return redirect()->route('exam.officer.student.admission.index');
    }
}
