<?php

namespace App\Http\Middleware;

use Closure;

class HasGraduationStatus
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
        if(student()->graduated()){
            return redirect()->route('student.graduation.page');
        }
        return $next($request);
    }
}
