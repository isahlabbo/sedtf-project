<?php

namespace App\Http\Middleware;

use Closure;

class AdmissionIsGoingOn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {    
        if(time() < strtotime(currentSession()->end)){
            return $next($request);
        }else{
            return back()->withWarning('Admission registration is closed, because the current session end period has elapse for more information contact college Coodinator');
        }
        
    }
}
