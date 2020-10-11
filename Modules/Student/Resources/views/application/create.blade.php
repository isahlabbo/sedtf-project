@extends('layouts.application')
@section('title')
   SEDTF {{currentSession()->name}} {{$programme->name}} Application Form
@endsection
@section('page-content')
<div class="row">
    <div class="col-md-1"></div>
	<div class="col-md-10">
        <br>        
        <div class="card-box shadow">
            <h4 class="m-t-0 header-title"><b>{{currentSession()->name}} {{$programme->name}} Application Form</b></h4>
            <form id="wizard-validation-form" action="{{route('programme.application.register',[$programme->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <h3>Personal Data</h3>
                    <section>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="house_no">First Name</label>
                            <div class="col-lg-10">
                                <input value="{{old('first_name')}}" placeholder="First Name" class="form-control required" id="userName1" name="first_name" type="text">
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="house_no">Last Name</label>
                            <div class="col-lg-10">
                                <input value="" value="{{old('last_name')}}" placeholder="Last Name"  id="husband_last_name" name="last_name" type="text" class="required form-control" >
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="house_no">Other Name</label>
                            <div class="col-lg-10">
                                <input value="" value="{{old('other_name')}}" placeholder="Other Name"  id="husband_last_name" name="other_name" type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="house_no">Gender</label>
                            <div class="col-lg-10">
                                <select name="gender" id="" class="required form-control">
                                    <option value="">Select Gender</option>
                                    @foreach($genders as $gender)
                                        <option value="{{$gender->id}}">{{$gender->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="house_no">Marital Status</label>
                            <div class="col-lg-10">
                                <select name="marital_status" id="" class="required form-control">
                                    <option value="">Select Marital status</option>
                                    @foreach($maritalStatuses as $maritalStatus)
                                        <option value="{{$maritalStatus->id}}">{{$maritalStatus->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="house_no">Date Of Birth</label>
                            <div class="col-lg-10">
                                <input value="{{old('date_of_birth')}}" class="form-control required"  name="date_of_birth" type="date">
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="house_no">Religion</label>
                            <div class="col-lg-10">
                                <select class="required form-control" name="religion">
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
                            <label class="col-lg-2 control-label " for="house_no">E-mail Address</label>
                            <div class="col-lg-10">
                                <input value="{{old('email')}}" class="form-control required" placeholder="E-mail Address"  name="email" type="email">
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="house_no">Phone Number</label>
                            <div class="col-lg-10">
                                <input value="{{old('phone')}}" class="form-control required" placeholder="Phone"  name="phone" type="text">
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="area">Nationality</label>
                            <div class="col-lg-10">
                                <select class="required form-control" name="country">
                                    <option value="1">Nigeria</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="area">State Of Origin</label>
                            <div class="col-lg-10">
                                <select class="required form-control" name="state">
                                    <option value="">Choose State</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="area">Local Government</label>
                            <div class="col-lg-10">
                                <select class="required form-control" name="lga">
                                    <option value="">Choose LGA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="area">Address</label>
                            <div class="col-lg-10">
                                <textarea name="address" id="" cols="30" rows="3" class="required form-control"></textarea>
                            </div>
                        </div>
                    </section>
                    <h3 >Sponsor</h3>
                    <section>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="area">Sponsor Name</label>
                            <div class="col-lg-10">
                                <input type="text" name="sponsor_name" id="" class="required form-control">
                            </div>
                        </div>
                        
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="area">Sponsor Address</label>
                            <div class="col-lg-10">
                                <textarea name="sponsor_address" id="" cols="30" rows="3" class="required form-control"></textarea>
                            </div>
                        </div>
                    </section>
                    <h3>Qualification</h3>
                    <section>
                        
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label " for="area">Qualification Type</label>
                            
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-9">
                                        <select class="required form-control" name="qualification_type_id">
                                            <option value="">Choose Qualification</option>
                                            @foreach($qualifications as $qualification)
                                                <option value="{{$qualification->id}}">{{$qualification->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="year" id="" class="required form-control" placeholder="Year">
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="form-group clearfix">
                            @foreach([1,2,3,4,5,6,7,8,9] as $subject)
                            <div class="row clearfix">
                                <label class="col-md-2 control-label " for="area">Subject {{$subject}}</label>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <select class="required form-control" name="subjects[]">
                                                <option value="">Choose Subject {{$subject}}</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="required form-control" name="grades[]">
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
                                <input value="{{old('image')}}"  placeholder="Place of birth" class=" required form-control required"  name="image" type="file">
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <div class="col-lg-8">
                                <button class="btn btn-block bt-color-1">Submit</button>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>                  
    </div>    
</div>    
@endsection

@section('scripts')
    <script src="{{asset('js/Ajax/address.js')}}"></script>
    <script src="{{asset('js/Ajax/qualification.js')}}"></script>
    <script src="{{asset('js/imagePreview.js')}}"></script>
@endsection