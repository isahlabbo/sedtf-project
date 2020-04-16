<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;

class State extends BaseModel
{
    public function lgas()
    {
    	return $this->hasMany(Lga::class);
    }
}
