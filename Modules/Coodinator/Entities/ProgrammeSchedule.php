<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class ProgrammeSchedule extends BaseModel
{
    public function programme()
    {
    	return $this->belongsTo(Programme::class);
    }

    public function schedule()
    {
    	return $this->belongsTo('Modules\Student\Entities\Schedule');
    }
}
