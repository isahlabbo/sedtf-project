<!-- modal -->
<div class="modal fade" id="edit_{{$staff->lecturer->id}}" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">	
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            	<form method="post" action="{{route('coodinator.lecturer.update',[$staff->lecturer->id])}}">
            		@csrf
            		<input type="hidden" name="lecturer_id" value="{{$staff->lecturer->id}}">
            		<div class="form-group">
                        <label class="text text-danger">First Name</label>
                        <input type="text" name="first_name" class="form-control" value="{{$staff->first_name}}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="{{$staff->last_name}}">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            		<div class="form-group">
                        <label class="text text-danger">E-mail</label>
                        <input type="text" name="email" class="form-control" value="{{$staff->lecturer->email}}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{$staff->phone}}">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Password</label>
                        <input type="text" name="real_pass" class="form-control" value="{{$staff->real_pass}}">
                        @error('real_pass')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="{{$staff->profile->gender->id}}">{{$staff->profile->gender->name}}</option>
                            @foreach(administrator()->genders() as $gender)
                                @if($staff->profile->gender->id != $gender->id)
                                    <option value="{{$gender->id}}">{{$gender->name}}</option>
                                @endif
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
                            <option value="{{$staff->profile->religion->id}}">{{$staff->profile->religion->name}}</option>
                            @foreach(administrator()->religions() as $religion)
                                @if($staff->profile->religion->id != $religion->id)
                                    <option value="{{$religion->id}}">{{$religion->name}}</option>
                                @endif
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
                        <input type="date" name="date" class="form-control" value="{{$staff->profile->date_of_birth}}">
                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Employed At</label>
                        <input type="date" name="employed_at" class="form-control" value="{{$staff->employed_at}}">
                        @error('employed_at')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Address</label>
                        <input type="text" name="address" class="form-control" value="{{$staff->profile->address}}">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="button-fullwidth cws-button bt-color-1 btn-block">Update</button>
            	</form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->