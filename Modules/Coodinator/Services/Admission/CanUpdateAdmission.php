<?php
namespace Modules\Coodinator\Services\Admission;

use Illuminate\Support\Facades\Hash;
use Modules\Coodinator\Entities\Programme;

trait CanUpdateAdmission

{
    public function updateThisAdmission($data)
    {
    	if($this->needToGenerateAdmissionNo($data)){
    		$this->reservedThisAdmissionNo($data);
    		$this->update([
                'admission_no'=>$this->generateAnotherAdmissionNo($data),
    			'programme_id'=>$data['programme']
    	    ]);
    	}
    	$this->updateStudendInformation($data);
    	$this->updateStudentAccount($data);
    }

    public function needToGenerateAdmissionNo($data)
    {
    	if($data['programme'] != $this->programme->id){
            return true;
        }
    }

    public function reservedThisAdmissionNo($data)
    {
    	$this->programme->reservedProgrammeSessionAdmissions()->firstOrCreate([
            'session_id'=>currentSession()->id,
            'admission_no' => $this->admission_no
        ]);
    }

    public function generateAnotherAdmissionNo($data)
    {
    	return Programme::find($data['programme'])->generateAdmissionNo($data['schedule']);
    }

    public function updateStudendInformation($data)
    {
    	$student = $this->student->update([
            'first_name'=>strtoupper($data['first_name']),
            'last_name'=>strtoupper($data['last_name']),
            'middle_name'=>strtoupper($data['last_name']),
            'phone'=>$data['phone'],
            'email'=>$this->admission_no.'@sedtf.com',
            'password'=>Hash::make($this->data['phone'])
        ]);
    }

    public function updateStudentAccount($data)
    {
    	$this->student->studentAccount->update([
            'gender_id'=>$data['gender'],
            'religion_id'=>$data['religion'],
            'address'=>$data['address'],
            'lga_id'=>$data['lga'],
        ]);
        session()->flash('message','Congratulation this admission is updated successfully and this student can logged in as student using '.$this->admission_no.' as his user name and '.$this->admission_no.' as his password');
    }
}


       
        
        