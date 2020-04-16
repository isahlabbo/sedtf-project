<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class Lga extends BaseModel
{
    public function state()
    {
    	return $this->belongsTo(Lga::class);
    }

    public function studentAccounts()
    {
    	return $this->hasMany('Modules\Student\Entities\StudentAccount');
    }
}
