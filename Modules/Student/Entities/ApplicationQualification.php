<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class ApplicationQualification extends BaseModel
{
    public function application()
    {
        return $this->belongsTo(Application::class)
    }

    public function qualificationTypeSubject()
    {
        return $this->belongsTo(QualificationTypeSubject::class)
    }
}
