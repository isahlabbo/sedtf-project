<?php

namespace Modules\Lecturer\Entities;

use App\BaseModel;

class StaffPosition extends BaseModel
{
    public function staff()
    {
    	return $this->belongsTo(Staff::class);
    }
}
