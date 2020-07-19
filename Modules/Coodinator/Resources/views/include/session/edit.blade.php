<!-- modal -->
<div class="modal fade" id="session_{{$session->id}}" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="text text-danger">Edit session</h3>	

            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            	<form method="post" action="{{route('coodinator.session.update',[$session->id])}}">
            		@csrf
            		<div class="form-group">
                        <label class="text text-danger">Session Name</label>
                        <input type="text" name="name" class="form-control" value="{{$session->name}}" placeholder="{{date('Y')}}/{{date('Y')+1}}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Session Start</label>
                        <input type="date" name="start" class="form-control" value="{{$session->start}}" >
                        @error('start')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text text-danger">Session End</label>
                        <input type="date" name="end" class="form-control" value="{{$session->end}}" >
                        @error('end')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="button-fullwidth cws-button bt-color-1 btn-block">Update</button>
            	</form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->