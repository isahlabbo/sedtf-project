<?php

namespace Modules\Lecturer\Entities;

use App\BaseModel;

class LecturerNotification extends BaseModel
{
    public function notification()
    {
        return $this->belongsTo('Modules\Coodinator\Entities\Notification');
    }

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function course()
    {
        return $this->belongsTo('Modules\Coodinator\Entities\Course');
    }
}
