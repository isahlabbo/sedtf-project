
<select class="form-control" name="programme">
	<option value="">Programme</option>
	@foreach(lecturer()->programmes() as $programme)
	<option value="{{$programme->id}}">
		{{$programme->name}}
	</option>
    @endforeach		   
</select>