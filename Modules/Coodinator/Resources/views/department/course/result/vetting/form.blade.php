<div class="col-md-3"></div>
<div class="col-md-6"><br>
 	<div class="card shadow">
 		<div class="card-header h3 shadow">Search Results</div>
 		<div class="card-body">
 			<form action="{{route($route ?? 'department.result.course.vetting.search')}}" method="post">
 				@csrf
 				<select class="form-control" name="session">
 					<option value="">Session</option>
 					@foreach($sessions as $session)
 					    <option value="{{$session->id}}">{{$session->name}}</option>
 					@endforeach    
 				</select><br>
 				<select class="form-control" name="programme">
 					<option value="">Programme</option>
 					@foreach($programmes as $programme)
 					    <option value="{{$programme->id}}">{{$programme->name}}</option>
 					@endforeach
 				</select><br>
 				<select class="form-control" name="batch">
 					<option value="">Batch</option>
 				</select><br>

 				<select class="form-control" name="semester">
 					<option value="">Semester</option>
 				</select><br>

 				<label>Student/Page</label>
 				<input type="number" name="paginate" min="1" class="form-control"><br>
 				<button class="btn bt-color-2 btn-block">Search Result</button>
 			</form>
 		</div>
 	</div>
</div>