<?php
namespace Modules\Student\Services\Traits\Student;

trait HasGraduationStatus

{
	public function graduationYearLimit()
	{
		$this->admission->year+$this->yearsToGraduate();
	}

	public function yearsToGraduate()
	{
		$expectedYearsToGraduate = 3;
		if($this->diferredSessions){
			$expectedYearsToGraduate = $expectedYearsToGraduate + count($this->diferredSessions);
		}
		return $expectedYearsToGraduate;
	}

    public function currentSessionYear()
    {
    	return substr(currentSession()->name, 5);
    }

    public function canMakeCourseRegistration()
    {
    	if($this->yearsToGraduate() > $this->yearsSinceAdmission()){
    		return true;
    	}
    	return false;
    }

    public function graduated()
    {
        foreach ($this->sessionRegistrations as $sessionRegistration) {
            $failedCourses = $sessionRegistration->failedResults();
            $passedCourses = $sessionRegistration->passedResults();
        }
        
        if(count($failedCourses) == 0 && $passedCourses > 0){
            return true;
        }
        return false;
    }

    public function withDrawed()
    {
    	if(!empty($this->currentLevelReRegisterCourses()) && !$this->canMakeCourseRegistration()){
            return true;
        }
        return false;
    }

}