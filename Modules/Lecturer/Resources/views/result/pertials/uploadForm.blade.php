<br>
<br>
<div class="col-md-3"></div>
<div class="col-md-6">
	<br>
    <br>
	<div class="card shadow">
		<div class="card-header h3 bt-color-1">Upload Result Here</div>
		<div class="card-body shadow">
			<form action="{{route($route ?? 'lecturer.result.upload.upload')}}" method="post" enctype="multipart/form-data">
				@csrf
		    	@include('lecturer::result.pertials.course')<br>
		    	@include('lecturer::result.pertials.session')<br>
		    	<input type="file" name="result" class="form-control"><br>
		    	<button class="btn btn-block bt-color-1">Upload</button>
		    </form>
		</div>
	</div>
</div> 