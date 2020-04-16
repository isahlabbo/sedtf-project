<?php

namespace Modules\Lecturer\Entities;

use App\BaseModel;

class Religion extends BaseModel
{
    public function profiles()
    {
    	return $this->hasMany(Profile::class);
    }
}
