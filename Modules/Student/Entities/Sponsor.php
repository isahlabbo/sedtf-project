<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class Sponsor extends BaseModel
{
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
