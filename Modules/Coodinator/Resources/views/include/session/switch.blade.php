<!-- modal -->
<div class="modal fade" id="switchSession" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="text text-danger">Switch to the current session</h3>	
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            	<form method="post" action="{{route('coodinator.session.switch')}}">
            		@csrf
            		<div class="form-group">
                        <label class="text text-danger">Session</label>
                        <select name="name" class="form-control">
                        	@foreach(sessions() as $session)
                        	    @if($session->id != currentSession()->id)
                        	        <option value="{{$session->id}}">{{$session->name}}</option>
                        	    @endif
                        	@endforeach
                        </select>
                    </div>
                    <button class="button-fullwidth cws-button bt-color-1 btn-block">Switch Session</button>
            	</form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->