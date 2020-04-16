<div class="col-md-3"></div>
<div class="col-md-6"><br>
    <div class="row">
    	<div class="col-md-12">
    		<h3>Edit Admission</h3>
    	</div>
    </div>
    
    <form class="login-form" action="{{route($route ?? 'coodinator.student.admission.update',[$admission->id])}}" method="post">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" value="{{$admission->student->first_name}}">
            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" value="{{$admission->student->last_name}}">
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="{{$admission->student->studentAccount->gender->id ?? ''}}">{{$admission->student->studentAccount->gender->name ?? ''}}</option>
                @foreach($admission->genders() as $gender)
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
            <label>Religion</label>
            <select name="religion" class="form-control">
                <option value="{{$admission->student->studentAccount->religion->id ?? ''}}">{{$admission->student->studentAccount->religion->name ?? ''}}</option>
                @foreach($admission->religions() as $religion)
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
            <input type="email" name="email" class="form-control" value="{{$admission->student->email}}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{$admission->student->phone}}">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{$admission->student->studentAccount->address}}">
            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
        	<label>Admission No</label>
            <input type="text" disabled="" name="admission_no" class="form-control" value="{{$admission->admission_no}}">
            @error('admission_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Lga</label>
            <select name="lga" class="form-control">
                <option value="{{$admission->student->studentAccount->lga->id}}">{{$admission->student->studentAccount->lga->name}}</option>
                @foreach(administrator()->lgas() as $lga)
                    @if($lga->id != $admission->student->studentAccount->lga->id)
                        <option value="{{$lga->id}}">{{$lga->name}}</option>
                    @endif
                @endforeach
            </select>
            @error('lga')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Programme</label>
            <select name="programme" class="form-control">
                <option value="{{$admission->programme->id}}">{{$admission->programme->name}}</option>
                @foreach(administrator()->programmes() as $programme)
                    @if($programme->id != $admission->programme->id)
                        <option value="{{$programme->id}}">{{$programme->name}}</option>
                    @endif
                @endforeach
            </select>
            @error('admission_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Schedule</label>
            <select name="schedule" class="form-control">
                <option value="{{$admission->schedule->id}}">{{$admission->schedule->name}}</option>
                @foreach(administrator()->schedules() as $schedule)
                    @if($schedule->id != $admission->schedule->id)
                        <option value="{{$schedule->id}}">{{$schedule->name}}</option>
                    @endif
                @endforeach
            </select>
            @error('admission_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="button-fullwidth cws-button bt-color-1">Register</button>
    </form><br><br>
</div>