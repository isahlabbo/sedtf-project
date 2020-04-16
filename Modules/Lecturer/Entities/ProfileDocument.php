<?php

namespace Modules\Lecturer\Entities;

use App\BaseModel;

class ProfileDocument extends Model
{
    public function profile()
    {
    	return $this->belongsTo(Profile::class);
    }
}
