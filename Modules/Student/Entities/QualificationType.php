<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class QualificationType extends Model
{
    public function qualificationTypeSubjects()
    {
        return $this->hasMany(QualificationTypeSubject::class)
    }
}
