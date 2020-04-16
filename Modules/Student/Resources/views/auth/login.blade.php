
@extends('layouts.minimal')
@section('title')
    SEDTF student lonin page
@endsection
@section('page-content')
    <br><br>
<<<<<<< HEAD
    <section class=" shadow">
        <div class="grid-row">
            <div class="login-block shadow">
                @include('include.pages.feed_back')
                <div class="logo">
                    <img src="{{asset('img/logo.png')}}" data-at2x='img/logo@2x.png' alt>
                    <h2 style="color: #4a2d09">Student Login</h2>
                </div>
=======
    
<div class="row">
    <div class="col-md-4"> </div>
    <div class="col-md-4 search_content text-center">
        <div class="card" style="background-color: #ffa07f;" >
            <div class="card-header login-background">
                @include('include.pages.feed_back')
                <h1 class="search_title">Student Login</h1>
            </div>
            <div class="card-body">
>>>>>>> 177ab22a6050a905e6a9d0559961988c12ffbbe8
                <form class="login-form" method="post" action="{{route('student.auth.login')}}">
                    @csrf
                    <br>
                    <div class="form-group">
                        <input type="text" class="login-input form-control" placeholder="Username" name="user_name">
<<<<<<< HEAD
                        <span class="input-icon">
                            <i class="fa fa-user"></i>
                        </span>
=======
                        
>>>>>>> 177ab22a6050a905e6a9d0559961988c12ffbbe8
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" class="login-input form-control" placeholder="Password" name="password">
<<<<<<< HEAD
                        <span class="input-icon">
                            <i class="fa fa-lock"></i>
                        </span>
=======
>>>>>>> 177ab22a6050a905e6a9d0559961988c12ffbbe8
                    </div>
                    <br>
                    <p class="test">
                        <a href="{{ route('password.request') }}">Forgot Password ?</a>
                    </p>
<<<<<<< HEAD
                    <button class="btn btn-block bt-color-1 shadow">{{ __('Login') }}</button>
                    
                    <a href="{{route('welcome')}}" class="btn btn-block bt-color-1 shadow">Home</a>
=======
                    <button class="btn btn-primary">{{ __('Login') }}</button>
                    
                    <a href="{{route('welcome')}}" class="btn btn-success">Home</a>
>>>>>>> 177ab22a6050a905e6a9d0559961988c12ffbbe8
                </form>
            </div>
        </div>
    </div>                                
</div>
@endsection    