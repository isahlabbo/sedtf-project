
<div class="col-md-3"></div>
<div class="col-md-6">
	<br>
			<br>
			<br>
	<div class="card">
		<div class="card-body">
			<h3 class="text text-danger">{{$message ?? ''}}</h3>
			<form action="{{route($route) ?? route('coodinator.graduate.search')}}" method="post">
				@csrf
				<select class="form-control" name="session">
					<option>Session</option>
					<option value="{{currentSession()->id}}">{{currentSession()->name}}</option>
					@foreach(administrator()->sessions() as $session)
					    @if($session->id != currentSession()->id)
			            <option value="{{$session->id}}">{{$session->name}}</option>
			            @endif
					@endforeach
				</select><br>
				<select class="form-control" name="session">
					<option>Programme</option>
					@foreach(administrator()->programmes() as $programme)
			            <option value="{{$programme->id}}">{{$programme->name}}</option>
					@endforeach
				</select><br>
				<button class="btn bt-color-2 btn-block">{{$message ?? 'Search'}}</button>
			</form>
		</div>
	</div>
</div>