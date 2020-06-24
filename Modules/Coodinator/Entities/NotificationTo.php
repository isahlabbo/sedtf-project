<?php

namespace Modules\Coodinator\Entities;

use App\BaseModel;


class NotificationTo extends BaseModel
{
    public function notifications()
    {
    	return $this->hasMany(Notification::class);
    }
}
