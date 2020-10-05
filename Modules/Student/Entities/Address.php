<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class Address extends BaseModel
{
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function lga()
    {
        return $this->belongsTo('Modules\Coodinator\Entities\Lga');
    }
}
