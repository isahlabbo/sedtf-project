<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class ProgrammeType extends BaseModel
{
    public function programmes()
    {
    	return $this->hasMany(Programme::class);
    }
}
