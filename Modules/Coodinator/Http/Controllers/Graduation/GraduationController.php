<?php

namespace Modules\Coodinator\Http\Controllers\Graduation;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Coodinator\Entities\Session;
use App\Http\Controllers\Coodinator\CoodinatorBaseController;

class GraduationController extends CoodinatorBaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function graduationIndex()
    {
        return view('coodinator::department.graduation.index',['message'=>'Search Graduated Students','programmes'=>coodinator()->programmes(),'route'=>'coodinator.graduation.search.graduates']);
    }

    public function spillOverIndex()
    {
        return view('coodinator::department.graduation.index',['message'=>'Search Spill Over Students','programmes'=>coodinator()->programmes(),'route'=>'coodinator.graduation.search.spills']);
    }

    
    public function searchGraduateStudents(Request $request)
    {
        $request->validate(['session'=>'required']);
        $session = Session::find($request->session);
        
        return view('coodinator::department.graduation.graduates',['session'=>$session,'students'=>$session->graduatedStudents()]);
    }

    public function searchSpillingStudents(Request $request)
    {
        $request->validate(['session'=>'required']);
        $session = Session::find($request->session);
        return view('coodinator::department.graduation.spilled',['session'=>$session,'students'=>$session->spilledStudents()]);
    }

}
