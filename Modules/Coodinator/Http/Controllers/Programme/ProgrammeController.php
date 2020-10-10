<?php

namespace Modules\Coodinator\Http\Controllers\Programme;

use Illuminate\Http\Response;
use RealRashid\SweetAlert\Facades\Alert;
use Modules\Coodinator\Entities\Programme;
use Modules\Coodinator\Entities\ProgrammeType;
use App\Http\Controllers\Coodinator\CoodinatorBaseController;
use Modules\Coodinator\Http\Requests\ProgrammeFormRequest as Request;

class ProgrammeController extends CoodinatorBaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('coodinator::department.programme.index',['programmeTypes'=>ProgrammeType::all(),'programmes'=>Programme::all()]);
    }

    

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        $programme = Programme::firstOrCreate([
            'name'=>$request->name,
            'code'=>$request->code,
            'programme_type_id'=>$request->type,
            'batches'=>$request->batches,
            'semesters'=>$request->semesters,
            'fee'=>$request->fee,
            'duration'=>$request->duration,
            'about'=>$request->about,
        ]);

        foreach ($request->schedules as $key => $value) {
            $programme->programmeSchedules()->create(['schedule_id'=>$value]);
        }
        
        return back()->withSuccess('Programme created successfully
            ');
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $programmeId)
    {
        
        $programme = Programme::find($programmeId);
        $programme->update([
            'name'=>$request->name,
            'code'=>$request->code,
            'programme_type_id'=>$request->type,
            'batches'=>$request->batches,
            'semesters'=>$request->semesters,
            'fee'=>$request->fee,
            'duration'=>$request->duration,
            'about'=>$request->about,
        
        ]);
        if ($request->application_status) {
            $programme->update([
                'application_status'=>$request->application_status
                ]);
        }
        
        if($request->remove){
            foreach ($request->remove as $key => $value) {
                foreach ($programme->programmeSchedules->where('schedule_id',$value) as $programmeSchedule) {
                    $programmeSchedule->delete();
                }
            }
        }
        
        if($request->add){
            foreach ($request->add as $key => $value) {
                if($value){
                    $programme->programmeSchedules()->create(['schedule_id'=>$value]);
                }
            }
        }
        return back()->withSuccess('Programme updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function delete($programmeId)
    {

        $programme = Programme::find($programmeId);
        if(count($programme->admissions) == 0){
            $programme->delete();
            return back()->withSuccess('Programme deleted successfully');
        }
        return back()->withWarning('We cant delete this programme because there are record of admission in it');
    }
}
