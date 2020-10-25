@if(count(administrator()->programmes())>0)
    <div class="col-md-12"><br></div>
    @foreach(administrator()->programmes() as $programme)
    <div class="col-md-12">
	
    <div class="card">
    	<div class="card-header bt-color-1">{{strtoupper($programme->name)}} COURSES</div>
    	<div class="card-body">
    		<table class="table">
	     	<thead>
	     		<tr>
	     			<th>S/N</th>
	     			<th>Couse Title</th>
	     			<th>Course Code</th>
	     			<th>Course Units</th>
	     			<th>Semester</th>
	     			<th></th>
	     		</tr>
	     	</thead>
	     	<tbody>
	     		@foreach($programme->programmeCourses as $programmeCourse)
	     		<tr>
	     			<td>{{$loop->index+1}}</td>
	     			<td>{{$programmeCourse->course->title}}</td>
	     			<td>{{$programmeCourse->course->code}}</td>
	     			<td>{{$programmeCourse->course->unit}}</td>
	     			<td>{{$programmeCourse->course->semester->name}}</td>
	     			<td>
	     				<button class=" cws-button bt-color-1" onclick="confirm('Are you sure you want to delete this course from the list of courses in this department')"><a href="{{route($route['delete'] ?? 'coodinator.course.delete',['course_id'=>$programmeCourse->course->id])}}" style="color: white">Delete</a> </i>
	     				</button>
	     				<button class="button-fullwidth cws-button bt-color-2"><a href="{{route($route['edit'] ?? 'coodinator.course.edit',['course_id'=>$programmeCourse->course->id])}}" style="color: white">Edit</a></i>
	     				</button>
	     			</td>
	     		</tr>
	     		@endforeach
	     	</tbody>
	    </table>
    	</div>
    </div><br> 
    </div> 
	@endforeach
@else
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="alert alert-danger">No course record found for this college</div>
	</div>
@endif