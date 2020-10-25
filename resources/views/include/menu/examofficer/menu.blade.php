
<li>
    <a href="#">Admission</a>
    <ul>
        <li>
            <a href="{{route('exam.officer.student.admission.generate.number.index')}}">New Admission</a>
        </li>
        <li>
            <a href="{{route('exam.officer.student.admission.index')}}">Registered Students</a>
        </li>
    </ul>
</li>
<li>
    <a href="#">Graduation</a>
    <ul>
        <li>
            <a href="{{route('exam.officer.graduation.graduate.index')}}">Grduated Student</a>
        </li>
        <li>
            <a href="{{route('exam.officer.graduation.spill.index')}}">Spill Student</a>
        </li>
    </ul>
</li>


<li>
    <a href="#">Results</a>
    <ul>
        <li>
            <a href="{{route('exam.officer.result.scoresheet.download.index')}}">
                Download Course Score Sheet
            </a>
        </li>
        <li>
            <a href="{{route('exam.officer.result.scoresheet.upload.index')}}">
                Upload Course Score Sheet
            </a>
        </li>
        <li>
            <a href="{{route('exam.officer.result.student.index')}}">Check Student Results</a>
        </li>
        
        <li>
            <a href="{{route('exam.officer.result.course.index')}}">View Course Result</a>
        </li>
        <li>
            <a href="{{route('exam.officer.result.vetting.index')}}">View AB Format</a>
        </li>
        <li>
            <a href="{{route('exam.officer.result.student.wave.index')}}">Wave Student Result</a>
        </li>
    </ul>
</li>
<li>
    <a href="#">Files</a>
    <ul>
        <li>
            <a href="{{route('exam.officer.file.upload.result.index')}}">{{currentSession()->name}} Uploaded Result Files</a>
        </li>
        <li>
            <a href="#">{{currentSession()->name}} Sent Result Files</a>
        </li>
    </ul>
</li>


