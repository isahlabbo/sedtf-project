<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Coodinator\Entities\Programme;

class NotificationController extends Controller
{
    public function getProgramme($toId)
    {
    	if($toId == 3){
    		return response()->json(Programme::where('active',1)->pluck('name','id'));
    	}else{
    		return response()->json([]);
    	}
    }
}
