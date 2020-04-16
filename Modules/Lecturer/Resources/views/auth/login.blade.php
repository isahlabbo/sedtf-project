
@extends('layouts.minimal')
@section('title')
    Sokoto state poly admin lonin page
@endsection
@section('page-content')
    <br><br>
    <section class="">
        <div class="grid-row">
            <div class="login-block shadow">
                <div class="logo">
                    <img src="{{asset('img/logo.png')}}">
                    <h2 style="color: #4a2d09;">Leturer Login</h2>
                </div>
                <form class="login-form" action="{{route('lecturer.login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email" class="login-input form-control" placeholder="email">
                        <span class="input-icon">
                            <i class="fa fa-user"></i>
                        </span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="login-input form-control" placeholder="Pasword">
                        <span class="input-icon">
                            <i class="fa fa-lock"></i>
                        </span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <p class="">
                        <a style="color: #4a2d09;" href="{{ route('password.request') }}">Forgot Password ?</a>
                    </p>
                    <button class="btn btn-block bt-color-1 shadow">{{ __('Login') }}</button>
                    
                    <a href="{{route('welcome')}}" class="btn btn-block bt-color-1 shadow">Home</a>
                </form>
            </div>
        </div>
    </section>
@endsection    