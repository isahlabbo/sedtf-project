<?php
namespace Modules\Coodinator\Services\Admission;

use Illuminate\Support\Facades\Hash;

trait CanAdmittStudent

{
	public function registerNewStudent($data)
	{
        $this->data = $data;

        $this->verifyEmail();
		$student = $this->registerStudentAdmission();

		session()->flash('message','Congratulation this admission is registered successfully and this student can logged in as student using '.$data['admissionNo'].' as user name and '.$data['admissionNo'].' as his password');
		return $student;
	}
    public function verifyEmail()
    {
        $this->data['email'] ?? $this->data['admissionNo'].'@sedtf.com';
    }
	public function registerStudentAdmission()
	{
		$admission = $this->admissions()->firstOrCreate([
            'admission_no'=>$this->data['admissionNo'],
            'schedule_id'=>$this->data['schedule'],
            'coodinator_id'=>currentCoodinator()->id,
            'session_id'=>currentSession()->id,
            'year'=> substr(currentSession()->name, 5)
        ]);
        //get the admission count
        $admissionCount = null;
        foreach ($admission->programme->programmeSessionAdmissions->where('session_id',currentSession()->id) as $thisAdmissionCount) {
            $admissionCount = $thisAdmissionCount;
        }
        //increment the count
        $admissionCount->update(['count'=>$admissionCount->count+1]);

        return $this->registerStudent($admission);
        
	}

	public function registerStudent($admission)
	{
		$student = $admission->student()->firstOrCreate([
            'first_name'=> strtoupper($this->data['first_name']),
            'last_name'=> strtoupper($this->data['last_name']),
            'middle_name'=> strtoupper($this->data['middle_name']),
            'user_name'=>$this->data['admissionNo'],
            'email'=> $this->data['email'],
            'phone'=>$this->data['phone'],
            'password'=> Hash::make($this->data['phone']),
        ]);
        $this->registerStudentAccount($student);
        return $student;
	}

	public function registerStudentAccount($student)
	{

		$account = $student->studentAccount()->firstOrCreate([
            'gender_id'=>$this->data['gender'],
            'religion_id'=>$this->data['religion'],
            'lga_id'=>$this->data['lga'],
            'address'=>$this->data['address']
        ]);

        $image = $this->storeFile($this->data['picture'],str_replace('/','-',$student->admission->programme->name).'/Admission/Profile');
        $account->update(['picture'=>$image]);

	}

}