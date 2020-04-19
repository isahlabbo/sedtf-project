<?php

use Modules\Coodinator\Entities\Session;
use Modules\Coodinator\Entities\Coodinator;
use Modules\Coodinator\Entities\Programme;

if (!function_exists('logout_route')) {
    function logout_route()
    {
        if(auth()->guard('admin')->check()){
            $route = 'admin.auth.logout';
        }elseif (auth()->guard('lecturer')->check()) {
            $route = 'lecturer.auth.logout';
        }elseif (auth()->guard('coodinator')->check()) {
            $route = 'coodinator.auth.logout';
        }elseif(auth()->guard('exam_officer')->check()){
            $route = 'exam.officer.auth.logout';
        }else{
            $route = 'student.auth.logout';
        }
        return $route;
    }
}

if (!function_exists('programmes')) {
    function programmes()
    {
        return Programme::all();
    }
}

if (!function_exists('home_route')) {
    function home_route()
    {
        if(auth()->guard('admin')->check()){
            $route = 'admin.dashboard';
        }elseif (auth()->guard('lecturer')->check()) {
            $route = 'lecturer.dashboard';
        }elseif (auth()->guard('coodinator')->check()) {
            $route = 'coodinator.dashboard';
        }elseif(auth()->guard('exam_officer')->check()){
            $route = 'exam.officer.dashboard';
        }else{
            $route = 'student.dashboard';
        }
        return $route;
    }
}

if (!function_exists('storage_url')) {
    function storage_url($url)
    {
        return blank($url) ? $url: Storage::url($url);
    }
}

if (!function_exists('admin')) {
    function admin()
    {
        $admin = null;
        if(auth()->guard('admin')->check()){
            $admin = auth()->guard('admin')->user();
        }
        return $admin;
    }
}

if (!function_exists('examOfficer')) {
    function examOfficer()
    {
        $examOfficer = null;
        if(auth()->guard('exam_officer')->check()){
            $examOfficer = auth()->guard('exam_officer')->user();
        }
        return $examOfficer;
    }
}

if (!function_exists('student')) {
    function student()
    {
        $student = null;
        if(auth()->guard('student')->check()){
            $student = auth()->guard('student')->user();
        }
        return $student;
    }
}

if (!function_exists('lecturer')) {
    function lecturer()
    {
        $lecturer = null;
        if(auth()->guard('lecturer')->check()){
            $lecturer = auth()->guard('lecturer')->user();
        }
        return $lecturer;
    }
}


if (!function_exists('coodinator')) {
    function coodinator()
    {
        $coodinator = null;
        if(auth()->guard('coodinator')->check()){
            $coodinator = auth()->guard('coodinator')->user();
        }
        return $coodinator;
    }
}

if (!function_exists('currentSession')) {
    function currentSession()
    { 
        $currentSession = null;
        foreach (Session::where('status',1)->get() as $session) {
            $currentSession = $session;
        }
        return $currentSession;
    }
}

if (!function_exists('currentCoodinator')) {
    function currentCoodinator()
    { 
        $coodinator = null;
        foreach (Coodinator::where('is_active',1)->get() as $thisCoodinator) {
            $coodinator = $thisCoodinator;
        }
        return $coodinator;
    }
}

if (!function_exists('lastSession')) {
    function lastSession()
    {    
        return Session::find(currentSession()->id-1);
    }
}

if (!function_exists('sessions')) {
    function sessions()
    {    
        return Session::all();
    }
} 
    
if (!function_exists('administrator')) {
    function administrator()
    {    
        $admin = null;
        if(coodinator()){
            $admin = coodinator();
        }elseif(examOfficer()){
            $admin = examOfficer();
        }
        return $admin;
    }
}  