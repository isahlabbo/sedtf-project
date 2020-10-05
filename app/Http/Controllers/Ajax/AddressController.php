<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Coodinator\Entities\Lga;
use Modules\Student\Entities\QualificationTypeSubject;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function getLgas($state_id)
    {
        return response()->json(Lga::where('state_id',$state_id)->pluck('name','id'));
    }

    public function getQualificationSubjects($qualificationTypeId)
    {
        return response()->json(QualificationTypeSubject::where('qualification_type_id',$qualificationTypeId)->pluck('subject','id'));
    }

    
}
