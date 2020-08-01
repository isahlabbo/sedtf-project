@extends('coodinator::layouts.master')
@section('title')
    SEDTF send notification page
@endsection
@section('page-content')
<div class="col-md-3"></div>
<div class="col-md-6">
	<br>
    <div class="card shadow">
    	<h4 class="text text-danger center">Send New Notification</h4>
    	<div class="card-body">
    		<form method="post" action="{{route('coodinator.notification.send')}}" enctype="multipart/form-data">
            		@csrf
            		<div class="form-group">
                        <select class="form-control" name="notification_type">
                            <option value="">Notification Type</option>
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="notification_to">
                            <option value="">Select Group</option>
                            @foreach($tos as $to)
                                <option value="{{$to->id}}">{{$to->name}}</option>
                            @endforeach
                        </select>
                        @error('to')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group" id="specific">
                        
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="programme">
                            <option value="">Select Programme</option>
                        </select>
                        @error('programme')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    

                    <div class="form-group">
                        <select class="form-control" name="notification_title">
                            <option value="">Notification Title</option>
                            @foreach($titles as $title)
                                <option value="{{$title->id}}">{{$title->name}}</option>
                            @endforeach
                        </select>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    

                    <div class="form-group">
                        <label class="text text-danger">Message</label>
                        <textarea name="notification" class="form-control" cols="15" rows="4" placeholder="Type some text here..."></textarea>
                        @error('notification')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <button class="btn bt-color-1 btn-block">Send</button>
            	</form>
    	</div>
    </div>
</div>    
@endsection

@section('scripts')
    <script src="{{asset('js/Ajax/Notification/to.js')}}"></script>
    <script src="{{asset('js/Ajax/Notification/type.js')}}"></script>
    <script src="{{asset('js/Ajax/Notification/specific.js')}}"></script>
@endsection

