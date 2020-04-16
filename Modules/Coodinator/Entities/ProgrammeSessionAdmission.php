<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class ProgrammeSessionAdmission extends BaseModel
{
    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function schedule()
    {
        return $this->hasOne('Modules\Student\Entities\Schedule');
    }
    
    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }
}
