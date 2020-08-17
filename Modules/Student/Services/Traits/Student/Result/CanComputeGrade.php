<?php
namespace Modules\Student\Services\Traits\Student\Result;

trait CanComputeGrade
{
	public function computePoints($grade)
    {
    	switch ($grade) {
    		case 'A':
    			$point = 5.00;
    			break;
    		case 'B':
    			$point = 4.00;
    			break;
    		case 'C':
    			$point = 3.00;
    			break;
    		case 'D':
    			$point = 2.00;
    			break;
    		case 'E':
    			$point = 1.00;
    			break;
            
    		default:
    			$point = 0.00;
    			break;
    	}
        
    	$this->grade = $grade;
        if($point >= 2){
            $this->points = number_format($point,2);
        }else{
            $this->points = 0.00;
        }
        if($point >= 2){
            $this->remark_id = 4;
            if($this->courseRegistration->repeatCourseRegistration){
                $this->courseRegistration->repeatCourseRegistration->update(['status'=>0]);
            }
        }elseif($point == 0){
            $this->remark_id = 5;
            $this->repeat();
        }elseif($point == -1){
            $this->remark_id = 7;
            $this->reRegister();
        }elseif($point == -2){
            $this->remark_id = 8;
            $this->reRegister();
        }elseif($point == -3){
            $this->remark_id = 9;
            $this->reRegister();
        }
    	$this->save();
    }
    

    public function computeGrade()
    {
        if(is_numeric($this->exam)){
            $score = $this->accessment() + $this->exam + $this->amended_by;
            if($score >= 75){
                $grade = 'A';
            }elseif($score >= 65){
                $grade = 'B';
            }elseif($score >= 55){
                $grade = 'C';
            }elseif($score >= 45){
                $grade = 'D';
            }elseif($score >= 40){
                $grade = 'E';
            }else{
                $grade = 'F';
            }
        }
    	
    	$this->computePoints($grade);
    }
    public function accessment()
    {
        if(is_numeric($this->ca)){
            return $this->ca;
        }
        return 0;
    }
    public function examination()
    {
        if(is_numeric($this->exam)){
            return $this->exam;
        }
        return 0;
    }
}