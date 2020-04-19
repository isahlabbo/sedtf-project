<div class="col-md-12"><br>
     	<div class="card shadow">
     		<div class="card-header h4 bt-color-1">
     			The brief overview of {{$result->lecturerCourse->course->code}} Results Uploaded at {{$result->created_at}} for {{$result->session->name}} Session 
     		</div>
     		<div class="card-body shadow">
     			<table class="table shadow">
     				<tr>
     					<td>Registered Students</td>
     					<td>{{count($result->results)}}</td>
     					<td></td>
     				</tr>
     				<tr>
     					<td>A</td>
     					<td>{{$result->numberOfAs()}}</td>
     					<td></td>
     				</tr>
     				<tr>
     					<td>AB</td>
     					<td>{{$result->numberOfABs()}}</td>
     					<td></td>
     				</tr>
     				<tr>
     					<td>B</td>
     					<td>{{$result->numberOfBs()}}</td>
     					<td></td>
     				</tr>
     				<tr>
     					<td>BC</td>
     					<td>{{$result->numberOfBCs()}}</td>
     					<td></td>
     				</tr>
     				<tr>
     					<td>C</td>
     					<td>{{$result->numberOfCs()}}</td>
     					<td></td>
     				</tr>
     				<tr>
     					<td>CD</td>
     					<td>{{$result->numberOfCDs()}}</td>
     					<td></td>
     				</tr>
     				<tr>
     					<td>D</td>
     					<td>{{$result->numberOfDs()}}</td>
     					<td></td>
     				</tr>
     				<tr>
     					<td>E</td>
     					<td>{{$result->numberOfEs()}}</td>
     					<td></td>
     				</tr>
     				<tr>
     					<td>F</td>
     					<td>{{$result->numberOfFs()}}</td>
     					<td></td>
     				</tr>
     				
     				<tr>
						@if(examOfficer())
						<td>
     						<form method="post" action="{{route($routes['approve'] ??  'department.result.course.approve',[$result->id])}}">
     							@csrf
		         				<button class="btn btn-block bt-color-2">{{$result->verification_status == 0 ? 'Approve This Result' : 'Dis Approve This Result'}}</button>
							</form>
						</td>
						<td>
							<button class="btn btn-block bt-color-1" data-toggle="moda" data-target="#newComment">
								Leave Comment 
							</button>
						</tad>
						@else
						
     					<td>
		         		    <button class="btn btn-block bt-color-1"><a href="{{route($routes['amend'] ??  'department.result.course.amend',[$result->id])}}" style="color: white">Amend This Result</a> </button>
		         		</td>
     					
		         		<td>
		         			<button class="btn btn-block bt-color-4 btn-block"><a href="{{route($routes['edit'] ?? 'department.result.course.edit',[$result->id])}}" style="color: white">Edit This Result</a></button>
						 </td>
						@endif 
     				</tr>
     			</table>
     		</div>
     	</div>
    </div>