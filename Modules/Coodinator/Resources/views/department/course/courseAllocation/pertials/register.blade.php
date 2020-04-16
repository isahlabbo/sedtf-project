    
<div class="col-md-12">
    <div class="card shadow">
        <div class="card-header shadow">
            <h5 class="center">{{strtoupper($programme->name)}} LECTURER COURSE ALLOCATIONS</h5>
        </div>
        <div class="card-body">
            <table class="table shadow">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Course Title</td>
                        <td>Course Code</td>
                        <td>Course Lecturer</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($programme->programmeCourses as $programmeCourse)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$programmeCourse->course->title}}</td>
                        <td>{{$programmeCourse->course->code}}</td>
                        <td>{{$programmeCourse->course->courseLecturer() ? $programmeCourse->course->courseLecturer()->staff->first_name.' '.$programmeCourse->course->courseLecturer()->staff->last_name : 'Not allocated'}}</td>
                        <td>
                            <button data-toggle="modal" data-target="#course_{{$programmeCourse->course->id}}" class="btn btn-block button-fullwidth cws-button bt-color-2">Update Course Allocations</button>
                            @include('coodinator::department.course.courseAllocation.pertials.allocation')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 