<?php

namespace Modules\Coodinator\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
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
        
        $lecturer = Lecturer::find($request->lecturer_id);
        $request->validate(['appointment'=>'required','password'=>'required']);
        coodinator()->examOfficers()->create(
            [
                'email'=>$lecturer->email,
                'password'=>Hash::make($request->password),
                'real_pass'=>$request->password,
                'from'=> $request->appointment_date,
                'lecturer_id'=>$request->lecturer_id
            ]);
        session()->flash('message','The appointment is registered successfully');
        return redirect()->route('coodinator.exam.officer.index');
    }
}
