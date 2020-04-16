<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LecturerBaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:lecturer');
    }
}
