    <div class="col-md-3">
    	
    </div>
    
    <div class="col-md-6">
        <br>
	    <div class="card">
        	<div class="card-body">
        		<form action="{{route($route ?? 'coodinator.course.allocation.search')}}" method="post">
    			@csrf
    			<label>Programme</label>
    			<select class="form-control" name="programme">
    				@foreach(administrator()->programmes() as $programme)
    				<option value="{{$programme->id}}">{{$programme->name}}</option>
    				@endforeach
    			</select><br>
    			<button class="btn btn-block button-fullwidth cws-button bt-color-2">
					Search Courses
				</button>
				</form>
        	</div>
	    </div> 
	</div> 