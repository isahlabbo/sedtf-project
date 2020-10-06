<form id="wizard-vertical" action="{{route('programme.application.register',[$programme->id])}}" method="POST" enctype="multipart/form-data">
	@csrf
	<h3>Personal Information</h3>
	<section>
		<div class="form-group clearfix">
			<div class="col-lg-8">
				<input value="{{old('first_name')}}" placeholder="First Name" class="form-control required" id="userName1" name="first_name" type="text">
			</div>
		</div>
		<div class="form-group clearfix">
			<div class="col-lg-8">
				<input value="" value="{{old('last_name')}}" placeholder="Last Name"  id="husband_last_name" name="last_name" type="text" class="required form-control" >
			</div>
		</div>
        <div class="form-group clearfix">
			<div class="col-lg-8">
				<input value="" value="{{old('other_name')}}" placeholder="Other Name"  id="husband_last_name" name="other_name" type="text" class="required form-control" >
			</div>
		</div>
        <div class="form-group clearfix">
			<div class="col-lg-8">
				<select name="gender" id="" class="form-control">
                    <option value="">Select Gender</option>
					@foreach($genders as $gender)
                        <option value="{{$gender->id}}">{{$gender->name}}</option>
					@endforeach
                </select>
			</div>
		</div>
        <div class="form-group clearfix">
			<div class="col-lg-8">
				<select name="marital_status" id="" class="form-control">
                    <option value="">Select Marital status</option>
					@foreach($maritalStatuses as $maritalStatus)
                        <option value="{{$maritalStatus->id}}">{{$maritalStatus->name}}</option>
					@endforeach
                </select>
			</div>
		</div>
        <div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="house_no">Date Of Birth</label>
			<div class="col-lg-8">
				<input value="{{old('date_of_birth')}}" class="form-control required"  name="date_of_birth" type="date">
			</div>
		</div>
		<div class="form-group clearfix">
			<div class="col-lg-8">
				<select class="form-control" name="religion">
					<option value="">Choose Religion</option>
					@foreach($religions as $religion)
                        <option value="{{$religion->id}}">{{$religion->name}}</option>
					@endforeach
				</select>
			</div>
		</div>
        
	</section>	
	<h3 >Address</h3>
	<section>
	    <div class="form-group clearfix">
			<div class="col-lg-8">
				<input value="{{old('email')}}" class="form-control required" placeholder="E-mail Address"  name="email" type="email">
			</div>
		</div>

		<div class="form-group clearfix">
			<div class="col-lg-8">
				<input value="{{old('phone')}}" class="form-control required" placeholder="Phone"  name="phone" type="text">
			</div>
		</div>

		<div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="area">Nationality</label>
			<div class="col-lg-8">
				<select class="form-control" name="country">
					<option value="1">Nigeria</option>
				</select>
			</div>
		</div>
        <div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="area">State Of Origin</label>
			<div class="col-lg-8">
				<select class="form-control" name="state">
					<option value="">Choose State</option>
					@foreach($states as $state)
					    <option value="{{$state->id}}">{{$state->name}}</option>
					@endforeach
				</select>
			</div>
		</div>
        <div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="area">Local Government</label>
			<div class="col-lg-8">
				<select class="form-control" name="lga">
					<option value="">Choose LGA</option>
				</select>
			</div>
		</div>
		<div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="area">Address</label>
			<div class="col-lg-8">
				<textarea name="address" id="" cols="30" rows="3" class="form-control"></textarea>
			</div>
		</div>
	</section>
	<h3 >Sponsor</h3>
	<section>
		<div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="area">Sponsor Name</label>
			<div class="col-lg-8">
				<input type="text" name="sponsor_name" id="" class="form-control">
			</div>
		</div>
        
		<div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="area">Sponsor Address</label>
			<div class="col-lg-8">
				<textarea name="sponsor_address" id="" cols="30" rows="3" class="form-control"></textarea>
			</div>
		</div>
	</section>
	<h3>Qualification</h3>
	<section>
	    
        <div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="area">Qualification Type</label>
			
			<div class="col-lg-8">
				<div class="row">
				    <div class="col-md-9">
						<select class="form-control" name="qualification_type_id">
							<option value="">Choose Qualification</option>
							@foreach($qualifications as $qualification)
								<option value="{{$qualification->id}}">{{$qualification->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="col-md-3">
				        <input type="text" name="year" id="" class="form-control" placeholder="Year">
					</div>
				</div>
			</div>
			
		</div>

		<div class="form-group clearfix">
		    @foreach([1,2,3,4,5,6,7,8,9,10] as $subject)
			<div class="row clearfix">
                <label class="col-md-2 control-label " for="area">Subject {{$subject}}</label>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-9">
                            <select class="form-control" name="subjects[]">
                                <option value="">Choose Subject {{$subject}}</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="grades[]">
							    <option value="">Grade</option>
                                @foreach(grade() as $grade)
                                    <option value="{{$grade}}">{{$grade}}</option>
								@endforeach
                            </select>
                        </div>
                    </div> 
                </div><br>
			</div>
			@endforeach
		</div>
        
	</section>

    <h3>Upload</h3>
	<section>
        <div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="house_no">upload Picture</label>
			<div class="col-lg-8">
				<input value="{{old('image')}}"  placeholder="Place of birth" class="form-control required"  name="image" type="file">
			</div>
		</div>

		<div class="form-group clearfix">
			<div class="col-lg-8">
				<button class="btn btn-block bt-color-1">Submit</button>
			</div>
		</div>
	</section>
</form>
