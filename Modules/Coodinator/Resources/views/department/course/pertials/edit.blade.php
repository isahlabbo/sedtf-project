<div class="col-md-3"></div>
<div class="col-md-6"><br>
	<div class="card">
		<div class="card-body">
		    <div class="row">
		    	<div class="col-md-12">
		    		<h3 class="text text-success">Edit Course</h3>
		    	</div>
		    </div>
		    
		    <form class="login-form" action="{{route($route ?? 'department.course.update',['course_id'=>$course->id])}}" method="post">
		        @csrf
		        <div class="form-group">
		        	<label class="text text-success">Couser Title</label>
		            <input type="text" name="title" class="form-control" value="{{$course->title}}">
		            @error('title')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		        </div>
		        <div class="form-group">
		        	<label class="text text-success">Couser Code</label>
		            <input type="text" name="code" class="form-control" value="{{$course->code}}">
		            @error('code')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		        </div>
		        <div class="form-group">
		            <label>Couse Unit</label>
		            <select name="unit" class="form-control">
		                <option value="{{$course->unit}}">{{$course->unit}}</option>
		                @foreach([1,2,3,4,5,6] as $unit)
		                    @if($course->unit != $unit)
		                        <option value="{{$unit}}">{{$unit}}</option>
		                    @endif
		                @endforeach
		            </select>
		        </div>
		        <div class="form-group">
		        	<label class="text text-success">Progamme</label>
		            <select name="programme" class="form-control">
		            	<option value="{{$course->courseProgramme()->id}}">{{$course->courseProgramme()->name}}</option>
		            	@foreach(administrator()->programmes() as $programme)
		            	    @if($course->courseProgramme()->id != $programme->id)
		                        <option value="{{$programme->id}}">
		                        	{{$programme->name}}
		                        </option>
		                    @endif 
		            	@endforeach
		            </select>
		            @error('programme')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		        </div>
		        <div class="form-group">
		        	<label class="text text-success">Semester</label>
		            <select name="semester" class="form-control">
		            	<option value="{{$course->semester->id}}">{{$course->semester->name}}</option>
		            	@foreach(administrator()->semesters() as $semester)
		            	    @if($course->semester->id != $semester->id)
			                    <option value="{{$semester->id}}">
			                    	{{$semester->name}}
			                    </option>
		                    @endif
		            	@endforeach
		            </select>
		            @error('semester')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		        </div>
		        <button class="button-fullwidth cws-button bt-color-3">Save Changes</button>
		    </form><br><br>
		</div>
	</div>
</div>