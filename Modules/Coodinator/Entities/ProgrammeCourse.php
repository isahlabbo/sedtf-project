<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class ProgrammeCourse extends BaseModel
{
	
    public function programme()
    {
    	return $this->belongsTo(Programme::class);
    }

    public function course()
    {
    	return $this->belongsTo(Course::class);
    }

}
