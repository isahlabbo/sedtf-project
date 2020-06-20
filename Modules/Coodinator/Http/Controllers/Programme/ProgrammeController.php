<?php

namespace Modules\Coodinator\Http\Controllers\Programme;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Coodinator\Entities\Programme;
use Modules\Coodinator\Entities\ProgrammeType;
use App\Http\Controllers\Coodinator\CoodinatorBaseController;


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
        $request->validate([
            'name'=>'required|string',
            'code'=>'required|string',
            'type'=>'required',
            'batches'=>'required',
            'semesters'=>'required',
            'fee'=>'required',
            'duration'=>'required',
            'duration'=>'required'
            
        ]);

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
        session()->flash('message','Programme created successfully
            ');
        return back();
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $programmeId)
    {
        $request->validate([
            'name'=>'required|string',
            'code'=>'required|string',
            'type'=>'required',
            'batches'=>'required',
            'semesters'=>'required',
            'fee'=>'required',
            'duration'=>'required',
            'duration'=>'required',
            'about'=>'required'
            
        ]);

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

        foreach ($request->remove as $key => $value) {
            foreach ($programme->programmeSchedules->where('schedule_id',$value) as $programmeSchedule) {
                $programmeSchedule->delete();
            }
        }
        
        return back()->withSuccess('Programme updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
