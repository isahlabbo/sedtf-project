<?php

namespace Modules\Lecturer\Entities;

use App\BaseModel;

class Gender extends BaseModel
{
    public function profiles()
    {
    	return $this->hasMany(Profile::class);
    }
}
