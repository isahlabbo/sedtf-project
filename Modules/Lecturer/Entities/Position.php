<?php

namespace Modules\Lecturer\Entities;

use App\BaseModel;

class Position extends BaseModel
{
    public function staffPositions()
    {
    	return $this->hasMany(StaffPosition::class);
    }
}
