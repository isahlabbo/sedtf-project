<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class QualificationTypeSubject extends BaseModel
{
    public function qualificationType()
    {
        return $this->belongsTo(QualificationType::class);
    }

}
