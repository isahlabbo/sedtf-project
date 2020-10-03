<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class MaritalStatus extends BaseModel
{
    public function applications(Type $var = null)
    {
        return $this->hasMany(Application::class);
    }
}
