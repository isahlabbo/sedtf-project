<?php
namespace Modules\Student\Services\Traits;

use Illuminate\Support\Carbon;

trait HasLevelAndSemester

{
    use HasCurrentLevelCourses,HasRepeatCourses, HasCurrentLevelCoursesAt;

    public function admissionYear()
    {
        return $this->admission->year;
    }

    public function yearsSinceAdmission()
    {
        return substr(currentSession()->name, 5) - $this->admissionYear();
    }

    public function batch()
    {
        return substr($this->admission->admission_no, 8,1);
    }

}