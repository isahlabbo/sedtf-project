<?php

namespace Modules\Coodinator\Http\Controllers\Session;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Coodinator\Entities\Session;
use App\Http\Controllers\Coodinator\CoodinatorBaseController;


class SessionController extends CoodinatorBaseController
{
    
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function switch(Request $request)
    {
        $request->validate(['name'=>'required']);
        
        foreach (Session::where('status', 1)->get() as $session) {
            $session->update(['status'=>0]);
        }

        $session = Session::find($request->name);
        $session->update(['status'=>1]);

        return back()->withSuccess('Session switched to '.currentSession()->name.' successfully');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        $request->validate(['name'=>'required']);
        if($this->sessionExist($request->name)){
            return back()->withWarning($request->name.' already exist');
        }

        Session::create([
            'name'=>$request->name,
            'start'=>$request->start,
            'end'=>$request->end,
            'status'=>0
        ]);
        return back()->withSuccess($request->name.' session registered successfully');
    }

    public function sessionExist($name)
    {
        $flag = false;
        foreach (Session::where('name', $name)->get() as $session) {
            $flag = true;
        }
        return $flag;
    }

    
}
