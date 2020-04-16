
<div class="col-md-3"></div>
<div class="col-md-6"><br>
    <div class="card">
        <div class="card-header bt-color-1 shadow">
            <h3 style="color: #ffffff">New Admission</h3>
        </div>
        <div class="card-body">
            <form class="login-form" action="{{route($route ?? 'coodinator.student.admission.generate.number')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Programme</label>
                    <select name="programme" class="form-control">
                        <option value="">Select Programme</option>
                        @foreach(administrator()->programmes() as $programme)
                            <option value="{{$programme->id}}">{{$programme->name}}</option>
                        @endforeach
                    </select>
                    @error('programme')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Schedule</label>
                    <select name="schedule" class="form-control">
                        <option value="1">Select Schedule</option>
                        
                    </select>
                    @error('schedule')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="btn btn-block bt-color-1">Generate Admission No</button>
            </form>
        </div>
    </div>
</div>