@extends('coodinator::layouts.master')

@section('title')
    SEDTF registered sessions
@endsection

@section('page-content')
<div class="col-md-1"></div>
	<div class="col-md-10">
		<br>
	    <div class="card shadow">
            <div class="card-header h3 text-danger">Registered Sessions</div>
		    <div class="card-body">
			    <table class="table shadow">
			     	<thead>
			     		<tr>
			     			<th>Name</th>
			     			<th>Start</th>
			     			<th>End</th>
			     			<th>Created At</th>
			     			<th>Updated At</th>
			     			<th></th>
			     		</tr>
			     	</thead>
			     	<tbody>
			     		@foreach(coodinator()->sessions() as $session)
						 
			     		<tr>
			     			<td>{{$session->name}}</td>
			     			<td>{{$session->start}}</td>
			     			<td>{{$session->end}}</td>
			     			<td>{{$session->created_at}}</td>
			     			<td>{{$session->updated_at}}</td>
			     			
			     			<td>
			     				<button class="btn btn-danger" onclick="confirm('Are you sure you want to delete this session')">
								 <a href="{{route('coodinator.session.delete',[$session->id])}}" style="color: white">Delete</a> </i>
			     				</button>

								 <button class="btn bt-color-1">
			     					<a href="#" data-toggle="modal" data-target="#session_{{$session->id}}">Edit</a></i>
			     				</button>
			     			</td>
			     		</tr>
						@include('coodinator::include.session.edit')
			     		@endforeach
			     	</tbody>
			    </table>
			</div>
		</div>
	</div>
</div>
@endsection