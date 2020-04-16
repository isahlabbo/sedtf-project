<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class ReservedProgrammeSessionAdmission extends BaseModel
{
    
    public function programme()
    {
    	return $this->belongsTo(Programme::class);
    }

    public function session()
    {
    	return $this->belongsTo(Session::class);
    }

    public function schedule()
    {
        return $this->hasOne('Modules\Student\Entities\Schedule');
    }
}
