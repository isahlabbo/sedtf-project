<li>
    <a href="#">Staffs</a>
    <ul>
        <li>
            <a href="{{route('coodinator.lecturer.index')}}">Lecturers</a>
        </li>
        <li>
            <a href="{{route('coodinator.lecturer.create')}}">Register Lecturer</a>
        </li>
        <li>
            <a href="{{route('coodinator.exam.officer.index')}}">Exam Officers</a>
        </li>
    </ul>
</li>
<li>
    <a href="#">Admissions</a>
    <ul>
        <li>
            <a href="{{route('coodinator.student.admission.generate.number.index')}}">New Admission</a>
        </li>
        <li>
            <a href="{{route('coodinator.student.admission.index')}}">View Student Detail</a>
        </li>
        <li>
            <a href="{{route('coodinator.programme.application.index')}}">Applications</a>
        </li>
    </ul>
</li>


<li>
    <a href="#">Academic</a>
    <ul>
        <li>
        <a href="{{route('coodinator.course.allocation.index')}}">Courses Allocation</a>
        </li>

        <li>
            <a href="{{route('coodinator.course.create')}}">Register Course</a>
        </li>
        
        <li>
            <a href="{{route('coodinator.course.index')}}">View Courses</a>
        </li>
        <li>
            <a href="{{route('coodinator.programme.index')}}">Programmes</a>
        </li>

    </ul>
</li>

<li>
    <a href="#"> <i class="fa fa-message"></i>Notifications</a>
    <ul>
        <li>
            <a href="{{route('coodinator.notification.create')}}" >New Notification</a>
        </li>
        
        <li>
            <a href="{{route('coodinator.notification.index')}}" >Sent Sessions</a>
        </li>
    </ul>
</li>

<li>
    <a href="#"> <i class="fa fa-calendar"></i>Sessions</a>
    <ul>
        <li>
            <a href="#" data-toggle="modal" data-target="#newSession">New Session</a>
        </li>

        <li>
            <a href="{{route('coodinator.session.index')}}">View Sessions</a>
        </li>
        
        <li>
            <a href="#" data-toggle="modal" data-target="#switchSession">Switch Session</a>
        </li>
    </ul>
</li>

<li>
    <a href="#">Graduations</a>
    <ul>
        <li>
            <a href="{{route('coodinator.graduation.graduate.index')}}">Grduated Student</a>
        </li>
        <li>
            <a href="{{route('coodinator.graduation.spill.index')}}">Spill Student</a>
        </li>
    </ul>
</li>



