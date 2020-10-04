<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\QualificationType;
use Modules\Coodinator\Entities\Programme;

class ApplicationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create($programmeId)
    {
        $programme = Programme::find($programmeId);
        if(is_null($programme)){
            return back()->withWarning('invalid programme ID');
        }
        
        if($programme->application_status == 0){
            return back()->withWarning('sorry application for this programme is currently close');
        }

        return view('student::application.create',['programme'=>$programme,'qualifications'=>QualificationType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function register(Request $request, $programmeId)
    {
        dd($request->all());
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('student::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('student::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
