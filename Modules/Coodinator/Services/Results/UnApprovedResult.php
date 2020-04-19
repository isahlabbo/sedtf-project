<?php
namespace Modules\Coodinator\Services\Results;

trait UnApprovedResult
{
    public function unApprovedResults()
    {
        $uploads = [];
        foreach ($this->programmeCourses as $programmeCourse) {
            if($programmeCourse->course->courseAllocation()){
                foreach($programmeCourse->course->courseAllocation()
                ->lecturerCourseResultUploads
                ->where('session_id',currentSession()->id) as $upload){
                    if($upload->verification_status == 0){
                        $uploads[] = $upload;
                    }
                }
            }
        }
        return $uploads;
    }
}