<?php
namespace Modules\Coodinator\Services\Admission;

use Modules\Coodinator\Entities\ReservedProgrammeSessionAdmission;

trait AdmissionNumberGenerator

{
	public function generateAdmissionNo($schedule)
	{
        $this->schedule = $schedule;
		$reservedAdmission = $this->getAdmissionFromTheReserved();
		  
		if($reservedAdmission){
			$admissionNo = $reservedAdmission->admission_no;
			$reservedAdmission->delete();
		}else{
			$admissionNo =  
					$this->code.'/'.
					substr(currentSession()->name,5).$this->getBatch().'/'.
					$this->getAdmissionSerialNo();
		}
		return $admissionNo;
	}

	public function getBatch()
	{
		$batch = null;
		$month = date('m');
		if(substr($this->code, 0,1) == 'C'){
            if(in_array($month, [1,2,3])){
            	$batch = 'A';
            }
            if(in_array($month, [4,5,6])){
            	$batch = 'B';
            }
            if(in_array($month, [7,8,9])){
            	$batch = 'C';
            }
            if(in_array($month, [10,11,12])){
            	$batch = 'D';
            }
		}else{
			if(in_array($month, [1,2,3,4,5,6])){
            	$batch = 'A';
            }
            if(in_array($month, [7,8,9,10,11,12])){
            	$batch = 'B';
            }
		}
		return $batch;
	}

    public function getAdmissionFromTheReserved()
    {
    	$admission = null;
    	foreach (ReservedProgrammeSessionAdmission::where([
            'programme_id'=> $this->id,
            'session_id'=> currentSession()->id,
            'schedule_id'=>$this->schedule
    	])->get() as $reservedAdmission) {
    		if(!$admission){
                $admission = $reservedAdmission;
    		}
    	}
    	return $admission;
    }
    
	public function getAdmissionSerialNo()
	{
		
		return $this->formatThisSerialNo($this->getAdmissionCounter());
	}

    public function getAdmissionCounter()
    {
    	$counter = $this->programmeSessionAdmissions()->firstOrCreate([
            'session_id' => currentSession()->id,
            'schedule_id'=> $this->schedule
    	]);
    	
    	return $counter->count + 1;
    }

	public function formatThisSerialNo($no)
	{

		//if the schedule is evening start allocation from 40 to above
		if($this->schedule > 2 && $no == 1){
			$no = 40;
		}
        
        //if the allocated no for morning reaches 40 or evening reaches 80 then return error
		if($this->schedule <= 2 && $no >= 40 || $this->schedule > 2 && $no > 80){
			session()->flash('error', 'Sorry you have exceded the number admission');
			return back();
		}else{

			//go ahead and format the number
			if($no <= 9){
				$valid_no = '00'.$no;
			}elseif ($no < 100) {
				$valid_no = '0'.$no;
			}else{
				$valid_no = $no;
			}
		}
		
		//return the formated number
		return $valid_no;
	}
}