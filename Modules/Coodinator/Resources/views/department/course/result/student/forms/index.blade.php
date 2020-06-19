@php
	
	$user = examOfficer();
	
@endphp
<div class="col-md-3"></div>
    <div class="col-md-6"><br>
     	<div class="card">
     		<div class="card-header">
     			Check Student result here
     		</div>
     		<div class="card-body">
     			<form method="post" action="{{route($route ?? 'department.student.result.search')}}">
     				@csrf
     				<input type="text" name="admission_no" class="form-control" placeholder="Admission No">
     				<br>
	     			<button class="btn bt-color-1 btn-block">Check Result</button>
     			</form>
     		</div>
     	</div>
    </div>