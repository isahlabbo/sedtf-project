


		<table class="table shadow">
			<head>
				<tr>
					<td>S/N</td>
					<td>Course Title</td>
					<td>Course Code</td>
					<td>Course Unit</td>
					<td>Semester</td>
					<td>lecturer</td>
					<td></td>
				</tr>
			</head>
			<tbody>
				@foreach(student()->currentLevelCourses() as $levelCourse)
				<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$levelCourse->title}}</td>
					<td>
						{{$levelCourse->code}}
					</td>
					<td>
						{{$levelCourse->unit}}
					</td>
					<td>
						{{$levelCourse->semester->name}}
					</td>
					<td>
						{{$levelCourse->courseLecturer() ? $levelCourse->courseLecturer()->staff->first_name.' '.$levelCourse->courseLecturer()->staff->last_name : 'Not available'}}
					</td>
					<td>
						<input type="checkbox" name="course[]" value="{{$levelCourse->id}}" checked class="form-control">  
					</td>
				</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="strong h4">Total Units</td>
					<td class="strong h4">{{student()->currentLevelCourseUnits()}}</td>
				</tr>
			</tbody>
		</table>	
	