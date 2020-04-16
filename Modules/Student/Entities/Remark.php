<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class Remark extends BaseModel
{
    public function results()
    {
    	return $this->hasMany(Result::class);
    }  
}
