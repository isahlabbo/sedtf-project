@php
    if(examOfficer()){
		$lecturer = examOfficer()->lecturer;
	}else{
		$lecturer = lecturer();
	}
@endphp
<select class="form-control" name="course">
	<option value="">Course</option>
	@if(lecturer())
		@foreach($lecturer->lecturerCourses->where('is_active',1) as $lecturer_course)
		    @if($lecturer_course->is_active == 1 && $lecturer_course->course->hasRegisteredStudent())
		    <option value="{{$lecturer_course->course->id}}">
		    	{{$lecturer_course->course->code}}
		    </option>
		    @endif
		@endforeach
	@else
		<optgroup label="My Courses">
		    @foreach($lecturer->lecturerCourses->where('lecturer_course_status_id',2) as $lecturer_course)
			    @if(!$lecturer_course->hasUploadedCurrentSessionResult() && $lecturer_course->is_active == 1 && $lecturer_course->course->hasRegisteredStudent())
			    <option value="{{$lecturer_course->course->id}}">
			    	{{$lecturer_course->course->code}}
			    </option>
			    @endif
			@endforeach
	    </optgroup>
	    <optgroup label="Other Lecturer Courses">
	    	@foreach(lecturers() as $currentLecturer)
	    	    @if($currentLecturer->id != $lecturer->id)
				    @foreach($currentLecturer->lecturerCourses->where('lecturer_course_status_id',2) as $currentLecturerCourse)
					    @if(!$currentLecturerCourse->hasUploadedCurrentSessionResult() && $currentLecturerCourse->is_active == 1 && $lecturer_course->course->hasRegisteredStudent())
					    <option value="{{$currentLecturerCourse->course->id}}">
					    	{{$currentLecturerCourse->course->code}}
					    </option>
					    @endif
					@endforeach
			    @endif
			@endforeach
	    </optgroup>
	@endif
</select>