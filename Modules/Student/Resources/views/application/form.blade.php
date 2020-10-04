<form id="wizard-vertical" action="{{route('programme.application.register',[$programme->id])}}" method="POST" enctype="multipart/form-data">
	@csrf
	<h3>Personal Information</h3>
	<section>
		<div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="first_name">First Name</label>
			<div class="col-lg-8">
				<input value="{{old('first_name')}}" placeholder="First Name" class="form-control required" id="userName1" name="first_name" type="text">
			</div>
		</div>
		<div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="husband_last_name">Last Name</label>
			<div class="col-lg-8">
				<input value="" value="{{old('last_name')}}" placeholder="Last Name"  id="husband_last_name" name="last_name" type="text" class="required form-control" >
			</div>
		</div>
        <div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="husband_last_name">Other Name</label>
			<div class="col-lg-8">
				<input value="" value="{{old('other_name')}}" placeholder="Other Name"  id="husband_last_name" name="other_name" type="text" class="required form-control" >
			</div>
		</div>
        <div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="husband_last_name">Gender</label>
			<div class="col-lg-8">
				<select name="gender" id="" class="form-control">
                    <option value="">Select Gender</option>
                </select>
			</div>
		</div>
        <div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="husband_last_name">Marital Status</label>
			<div class="col-lg-8">
				<select name="gender" id="" class="form-control">
                    <option value="">Select Marital status</option>
                </select>
			</div>
		</div>
        <div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="house_no">Date Of Birth</label>
			<div class="col-lg-8">
				<input value="{{old('place')}}"  placeholder="Place of birth" class="form-control required"  name="place" type="date">
			</div>
		</div>
        
	</section>	
	<h3 >Address</h3>
	<section>
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
					<option value="1">Chose State</option>
				</select>
			</div>
		</div>
        <div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="area">Local Government</label>
			<div class="col-lg-8">
				<select class="form-control" name="lga">
					<option value="1">Chose LGA</option>
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
	
	<h3>Qualification</h3>
	<section>
	    
        <div class="form-group clearfix">
			<label class="col-lg-4 control-label " for="area">Qualification Type</label>
			<div class="col-lg-8">
				<select class="form-control" name="qulaification_type_id">
					<option value="">Choose Qualification</option>
					@foreach($qualifications as $qualification)
					    <option value="{{$qualification->id}}">{{$qualification->name}}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group clearfix">
		    @foreach([1,2,3,4,5,6,7,8,9] as $subject)
			<div class="col-lg-12">
                <label class="col-lg-4 control-label " for="area">Subject {{$subject}}</label>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-9">
                            <select class="form-control" name="subject[name[]]">
                                <option value="1">Choose Subject</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="subiect[grade[]]">
							    <option value="">Grade</option>
                                @foreach(grade() as $grade)
                                    <option value="{{$grade}}">{{$grade}}</option>
								@endforeach
                            </select>
                        </div>
                    </div> 
                </div>
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
	</section>
</form>
