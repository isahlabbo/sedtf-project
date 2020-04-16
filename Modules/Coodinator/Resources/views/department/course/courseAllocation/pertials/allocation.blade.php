
<!-- modal -->
<div class="modal fade" id="course_{{$programmeCourse->course->id}}" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header shadow">	
                <h4>{{$programmeCourse->course->code}} Leccturer allocation</h4>
            </div>
            <div class="modal-body">
            	<form action="{{route($route)}}" method="post">
            		@csrf
            		<input type="hidden" name="course" value="{{$programmeCourse->course->id}}">
            		<label>Choose Lecturer</label>
            		<select class="form-control" name="lecturer">
    				<option value="{{$programmeCourse->course->courseLecturer() ? $programmeCourse->course->courseLecturer()->id : ''}}">
    					{{$programmeCourse->course->courseLecturer() ? $programmeCourse->course->courseLecturer()->staff->first_name.' '.$programmeCourse->course->courseLecturer()->staff->last_name : 'Course Lecturer'}}
    				</option>
    				@if($programmeCourse->course->courseLecturer())
	    				@foreach(administrator()->staffs() as $staff)
	                        @if($staff->lecturer && $programmeCourse->course->courseLecturer() && $programmeCourse->course->courseLecturer()->id != $staff->lecturer->id)
	                            <option value="{{$staff->lecturer->id}}">{{$staff->first_name}} {{$staff->last_name}}</option>
	                        @endif
	    				@endforeach
    				@else
	                    @foreach(administrator()->staffs() as $staff)
	                        <option value="{{$staff->lecturer->id}}">{{$staff->first_name}} {{$staff->last_name}}</option>
	    				@endforeach
    				@endif
    			</select><br>
                    <div class="form-group">
                    	<button class="btn-block button-fullwidth cws-button bt-color-2">
                    	    Update Allocation
                    	</button>
                    </div>
            	</form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
