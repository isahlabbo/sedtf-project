<?php

namespace Modules\Coodinator\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Modules\Lecturer\Entities\Staff;
use Modules\Lecturer\Entities\Lecturer;
use Modules\Coodinator\Services\Admission\FileUpload;
use App\Http\Controllers\Coodinator\CoodinatorBaseController;

class CoodinatorLecturerController extends CoodinatorBaseController
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        return view('coodinator::department.lecturer.index',['staffs'=>Staff::all()]);
    }

    public function update(Request $request)
    {
    	$lecturer = Lecturer::find($request->lecturer_id);

    	$lecturer->staff->update([
    		'first_name'=>$request->first_name,
    		'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'employed_at'=>$request->employed_at,
    	]);

        $lecturer->update([
            'email'=>$request->email,
            'real_pass'=>$request->real_pass,
            'password'=>Hash::make($request->real_pass),
            'from'=>$request->employed_at,
        ]);
        
    	$lecturer->staff->profile->update([
    		'address'=>$request->address,
    		'date_of_birth'=>$request->date,
    		'gender_id'=>$request->gender,
    		'religion_id'=>$request->religion
    	]);

    	session()->flash('message','Lecturer information updated successfully');
    	return back();
    }

    public function create()
    {
        return view('coodinator::department.lecturer.create');
    }

    public function register(Request $request)
    {

        $staff = Staff::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'staffID'=>$request->staffID,
            'email'=>$request->email,
            'from'=>$request->appointment_date,
            'phone'=>$request->phone,
            'real_pass'=>$request->real_pass,
            'employed_at' =>'2019-10-03 18:52:00',
            'password'=> Hash::make($request->real_pass)
        ]);

        $staff->lecturer()->create([
            'admin_id'=>administrator()->id,
            'email'=>$request->email,
            'from'=>$request->appointment_date,
            'real_pass'=>$request->real_pass,
            'password'=> Hash::make($request->real_pass)
        ]);

        $profile = $staff->profile()->create([
            'gender_id'=>$request->gender,
            'religion_id'=>$request->religion,
            'address'=>$request->address,
            'biography'=>'lecturer biography',
            'date_of_birth'=>$request->date_of_birth,
            'lga_id'=>$request->lga,
        ]);

        $image = $this->storeFile($request->picture,'Lecturer/Profile');
        $profile->update(['image'=>$image]);

        session()->flash('message','Lecturer registered successfully');
        return back();
    }
}
