@php
if(coodinator()){
	$admissions = coodinator()->admissions->where('session_id',currentSession()->id);
}else{
	$admissions = examOfficer()->admissions();
}
@endphp

@if(count($admissions)>0)
    <div class="card shadow">
    <div class="card-body">
	    <table class="table shadow">
	     	<thead>
	     		<tr>
	     			<th>S/N</th>
	     			<th>Fisrt Name</th>
	     			<th>Middle Name</th>
	     			<th>Last Name</th>
	     			<th>Admission No</th>
	     			<th>Programme</th>
	     			<th>E-mail</th>
	     			<th>Phone</th>
	     			<th>Status</th>
	     			<th></th>
	     		</tr>
	     	</thead>
	     	<tbody>
	     		@foreach($admissions as $admission)
				 @if($admission->student)
	     		<tr>
	     			<td>{{$loop->index+1}}</td>
	     			<td>{{$admission->student->first_name}}</td>
	     			<td>{{$admission->student->middle_name}}</td>
	     			<td>{{$admission->student->last_name}}</td>
	     			<td>{{$admission->admission_no}}</td>
	     			<td>{{$admission->programme->name}}</td>
	     			<td>{{$admission->student->email}}</td>
	     			<td>{{$admission->student->phone}}</td>
	     			<td>{{$admission->student->is_active == 1 ? 'Active' : 'Revoked'}}</td>
	     			<td>
	     				<button class="btn btn-danger" onclick="confirm('Are you sure you want to delete this student from the list of students')">
						 <a href="{{route($route['delete'] ?? 'coodinator.student.admission.delete',
						 ['admission_id'=>$admission->id])}}" style="color: white">Delete</a> </i>
	     				</button>

	     				<button class="btn btn-warning">
						 <a href="{{route($route['revoke'] ?? 'coodinator.student.admission.revoke',
						 ['admission_id'=>$admission->id])}}" style="color: #4a2d09;" onclick="confirm('Are you sure you want to revoke this student from having access to his account')">{{$admission->student->is_active == 1 ? 'Revoke' : 'Activate'}}</a></i>
	     				</button>

						 <button class="btn bt-color-1">
	     					<a href="">Edit</a></i>
	     				</button>
	     			</td>
	     		</tr>
				@endif
	     		@endforeach
	     	</tbody>
	    </table>
		</div>
		</div>
	@else
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="alert alert-danger">No admission record found for this session</div>
	</div>
	@endif   