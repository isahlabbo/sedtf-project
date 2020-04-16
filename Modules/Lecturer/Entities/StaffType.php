<?php

namespace Modules\Lecturer\Entities;

use App\BaseModel;

class StaffType extends BaseModel
{
     public function staffCategory()
    {
    	return $this->belongsTo(StaffCategory::class);
    }

    public function staffs()
    {
    	return $this->hasMany(Staff::class);
    }
}
