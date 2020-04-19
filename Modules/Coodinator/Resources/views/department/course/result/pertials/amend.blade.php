<div class="col-md-3"></div>
<div class="col-md-6"><br>
 	<div class="card shadow">
 		<div class="card-header bt-color-1">
 			You can amend {{$result->lecturerCourse->course->code}} Results by adding or removing some marks using positive or negative number. 
 		</div>
 		<div class="card-body">
 			<form method="post" action="{{route($route ?? 'department.result.course.amend.register',[$result->id])}}">
 				@csrf
 				<label>Marks</label>
     			<input type="number" name="marks" class="form-control">
     			<br>
     			<button class="btn bt-color-2 btn-block shadow">Amend Result</button>
 			</form>
 		</div>
 	</div>
</div>