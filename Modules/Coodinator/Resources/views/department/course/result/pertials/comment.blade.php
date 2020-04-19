<!-- modal -->
<div class="modal fade" id="newComment" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">	
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            	<form action="{{route('exam.officer.result.course.comment',[$result->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$result->id}}" name="upload">
                    <div class="form-group">
                        <select name="notificationType" class="form-control">
                            <option value="">Notification Type</option>
                            @foreach(notificationTypes() as $notificationType)
                                <option value="{{$notificationType->id}}">{{$notificationType->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="comment" class="form-control" placeholder="leave some comment here"></textarea>
                    </div>
                    <button class="btn btn-block bt-color-1">Comment</button>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>