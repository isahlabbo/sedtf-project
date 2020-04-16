<div class="col-md-2"></div>
<div class="col-md-8"><br>
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h3>Register New Student</h3>
                </div>
            </div>
    
            <form class="login-form" action="{{route($route ?? 'coodinator.student.admission.register.generated.number',[request()->route('admissionNo'),request()->route('schedule')])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-12 mb-2">
                            <img id="picture_preview_container" src="{{asset('img/user.png')}}"
                                alt="" width="140" height="150" class="rounded">
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="hidden" name="schedule" value="{{request()->route('schedule')}}">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}">
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Middle Name</label>
                            <input type="text" name="middle_name" class="form-control" value="{{old('middle_name')}}">
                            @error('middle_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}">
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control">
                                <option value="">Select Gender</option>
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
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Religion</label>
                            <select name="religion" class="form-control">
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
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{old('phone')}}">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label>Admission No</label>
                            <input type="text" disabled="" name="admission_no" class="form-control" value="{{$admissionNo}}">
                            <input type="hidden" name="admissionNo" class="form-control" value="{{$admissionNo}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>State</label>
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
                            <label>Local Government</label>
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
                            <label>Home Address</label>
                            <input type="text" name="address" value="{{old('address')}}" class="form-control">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Choose Picture</label>
                            <input type="file" name="picture" value="{{old('picture')}}" class="form-control">
                            @error('picture')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="col-md-12"><button class="btn btn-block button-fullwidth cws-button bt-color-1 shadow">Register</button></div>
                </div> 
            </form>
        </div>
    </div>
</div>