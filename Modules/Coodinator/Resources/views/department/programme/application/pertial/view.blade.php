
    <div class="col-md-1"></div>
	<div class="col-md-10">
        <br>
        <div class="card shadow">
            <div class="row">
                <div class="col-md-12">
                    <strong>
                        <h3 class="text text-center">SOKOTO EDUCATION DEVELOPMENT TRUST FUND (SEDTF)</h3>
                        <p class="text text-center">SHEHU SHAGARI COMPUTER TRAINING INSTITUTE (SSCTI)</p>
                    </strong>
                </div>
            </div>

            <div class="row">
                 <div class="col-md-1"></div>
                <div class="col-md-2">
                <img src="{{asset('img/login_logo.png')}}" data-at2x='img/logo@2x.png' alt>
                </div>
                <div class="col-md-6">
                    <strong>
                        <h3 class="text text-center">COMPUTER TRAINING</h3>
                        <p class="text text-center">APPLICATION FORM</p>
                        <p class="text text-center">{{strtoupper($application->programme->name)}}</p>
                    </strong>
                </div>
                <div class="col-md-2">
                    <a href="" onclick="printdiv('biodata')" class="btn bt-color-1 pull-right m-3">
                        <i class="fa fa-print"></i>
                        <span>Print</span>
                    </a>
                    <img src="{{storage_url($application->image)}}" alt="" width="130" heigth="150">
                </div>
                <div class="col-md-1"></div>
            </div>
            <!-- application personal data -->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                
                    <strong>
                    <ul>
                    <li>PERSONAL DATA</li>
                        <table>
                            <tr>
                                <td>FIRST NAME:</td>
                                <td class="text text-left">{{strtoupper($application->first_name)}}</td>
                            </tr>
                            <tr>
                                <td>LAST NAME:</td>
                                <td class="text text-left">{{strtoupper($application->last_name)}}</td>
                            </tr>
                            <tr>
                                <td>OTHER NAME:</td>
                                <td class="text text-left">{{strtoupper($application->other_name)}}</td>
                            </tr>
                            <tr>
                                <td>DATE OF BIRTH:</td>
                                <td class="text text-left">{{date('d/M/Y',strtotime($application->date_of_birth))}}</td>
                            </tr>
                            <tr>
                                <td>GENDER:</td>
                                <td class="text text-left">{{strtoupper($application->gender->name)}}</td>
                            </tr>
                            <tr>
                                <td>MARITAL STATUS:</td>
                                <td class="text text-left">{{strtoupper($application->maritalStatus->name)}}</td>
                            </tr>
                            <tr>
                                <td>NATIONALITY:</td>
                                <td class="text text-left">NIGERIA</td>
                            </tr>
                            <tr>
                                <td>STATE:</td>
                                <td class="text text-left">{{strtoupper($application->address->lga->state->name)}}</td>
                            </tr>
                            <tr>
                                <td>LOCAL GOVERNMENT:</td>
                                <td class="text text-left">{{strtoupper($application->address->lga->name)}}</td>
                            </tr>
                            <tr>
                                <td>ADDRESS:</td>
                                <td class="text text-left">{{strtoupper($application->addresS->address)}}</td>
                            </tr>
                        </table>
                        <LI>SPONSOR</LI>
                        <table>
                            <tr>
                                <td>SPONSOR NAME:</td>
                                <td class="text text-left">{{strtoupper($application->sponsor->name)}}</td>
                            </tr>
                            <tr>
                                <td>SPONSOR ADDRESS:</td>
                                <td class="text text-left">{{strtoupper($application->sponsor->address)}}</td>
                            </tr>
                            
                        </table>
                        <li>BE NOTIFY THAT</li>
                        <P>You are to carry along this slip with original coppy of all your document and verification fee #1000.00</P>
                        
                        <button class="btn bt-color-1" data-toggle="modal" data-target="#approve">Aprove Application</button>
                        
                        @include('coodinator::department.programme.application.pertial.approve')
                    </ol>    
                    </strong>
                </div>
                <div class="col-md-7">
                    <ul>
                    <li>QUALIFICATION</li>
                        <table class="table table-bordered">
                            <thead>
                                <th>{{$application->qualificationName()}}</th>
                                <th>Subject</th>
                                <th>Grade</th>
                                <th>Year</th>
                            </thead>
                            <tbody>
                            @foreach($application->applicationQualifications as $qualification)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$qualification->qualificationTypeSubject->subject}}</td>
                                    <td>{{$qualification->grade}}</td>
                                    <td>{{$qualification->year}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </ol>
                </div>
            </div>
        </div>    
    </div>    
