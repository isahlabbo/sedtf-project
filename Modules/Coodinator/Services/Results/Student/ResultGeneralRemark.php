<?php
namespace Modules\Coodinator\Services\Results\Student;

trait ResultGeneralRemark

{
	public function generalRemarks()
	{
		
		if($this->failedAllCoursesInThisSession()){
            $remark = 'WITH DRAW';
		}elseif($this->passedAllCoursesInThisSession()){
			$gpa = $this->cummulativeGradePointAverage();
			if($gpa >= 4.50){
				$remark = 'Distinction';
			}elseif ($gpa >= 3.50) {
				$remark = 'Upper Creadit';
			}elseif ($gpa >= 2.50) {
				$remark = 'Lower Credit';
			}elseif ($gpa >= 1.50) {
				$remark = 'Merit';
			}elseif ($gpa >= 1.00) {
				$remark = 'Passed';
			}else{
				$remark = 'Undefine';
			}
            
		}else{
            $remark = $this->toRepeatCourses();
		}
		
		return ['remark'=>$remark,'conditions'=>$this->remarkConditions()];
	}

	

	public function failedAllCoursesInThisSession()
	{
		
		foreach ($this->sessionRegistrations as $sessionRegistration) {
			if($sessionRegistration->allCoursesUploaded() && $sessionRegistration->passedResults() == 0){
				return true;
			}
		}
		
	}

	public function passedAllCoursesInThisSession()
	{
		foreach ($this->sessionRegistrations as $sessionRegistration) {
			if(empty($sessionRegistration->failedResults()) && $sessionRegistration->allCoursesUploaded())
			{
				return true;
			}
		}
	}

	public function toRepeatCourses()
	{
		foreach ($this->sessionRegistrations as $sessionRegistration) {
			if(!empty($sessionRegistration->failedResults())){
			    $courses = 'RPT';
			}else{
			    $courses = '';
			}
			foreach($sessionRegistration->failedResults() as $course){
	            $courses = $courses.' '.$course->code;
			}
		}
		return $courses;
	}

	
    
    public function remarkConditions()
    {
    	$conditions = [];

    	
    	return $conditions;
    }                  	
}