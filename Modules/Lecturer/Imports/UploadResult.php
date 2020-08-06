<?php

namespace Modules\Lecturer\Imports;

use Modules\Student\Entities\Result;
use Modules\Coodinator\Entities\Admission;
use Maatwebsite\Excel\Concerns\ToModel;
use Modules\Coodinator\Entities\Course;

class UploadResult implements ToModel
{
    

    public $uploaded_by;

    public function __construct($uploaded_by, $data)
    {
        $this->uploadedBy = $uploaded_by;
        $this->data = $data;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $results)
    {
        
        $this->data['admission_no'] = substr($results[2],0,13);
        

        $result = $this->getCurrentSessionCourseRegistrationResult();
        
        if($result){
            
            $result->update(['lecturer_course_result_upload_id'=>$this->uploadedBy->id,'ca'=>$results[3],'exam'=>$results[4]]);
            $result->computeGrade();
        }else{
            session('error',['Sorry this file has passed its name and current session verification, but its content does not matches the current session registration, this happen due to the the previous session result file renamed to the current session result file if this problem persist please download another file and upload again']);
        }
        
    }

    public function getCurrentSessionCourseRegistrationResult()
    {
        $result = null;
        foreach (Admission::where('admission_no',$this->data['admission_no'])->get() as $admission) {
            foreach($admission->courseRegistrations
                        ->where('session_id',$this->data['session'])
                        ->where('course_id',$this->data['course'])
                        ->where('cancelation_status',0) as $registration){
                return $registration->result;
            }
        }
        
        return $result;
    }
}
