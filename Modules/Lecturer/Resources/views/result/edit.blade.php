@extends('lecturer::layouts.master')

@section('title')
   SEDTF lecturer edit result
@endsection

@section('page-content')
<input type="checkbox" name="">
<div class="col-md-2"></div>
<div class="col-md-8">
	<div class="card shadow">
		<div class="card-header h3 shadow">Edit Result</div>
		<div class="card-body">
			<form method="post" action="{{route('lecturer.result.update',[$result->id])}}">
				@csrf
				<label>CA Score</label>
			    <input type="number" name="ca" class="form-control" value="{{$result->ca}}">
			    <br>

				<label>Exam Score</label>
				<input type="number" name="exam" class="form-control" value="{{$result->exam}}">
				<br>
				
				<label>Amended By</label>
				<input type="number" name="amended_by" class="form-control" value="{{$result->amended_by}}">
				<br>

				<label>Waved By</label>
				<input type="number" name="waved_by" disabled="" class="form-control" value="{{$result->waved_by}}">
				<br>

                <label>Grade</label>
				<input type="text" name="grade" disabled="" class="form-control" value="{{$result->grade}}"><br>

				<label>Points</label>
				<input type="text" disabled="" name="points" class="form-control" value="{{number_format($result->points,2)}}"><br>

				<button class="btn bt-color-3 btn-block shadow">Update</button>
				
			</form>	
		</div>
	</div><br>
	
</div> 
@endsection
