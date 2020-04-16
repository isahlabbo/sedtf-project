<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class StudentAccount extends BaseModel
{
    public function student()
    {
    	return $this->belongsTo(Student::class);
    }

    public function gender()
    {
    	return $this->belongsTo('Modules\Lecturer\Entities\Gender');
    }

    public function tribe()
    {
    	return $this->belongsTo('Modules\Lecturer\Entities\Tribe');
    }

    public function religion()
    {
    	return $this->belongsTo('Modules\Lecturer\Entities\Religion');
    }

    public function lga()
    {
        return $this->belongsTo('Modules\Coodinator\Entities\Lga');
    }
}
