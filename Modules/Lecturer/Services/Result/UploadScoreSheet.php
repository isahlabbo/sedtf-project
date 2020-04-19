<?php
namespace Modules\Lecturer\Services\Result;

use Modules\Coodinator\Entities\Course;
/**
* this class will upload the score sheet of the course at particular session
*/
class UploadScoreSheet extends DownloadScoreSheet
{
	function __construct(array $data)
	{
		$this->data = $data;
		$this->course = $this->currentCourse();
	}
    
    public function uploadedBy()
    {
    	$allocation = Course::find($this->data['course'])->courseAllocation();
        return $allocation->lecturerCourseResultUploads()->firstOrCreate(['session_id'=>$this->data['session']]);
    }
}