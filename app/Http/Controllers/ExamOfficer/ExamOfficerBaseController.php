<?php

namespace App\Http\Controllers\ExamOfficer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamOfficerBaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:exam_officer');
    }
}
