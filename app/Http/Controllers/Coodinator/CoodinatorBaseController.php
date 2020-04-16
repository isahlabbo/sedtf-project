<?php

namespace App\Http\Controllers\Coodinator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoodinatorBaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:coodinator');
    }
}
