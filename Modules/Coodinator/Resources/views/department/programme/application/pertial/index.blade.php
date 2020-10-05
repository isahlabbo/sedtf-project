<div class="col-md-12 card shadow">
        <div class="card-header">SEDTF {{currentSession()->name}} Registered applications</div>
        <div class="table-responsive card-body" >
            <table class="table">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date Of birth</th>
                        <th>State</th>
                        <th>Lga</th>
                        <th>Address</th>
                        <th>programme</th>
                        
                        <th>
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(currentSession()->applications as $application) 
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>
                            {{$application->first_name}} {{$application->last_name}} {{$application->other_name}}
                            </td>
                            <td>{{$application->email}}</td>
                            <td>{{$application->phone}}</td>
                            <td>{{date('d/M/Y',strtotime($application->date_of_birth))}}</td>
                            <td>{{$application->address->lga->state->name}}</td>
                            <td>{{$application->address->lga->name}}</td>
                            <td>{{$application->address->address}}</td>
                            <td>{{$application->programme->name}}</td>
                            <td>
                                <button class="btn bt-color-1 btn-block">
                                    Edit
                                </button>
                                <button class="btn bt-color-2 btn-block">
                                    View
                                </button>
                                <button class="btn bt-color-3 btn-block">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>