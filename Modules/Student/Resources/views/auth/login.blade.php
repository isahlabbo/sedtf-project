
@extends('layouts.minimal')
@section('title')
    SEDTF student lonin page
@endsection
@section('page-content')
    <br><br>
    <section class=" shadow">
        <div class="grid-row">
            <div class="login-block shadow">
                @include('include.pages.feed_back')
                <div class="logo">
                    <img src="{{asset('img/logo.png')}}" data-at2x='img/logo@2x.png' alt>
                    <h2 style="color: #4a2d09">Student Login</h2>
                </div>
                <form class="login-form" method="post" action="{{route('student.auth.login')}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="login-input form-control" placeholder="Username" name="user_name">
                        <span class="input-icon">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="login-input form-control" placeholder="Password" name="password">
                        <span class="input-icon">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <br>
                    <p class="">
                        <a href="{{ route('password.request') }}" style="color: #4a2d09">Forgot Password ?</a>
                    </p>
                    <button class="btn btn-block bt-color-1 shadow">{{ __('Login') }}</button>
                    
                    <a href="{{route('welcome')}}" class="btn btn-block bt-color-1 shadow">Home</a>
                </form>
            </div>
        </div>
    </section>
@endsection    