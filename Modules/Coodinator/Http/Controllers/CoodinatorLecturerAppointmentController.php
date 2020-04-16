<?php

namespace Modules\Coodinator\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Lecturer\Entities\Lecturer;
use App\Http\Controllers\Coodinator\CoodinatorBaseController;


class CoodinatorLecturerAppointmentController extends CoodinatorBaseController
{
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        $staff = Lecturer::find($request->lecturer_id)->staff;
        $request->validate(['appointment'=>'required']);
        coodinator()->examOfficers()->create(
            [
                'email'=>$staff->email,
                'password'=>$staff->password,
                'from'=> $request->appointment_date,
                'lecturer_id'=>$request->lecturer_id
            ]);
        session()->flash('message','The appointment is registered successfully');
        return redirect()->route('coodinator.exam.officer.index');
    }
}
