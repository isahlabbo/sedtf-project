
                <h2 class="center-text">Programmes Offered</h2>
                <div class="grid-col-row">
                    @foreach($programmes as $programme)
                        <div class="grid-col grid-col-4">
                            <!-- course item -->
                            <div class="course-item">
                                
                                <div class="course-name clear-fix">
                                <h3><a href="#">{{$programme->name}}</a></h3>
                                    </div>
                                <div class="course-date bg-color-1 clear-fix">
                                    <div class="day"><i class="fa fa-calendar"></i>11 January</div><div class="time"><i class="fa fa-clock-o"></i>At 3:00 pm</div>
                                    <div class="divider"></div>
                                    <div class="description">Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis</div>
                                </div>
                            </div>
                            <!-- / course item -->
                        </div>
                    @endforeach    
                </div>
            
        <!-- / section -->