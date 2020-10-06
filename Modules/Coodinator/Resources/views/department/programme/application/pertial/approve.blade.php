<!-- modal -->
<div class="modal fade" id="approve" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">	
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            	<form method="post" action="{{route('coodinator.programme.application.approve',[$application->id])}}">
            		@csrf
                    <div class="form-group">
                        <label class="text text-danger">Schedule</label>
                        <select name="schedule" class="form-control">
                            <option value="">Choose Schedule</option>
                            @foreach($application->programme->programmeSchedules as $programmeSchedule)
                                <option value="{{$programmeSchedule->schedule->id}}">{{$programmeSchedule->schedule->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="button-fullwidth cws-button bt-color-1 btn-block">Approve</button>
            	</form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->