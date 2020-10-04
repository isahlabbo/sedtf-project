<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class QualificationType extends BaseModel
{
    public function qualificationTypeSubjects()
    {
        return $this->hasMany(QualificationTypeSubject::class);
    }
}
