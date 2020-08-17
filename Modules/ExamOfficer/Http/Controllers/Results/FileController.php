<?php

namespace Modules\ExamOfficer\Http\Controllers\Results;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\ExamOfficer\ExamOfficerBaseController;

class FileController extends ExamOfficerBaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('coodinator::department.files.resultUploads.index');
    }

    
}
