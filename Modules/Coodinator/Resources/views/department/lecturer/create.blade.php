@extends('coodinator::layouts.master')
@section('title')
    staff registration page
@endsection
@section('page-content')
<div class="col-md-3"></div>
<div class="col-md-6">
	<br>
    <div class="card shadow">
    	<h4 class="text text-danger center">Register New Lecturer</h4>
    	<div class="card-body">
    		<form method="post" action="{{route('coodinator.lecturer.register')}}" enctype="multipart/form-data">
            		@csrf
            		<div class="form-group">
                        <label class="text text-danger">First Name</label>
                        <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" placeholder="first name">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}" placeholder="last name">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            		<div class="form-group">
                        <label class="text text-danger">E-mail</label>
                        <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="E-mail address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{old('phone')}}" placeholder="phone number">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">StaffID</label>
                        <input type="text" name="staffID" class="form-control" value="{{old('staffID')}}" placeholder="staffID">
                        @error('staffID')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="">Select gender</option>
                            @foreach(administrator()->genders() as $gender)
                                <option value="{{$gender->id}}">{{$gender->name}}</option>
                            @endforeach
                        </select>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Religion</label>
                        <select class="form-control" name="religion">
                            <option value="">Select Religion</option>
                            @foreach(administrator()->religions() as $religion)
                                    <option value="{{$religion->id}}">{{$religion->name}}</option>
                            @endforeach
                        </select>
                        @error('religion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Date of birth</label>
                        <input type="date" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}">
                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Appointment Date</label>
                        <input type="date" name="appointment_date" class="form-control" value="{{old('date_of_birth')}}">
                        @error('appointment_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                            <label class="text text-danger">State</label>
                            <select name="state" class="form-control">
                                <option value=""></option>
                                @foreach(administrator()->states() as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                            @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="text text-danger">Local Government</label>
                            <select name="lga" class="form-control">
                                <option value=""></option>
                                @foreach(administrator()->lgas() as $lga)
                                    <option value="{{$lga->id}}">
                                        {{$lga->name}}
                                    </option>
                                @endforeach
                            </select>
                            @error('student_session')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    <div class="form-group">
                        <label class="text text-danger">Home Address</label>
                        <input type="text" name="address" class="form-control" value="{{old('address')}}" placeholder="Home address">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                            <label class="text text-danger">Choose Picture</label>
                            <input type="file" name="picture" value="{{old('picture')}}" class="form-control">
                            @error('picture')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    <button class="button-fullwidth cws-button bt-color-1 btn-block">Register</button>
            	</form>
    	</div>
    </div>
</div>    
@endsection